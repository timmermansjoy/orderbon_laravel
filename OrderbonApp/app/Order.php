<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

   /*  protected $casts = [
        'products' => 'array'
    ]; */



    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }



    protected function convertToDecimal($time)
    {
        //wierd php string conparison
        if(strpos($time, ':') !== false)
        {
            $hms = explode(":", $time);
            return ($hms[0] + ($hms[1]/60));
        }
        return $time;
    }

}
