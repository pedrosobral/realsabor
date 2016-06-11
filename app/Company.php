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
    protected $fillable = [
        'name', 'cnpj', 'address1', 'address2',
        'neighborhood', 'city', 'state',
        'zip_code', 'phone1', 'phone2'
    ];

     /**
      * Get the customers for a company.
      */
     public function customers()
     {
         return $this->hasMany('App\Customer');
     }
}
