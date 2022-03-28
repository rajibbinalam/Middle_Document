<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suburbs extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }
}
