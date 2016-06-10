<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'price',
    ];

    /**
     * Get customers that owns the meal
     */
     public function customer()
     {
         return $this->belongsTo('App\Customer');
     }
}
