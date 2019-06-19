<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'producttype_id','name','description','price','brand_id','category_id','code','is_active'
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
    public function colors(){
        return $this->belongstomany('App\Color','color_product')->withPivot('id','stock')->withTimestamps();
    }
    public function lots(){
        return $this->belongstomany('App\Lot','color_product')->withPivot('id','stock')->withTimestamps();
    }
}
