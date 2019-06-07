<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'country_id','name','code'
    ];
    public function cities(){
        return $this->hasMany('App\City');
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
}
