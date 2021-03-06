<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
        'balance',
    ];

     /**
      * Get the customer that owns the payment.
      */
     public function customer()
     {
         return $this->belongsTo('App\Customer');
     }

     /**
     * Get the value formatted.
     *
     * @param  float $value
     * @return string
     * */
    public function getValueAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

     /**
     * Get the value formatted.
     *
     * @param  float $value
     * @return string
     * */
    public function getBalanceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }
}
