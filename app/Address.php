<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'street','streetnumber','boxnumber'
    ];

    public function users(){
        return $this->belongstomany('App\User');
    }
}
