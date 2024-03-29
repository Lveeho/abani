<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name','code'
    ];

    public function users(){
        return $this->belongstomany('App\User');
    }
}
