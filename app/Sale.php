<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    //
    use SoftDeletes;
    protected $fillable=[
        'product_color_id','status','duration'
    ];
}
