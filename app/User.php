<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role','role_user');
    }
    public function addresses(){
        return $this->belongsToMany('App\Address','address_city_region_country_user')->withPivot('id')->withTimestamps();
    }
    public function cities(){
        return $this->belongsToMany('App\City','address_city_region_country_user')->withPivot('id')->withTimestamps();
    }
    public function regions(){
        return $this->belongsToMany('App\Region','address_city_region_country_user')->withPivot('id')->withTimestamps();
    }
    public function countries(){
        return $this->belongsToMany('App\Country','address_city_region_country_user')->withPivot('id')->withTimestamps();
    }

    public function isAdmin(){
        foreach ($this->roles()->get() as $role)
        {
            if ($role->name == 'admin')
            {
                return true;
            }
        }

        return false;
    }
}
