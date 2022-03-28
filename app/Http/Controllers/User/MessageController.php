<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientMessage;
use Mail;
use Auth;

class MessageController extends Controller
{
    public function send_message(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $user = new ClientMessage;
             $user->user_id = $request['user_id'];
             $user->ad_id = $request['ad_id'];
             $user->name = $request['name'];
             $user->email = $request['email'];
             $user->message = $request['message'];

           
             $user->save();
                $email =$request['email'];
               $messageData = [
                   'email'=>$request['email']
                ];
              Mail::send('user.email.message',$messageData,function($message) use($email){
                $message->to($email)->subject('Message from client');
                });
    
                return back();
        }
    }
    public function user_message()
  
    {
        $data['message'] = ClientMessage::where('user_id',Auth::user()->id)->get();
        return view('user.message.view',$data);
    }
    public function reply_message(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
        
        
                $email =$request['email'];
               $messageData = [
                   'email'=>$request['email'],
                   'reply_message'=>$request['reply_message'],
                ];
              Mail::send('user.email.reply',$messageData,function($message) use($email){
                $message->to($email)->subject('Message from User');
                });
    
                return back();
        }
    }
}
