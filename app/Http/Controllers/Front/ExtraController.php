<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\help;

class ExtraController extends Controller
{
    public function t_c()
    {
       return view('front.t_c');
    }

    public function privecy_policy()
    {
        return view('front.privecy_policy');
    }
    public function about_us()
    {
      return view('front.about_us');
    }
    public function help()
    {
        return view('front.help');
    }
    public function send_message(Request $request)
    {
       if($request->isMethod('post')){
           $data = $request->all();
           $help = new help;
           $help->name = $data['name'];
           $help->email = $data['email'];
           $help->subject = $data['subject'];
           $help->message = $data['message'];
           $help->save();
           return back();
       }
    }
}
