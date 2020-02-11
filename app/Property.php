<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'address',
        'room_no',
        'wing',
        'floor',
        'city',
        'state',
        'location',
        'latitude',
        'longitude',
        'pincode',
        'sqft',
        'price',
        'bhk',
        'sold',
        'status'
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function coverImage()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function priceBreakDown()
    {
        return $this->hasOne('App\PriceBreakDown');
    }
}
