<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'producttype_id','name','description','ingredients','price','brand_id','category_id','volume','code','is_active'
    ];
}
