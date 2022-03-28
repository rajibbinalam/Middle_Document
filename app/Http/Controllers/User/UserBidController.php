<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBid;
use Illuminate\Support\Facades\Auth;

class UserBidController extends Controller
{
    public function user_sends_bids(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $bid = new UserBid();
            $bid->user_id = Auth::user()->id;
            $bid->ad_id = $data['ad_id'];
            $bid->bid = $data['bid'];
            $bid->save();
            // dd($bid);
            return back();

        }
    }
}
