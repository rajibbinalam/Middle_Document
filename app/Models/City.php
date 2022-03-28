<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function subcity()
    {
        return $this->hasMany('App\Models\Suburbs','city_id');
    }
    public function adveties()
    {
        return $this->hasMany('App\Models\Advertising','city_id');
    }

    public static function cities(){
        $getCity= City::with('subcity')->get();
        $getCity = json_decode(json_encode($getCity),true);
        return $getCity;
      }

      public static function advertising(){
        $getCity= City::with('adveties')->get();
        $getCity = json_decode(json_encode($getCity),true);
        return $getCity;
      }
}
