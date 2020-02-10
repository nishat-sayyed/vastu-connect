<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticate
{
    use Notifiable;
    use SoftDeletes;

    protected $guard = 'agent';

    protected $fillable = [
        'name', 'email', 'password', 'mobile_no', 'commission', 'code'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function agentable()
    {
        return $this->morphTo();
    }
}
