<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

     /**
      * Get the customers for a company.
      */
     public function customers()
     {
         return $this->hasMany('App\Customer');
     }

     /**
      * Set name attr with uppercase.
      *
      * @param string $name
      */
     public function setNameAttribute($name)
     {
         $this->attributes['name'] = strtoupper($name);
     }

     public function getTotalCustomersBalance()
     {
         $customers = $this->customers;

         $sum = 0;
         foreach ($customers as $customer) {
            $sum += $customer->balance();
         }

         return $sum;
     }
}
