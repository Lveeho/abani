<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'product_color_id','name'
    ];
}
