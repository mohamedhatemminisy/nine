<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sender()
    {
        return $this->belongsTo('App\Message','sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Message','receiver_id');
    }


    public function ad()
    {
        return $this->hasMany('App\Advice','add_by');
    }

    public function favourate(){
       return $this->hasMany('App\Favourites','addBy_id');
    }




}
