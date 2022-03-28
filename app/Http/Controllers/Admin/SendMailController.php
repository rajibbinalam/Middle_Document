<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
   public function userEmail(Request $request)
   {
       if ($request->isMethod('post')) {
          $data = $request->all();
          $email = $data['email'];
          $messageData = [
            'email'=>$email,
           
          ];
        //   dd($email);
          Mail::send('admin.email.user',$messageData,function($message) use($email){
            $message->to($email)->subject('user email');
          });
       }
       return back();
   }


   public function all_user(Request $request)
   {
       if ($request->isMethod('post')) {
          $data = $request->all();
        
          $email = explode(',',$request->email[0]);
    //    dd($email);
          $messageData = [
            
           
          ];
        //   dd($email);
          Mail::send('admin.email.user',$messageData,function($message) use($email){
            $message->to($email)->subject('user email');
          });
       }
       return back();
   }
}
