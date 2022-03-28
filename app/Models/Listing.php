<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public function listingid()
    {
       return $this->hasMany('App\Models\Listingorder','listing_id');
    }

    public function user()
    {
       return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function city()
    {
       return $this->hasOne(City::class, 'id', 'city_id');
    }
    public function suburbs()
    {
       return $this->hasOne(Suburbs::class, 'id', 'suburbs_id');
    }
    
}
