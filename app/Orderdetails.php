<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderdetails extends Model
{
    //
    use SoftDeletes;
    protected $fillable=[
        'product_color_id','order_id','quantity','unitprice'
    ];
}
