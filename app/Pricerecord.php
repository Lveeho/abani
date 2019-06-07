<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pricerecord extends Model
{
    //
    use SoftDeletes;
    protected $fillable=[
        'product_id','price','from_date'
    ];
}
