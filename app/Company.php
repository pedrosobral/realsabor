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
        'name',
    ];

    /**
     * Get the customers for a company
     */
     public function customers()
     {
         return $this->hasMany('App\Customer');
     }
}
