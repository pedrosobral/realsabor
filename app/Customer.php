<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf', 'address1', 'address2',
        'neighborhood', 'city', 'state',
        'zip_code', 'phone1', 'phone2',
    ];

     /**
      * Get the company that owns the customer.
      */
     public function company()
     {
         return $this->belongsTo('App\Company');
     }

      /**
       * Get the meals for a customer.
       */
      public function meals()
      {
          return $this->hasMany('App\Meal');
      }

       /**
        * Get the payments for a customer.
        */
       public function payments()
       {
           return $this->hasMany('App\Payment');
       }
}
