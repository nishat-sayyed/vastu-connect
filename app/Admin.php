<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticate
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function agents()
    {
        return $this->morphMany('App\Agent', 'agentable');
    }
}
