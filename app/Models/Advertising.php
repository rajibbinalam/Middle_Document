<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
   use HasFactory;

   public function adsid()
   {
      return $this->hasMany('App\Models\Addfees', 'ads_id');
   }

   public function gallery()
   {
      return $this->hasMany('App\Models\GalleryImage', 'ad_id');
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
   public static function productFilters()
   {
      $productFilters['sellerType'] =array('Owner','Dealer','Agency');
      $productFilters['transmission'] =array('Manual','Automatic','Semi-Automatic');
      $productFilters['doors'] =array('2','3','4','5');
      $productFilters['condition'] =array('New','Used','Certified Pre-Owned');
      $productFilters['aircondition'] =array('Yes','No');
      $productFilters['registerd'] =array('Yes','No');
      return $productFilters;
   }

   protected $casts = [
      'start_date' => 'datetime:Y-m-d',
      'end_date' => 'datetime:Y-m-d',
  ];
}
