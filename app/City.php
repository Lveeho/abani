<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
       'region_id','name','postalcode'
    ];
    public function addresses(){
        return $this->hasMany('App\Address');
    }
    public function region(){
        return $this->belongsTo('App\Region');
    }
}
