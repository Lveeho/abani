<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lot extends Model
{
    //
    use SoftDeletes;
    protected $fillable=[
        'code','manufactured','expiry','quantity','ingredients'
    ];
    public function product(){
        return $this->belongsToMany('App\Product','color_product');
    }
}
