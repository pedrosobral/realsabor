<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the customers for a company
     */
     public function customers()
     {
         return $this->hasMany('App\Customer');
     }
}
