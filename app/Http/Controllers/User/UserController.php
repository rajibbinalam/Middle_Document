<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Suburbs;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class UserController extends Controller {

    public function loginForm() {
        return view('user.login');
    }


    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $data=$request->all();
            // echo "<pre>";print_r($data);die;

            //
            $userStatus=User::where('email', $data['email'])->first();

            if($userStatus->status==0) {
                return redirect()->back()->with('flash_message_forget', 'Your Acount is Inactive  !! please click here to verify email');
            }

            elseif($userStatus->is_banned==1) {
                return redirect()->back()->with('flash_message_error', 'Your Acount is Banned  !! please Contact Admin');
            }

            else {

                if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {

                    Session::put('frontSession', $data['email']);
                    //
                    //
                    return redirect('user/account')->with('flash_message_success', 'Login Successfully !!');
                    ;
                }

                else {
                    return redirect()->back()->with('flash_message_error', 'Invaild email or password');
                }

            }


        }
    }


    public function index() {
        $data['city']=City::get();
        return view('user.register', $data);
    }

    public function get_suburbs(Request $request) {
        $city_id=$request->city_id;
        $all_subrubs=Suburbs::where('city_id', $city_id)->get();
        return response()->json($all_subrubs);
    }

    public function edit_suburbs(Request $request) {
        $city_id=$request->city_id;
        $all_subrubs=Suburbs::where('city_id', $city_id)->get();
        return response()->json($all_subrubs);
    }

    public function registration(Request $request) {


        $validated=$request->validate([ 'username'=> 'required|min:5|max:15',

            ]);

        //  echo "<pre>";print_r($data);die;
        $userCount=User::where('email', $request['email'])->count();

        if ($userCount>0) {
            return redirect()->back()->with('flash_message_error', 'Email already exists!');
        }

        else {
          $gs =GeneralSetting::findOrFail(1);
          // dd($gs); 
          if($gs->auto_approved_new_user=='Yes'){
            $user=new User;
            $user->f_name=$request['f_name'];
            $user->l_name=$request['l_name'];
            $user->city_id=$request['city_id'];
            $user->suburbs_id=$request['suburbs_id'];
            $user->address=$request['address'];

            $user->phone=$request['phone'];
            $user->username=$request['username'];

            $user->email=$request['email'];
            $user->status='1';
            $user->password=bcrypt($request['password']);
            $user->save();
           

            return redirect('/user/login')->with('flash_message_success', 'Please Login to your account !! ');

          }else{
            $user=new User;
            $user->f_name=$request['f_name'];
            $user->l_name=$request['l_name'];
            $user->city_id=$request['city_id'];
            $user->suburbs_id=$request['suburbs_id'];
            $user->address=$request['address'];

            $user->phone=$request['phone'];
            $user->username=$request['username'];

            $user->email=$request['email'];
            $user->password=bcrypt($request['password']);
            $user->save();
            $email=$request['email'];
            $messageData=[ 'email'=>$request['email']];

            Mail::send('user.email.register', $messageData, function($message) use($email) {
                    $message->to($email)->subject('Registration with efox');
                }

            );

            //Send confirm emails
            $email=$request['email'];

            $messageData=['email'=>$request['email'],
            'code'=>base64_encode($request['email'])];

            Mail::send('user.email.confirmation', $messageData, function($message) use($email) {
                    $message->to($email)->subject('Confirm your  Account');
                }

            );

            return redirect('/user/login')->with('flash_message_success', 'Please Confirm Your email to Active your account !! ');
          }
            

        }


    }

    public function verify_email() {
        return view('user.verify_email');
    }

    public function send_verify_email(Request $request) {
        if($request->isMethod('post')) {
            $data=$request->all();
            // dd($data);
            $email=$request['email'];

            $messageData=['email'=>$request['email'],
            'code'=>base64_encode($request['email'])];

            Mail::send('user.email.confirmation', $messageData, function($message) use($email) {
                    $message->to($email)->subject('Confirm your  Account');
                }

            );

            return redirect('/user/login')->with('flash_message_success', 'Please Confirm Your email to Active your account !! ');
        }
    }



    public function confirmAccount($email) {
        $email=base64_decode($email);
        $userCount=User::where('email', $email)->count();

        if ($userCount > 0) {
            $userDetails=User::where('email', $email)->first();

            if ($userDetails->status==1) {
                return redirect('user/login')->with('flash_message_success', 'Your email account is already active . You can login');
            }

            else {
                User::where('email', $email)->update(['status'=>1]);


                $messageData=['email'=>$email,
                'name'=>$userDetails->name];

                Mail::send('user.email.welcome', $messageData, function($message) use($email) {
                        $message->to($email)->subject('Confirm to efox');
                    }

                );

                return redirect('user/login')->with('flash_message_success', 'Your email account is  active now . You can login');
            }
        }

        else {
            abort(404);
        }
    }

    public function account() {
        $data['city']=City::get();

        return view('user.account', $data);
    }

    public function account_edit () {
        $data['city']=City::get();

        return view('user.edit_account', $data);
    }

    public function account_update (Request $request, $id) {
        $user=User::find($id);
        $user->f_name=$request['f_name'];
        $user->l_name=$request['l_name'];
        $user->city_id=$request['city_id'];
        $user->suburbs_id=$request['suburbs_id'];
        $user->address=$request['address'];

        $user->phone=$request['phone'];
        $user->username=$request['username'];

        $user->email=$request['email'];
        $user->save();

        return redirect('user/account')->with('flash_message_success', 'Your account Update Successfully');
    }


    public function logout() {
        Auth::logout();
        Session::forget('frontSession');
        Session::forget('session_id');
        return redirect('/');
    }


    public function forgotPassword(Request $request) {
        if ($request->isMethod('post')) {
            $data=$request->all();
            // echo "<pre>";print_r($data);die;
            $userCount=User::where('email', $data['email'])->count();

            if ($userCount==0) {
                return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
            }

            $userDetails=User::where('email', $data['email'])->first();

            $random_password=random_int(1000, 9999);
            $new_password=bcrypt($random_password);
            User::where('email', $data['email'])->update(['password'=>$new_password]);

            $email=$data['email'];
            $name=$userDetails->name;
            $messageData=[ 'email'=>$email,
            'name'=>$name,
            'password'=>$random_password];

            Mail::send('user.email.forgotpassword', $messageData, function($message) use($email) {
                    $message->to($email)->subject('New Password - for efox user');
                }

            );

            return redirect('/user/login')->with('flash_message_success', 'Please check your email for new password!!');

        }

        return view('user.forgot_password');

    }

}
