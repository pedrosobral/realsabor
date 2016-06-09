<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
     * Get customers that owns the meal
     */
     public function customer()
     {
         return $this->belongsTo('App\Customer');
     }
}
