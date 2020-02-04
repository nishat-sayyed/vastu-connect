<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function images()
    {
        $this->morphMany('App\Image', 'imageable');
    }
}
