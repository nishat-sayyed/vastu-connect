<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticate
{
    use Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'name', 'email', 'password', 'code', 'mobile_no'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
