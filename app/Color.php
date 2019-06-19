<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'color'
    ];
    public function product(){
        return $this->belongsToMany('App\Product','color_product');
    }
}
