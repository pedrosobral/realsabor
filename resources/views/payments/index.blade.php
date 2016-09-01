@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <div class="btn-toolbar">
                <span class="headline">Histórico de Pagamentos - {{$customer->name}}</span>
            </div>
        </div>
        <table class="datatables table table-striped table-hover table-condensed" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Data de criaçāo</th>
                    <th>Valor (R$)</th>
                    <th>Saldo (R$)</th>
                    <th>#REF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer->payments()->orderBy('created_at', 'desc')->get() as $payment)
                    <tr>
                        <td>{{ $payment->id }} </td>
                        <td>{{ date_format(date_create($payment->created_at), "d/m/Y H:i:s") }}</td>
                        <td>{{ number_format(floatval($payment->value), 2, ',', '.') }} </td>
                        <td>{{ number_format(floatval($payment->balance), 2, ',', '.') }} </td>
                        <td>{{ $payment->last_meal_id }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
