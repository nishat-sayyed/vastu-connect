<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticate
{
    use Notifiable;

    protected $guard = 'agent';
    protected $guarded = [];

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
}
