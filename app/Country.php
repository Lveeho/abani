<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];
    public function users(){
        return $this->belongstomany('App\User');
    }
}
