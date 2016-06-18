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

       /**
        * Set name attr with uppercase
        * @param string $name
        */
       public function setNameAttribute($name)
       {
           $this->attributes['name'] = strtoupper($name);
       }

       /**
        * Set address1 attr with uppercase
        * @param string $address1
        * */
       public function setAddress1Attribute($address)
       {
           $this->attributes['address1'] = strtoupper($address);
       }

       /**
        * Set address2 attr with uppercase
        * @param string $address2
        * */
       public function setAddress2Attribute($address)
       {
           $this->attributes['address2'] = strtoupper($address);
       }

       /**
        * Set neighborhood attr with uppercase
        * @param string $neighborhood
        * */
       public function setNeighborhoodAttribute($neighborhood)
       {
           $this->attributes['neighborhood'] = strtoupper($neighborhood);
       }

       /**
        * Set city attr with uppercase
        * @param string $city
        * */
       public function setCityAttribute($city)
       {
           $this->attributes['city'] = strtoupper($city);
       }

       /**
        * Set state attr with uppercase
        * @param string $state
        * */
       public function setStateAttribute($state)
       {
           $this->attributes['state'] = strtoupper($state);
       }
}
