<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * Get the customer that owns the payment
     */
     public function customer()
     {
         $this->belongsTo('App\Customer');
     }
}
