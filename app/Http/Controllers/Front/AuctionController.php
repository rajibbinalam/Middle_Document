<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Advertising;
use App\Models\UserBid;
use App\Models\User;
use Carbon\Carbon;

class AuctionController extends Controller
{
    public function auction($id)
    
    {
        $data['advertising'] = Advertising::with('gallery')->find($id);
        $higest_bid = UserBid::where('ad_id',$data['advertising']->id)->orderBy('bid', 'desc')->first();
        $countbid = UserBid::where('ad_id',$data['advertising']->id)->count('id');
        $userbid = UserBid::where('ad_id',$data['advertising']->id)->get();
        $remaining_days = Carbon::parse($data['advertising']->start_date)->diffInDays(Carbon::parse($data['advertising']->end_date));
    //  dd($remaining_days);
    
  $dyaTime = $data['advertising']->start_date->toDateString().' ' .' '. $data['advertising']->start_time;
  $t1 = Carbon::parse($dyaTime);
//   dd($t1);

  $endTime = $data['advertising']->end_date->toDateString().' ' .' '. $data['advertising']->end_time;
  $t2 = Carbon::parse($endTime);
  $difference = $t1->diff($t2);
  $diffInSeconds = $difference->s;
$diffInMinutes = $difference->i; 
$diffInHours   = $difference->h; 
$diffInDays    = $difference->d;
    // dd($remaining_times);
            $date = $data['advertising']->start_time;
            $formet = date('h:i:s a', strtotime($date));
            $dateend = $data['advertising']->end_time;
            $formetend = date('h:i:s a', strtotime($dateend));
           //  dd($formet);
       //    dd($user);
        
           // dd($higest_bid);
           // dd($data['advertising']);
           return view('front.auction_listing',$data,compact('diffInDays','diffInMinutes','higest_bid','formet','formetend','userbid','countbid','remaining_days','diffInHours','diffInSeconds'));

      
    }
}
