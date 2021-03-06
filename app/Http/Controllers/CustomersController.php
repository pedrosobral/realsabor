<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Meal;
use App\Payment;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::lists('name', 'id');

        return view('customer.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company_id = $request->input('company_id');
        // create a new company if it not exists
        if (!is_numeric($company_id)) {
            Company::create(['name' => $company_id]);
            // get the lastest company that we just created
            $company = Company::findOrFail(Company::all()->last()->id);
        } else {
            $company = Company::findOrFail($company_id);
        }

        $customer = Customer::create($request->all());
        $company->customers()->save($customer);

        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $lastBalance = 0;

        // get last meal id paid
        $lastMealIdPaid = $customer->payments->last();

        // if it's first time paying
        if (!$lastMealIdPaid) {
            $lastMealIdPaid = 0;
        } else {
            $lastMealIdPaid = $customer->payments->last()->last_meal_id;
            $lastBalance = $customer->payments->last()->balance;
        }

        // sum all meals price
        $balance = floatval($customer->meals()->where('id', '>', $lastMealIdPaid)->sum('price'));

        // plus the lastest balance
        $balance += $lastBalance;
        $balance = number_format($balance, 2, ',', '.');
        return view('customer.show', compact('customer', 'balance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payment(Request $request)
    {
        $lastBalance = 0;
        // get customer
        $customer = Customer::findOrFail($request->id);

        // get last meal id paid
        $lastMealIdPaid = $customer->payments->last();

        // if it's first time paying
        if (!$lastMealIdPaid) {
            $lastMealIdPaid = 0;
        } else {
            $lastMealIdPaid = $customer->payments->last()->last_meal_id;
            $lastBalance = $customer->payments->last()->balance;
        }

        // sum all meals price
        $sumDebit = floatval($customer->meals()->where('id', '>', $lastMealIdPaid)->sum('price'));

        // plus the lastest balance
        $sumDebit += $lastBalance;

        // calculate balance
        $balance = $sumDebit - $request->value;

        // get last meal
        $last_meal_id = $customer->meals->last()->id;

        // create payment
        $payment = new Payment();
        $payment->value         = $request->value;
        $payment->balance       = $balance;
        $payment->last_meal_id  = $last_meal_id;
        // save it
        $customer->payments()->save($payment);
    }

    public function meal(Request $request)
    {
        $meal = new Meal();
        $meal->price = $request->price;
        $meal->date = $request->date;

        $customer = Customer::findOrFail($request->id);
        $customer->meals()->save($meal);

        return $request->id;
    }
}
