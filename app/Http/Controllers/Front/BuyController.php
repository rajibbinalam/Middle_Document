<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Advertising;
use App\Models\UserBid;
use App\Models\User;
use Carbon\Carbon;

class BuyController extends Controller
{
   public function buy($id)
   {
    $data['advertising'] = Advertising::with('gallery')->find($id);
    $higest_bid = UserBid::where('ad_id',$data['advertising']->id)->orderBy('bid', 'desc')->first();
    $countbid = UserBid::where('ad_id',$data['advertising']->id)->count('id');
    $userbid = UserBid::where('ad_id',$data['advertising']->id)->get();
    $remaining_days = Carbon::parse($data['advertising']->start_date)->diffInDays(Carbon::parse($data['advertising']->end_date));
//  dd($remaining_days);


      return view('front.buy_listing',$data,compact('higest_bid','userbid','countbid'));
   }


   public function user_listing($id)
   {
    $data['advertising'] = Advertising::with('gallery')->where('id',$id)->first();
  
     $data['user_listing'] = Advertising::where('user_id',$data['advertising']->user_id)->get();
   //   dd($data['user_listing']);



      return view('front.seller_listing',$data);
   }
}
