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

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function producttype(){
        return $this->belongsTo('App\Producttypes');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}
