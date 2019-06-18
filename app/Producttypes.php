<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producttypes extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
        'type'
    ];
    public function products(){
        return $this->hasMany('App\Product');
    }
}
