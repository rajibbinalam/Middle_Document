<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WormSlider extends Model
{
    use HasFactory;
    public static function wormSlider(){
        $data= WormSlider::where('page_id','1')->get()->toArray();
        $worm = array_chunk($data,3);
        return $worm;
    }
}
