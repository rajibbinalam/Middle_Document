<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listing;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Image;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Advertising;




class AdminController extends Controller
{
  public function login()
  {
    return view('admin.login');
  }


  public function adminLogin(Request $request)
  {
    // echo $password = Hash::make('12356789');die();
    if ($request->isMethod('post')) {
      $data = $request->all();
      $validatedData = $request->validate([
        'email' => ['required', 'email', 'max:255'],
        'password' => ['required'],
      ]);
      // echo "<pre>";print_r($data);die();

      $checkAdmin = User::where('email', $data['email'])->first();
      if ($checkAdmin->is_admin == 'admin') {
        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
          return redirect('admin/dashboard')->with('flash_message_success', 'Login Successfully !');
        } else {
          return redirect()->back()->with('flash_message_error', 'Invalid Email or Password');
        }
      } else {
        return redirect('admin')->with('flash_message_error', 'Your are not permited !');
      }
    }
    return view('admin.login');
  }

  public function dashboard()
  {
    $this->data['totalListing'] = Listing::count('id');
    // dd($this->data['totalListing']);
    return view('admin.dashboard', $this->data);
  }

  public function sale_transcation()
  {
    $data['title'] = "Sales Transcations";
    $data['table'] = "Filter Payments By";
    $data['add_title'] = "Add Category";
    $data['add'] = "Add Category";

    return view('admin.sale_transcation', $data);
  }

  public function lisitng_fees_revenue()
  {
    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('listing_fees_view')) {
      $permissions = Role::findByName($role->name)->permissions;

      $data['title'] = "Listing Fees Revenue";
      $data['table'] = "Filter Revenue By";
      $data['add_title'] = "Add Category";
      $data['add'] = "Add Category";
      $data['listing'] = Advertising::with('adsid')->where('listing_type','Auction')->get();
      //  dd($data['listing']);

      return view('admin.lisitng_fees_revenue', $data);
    } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
  }

  public function lisitng_fees_revenue_details($id)
  {
    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('listing_fees_view')) {
      $permissions = Role::findByName($role->name)->permissions;

      $data['title'] = "Listing Fees Revenue";
      $data['table'] = "Filter Revenue By";
      $data['add_title'] = "Add Category";
      $data['add'] = "Add Category";
      $data['advertize_data'] = Listing::with('user')->find($id);

      return view('admin.listing_fees_revenue_details', $data);
    } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
  }


  public function logout()
  {
    Session::flush();
    return redirect('/');
  }



  public function forget_password(Request $request)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();
      // echo "<pre>";print_r($data);die;
      $userCount = User::where('email', $data['email'])->count();
      if ($userCount == 0) {
        return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
      }
      $userDetails = User::where('email', $data['email'])->first();

      $random_password = random_int(1000, 9999);
      $new_password = bcrypt($random_password);
      User::where('email', $data['email'])->update(['password' => $new_password]);

      $email = $data['email'];
      $name = $userDetails->name;
      $messageData = [
        'email' => $email,
        'name' => $name,
        'password' => $random_password
      ];
      Mail::send('admin.email.forgotpassword', $messageData, function ($message) use ($email) {
        $message->to($email)->subject('New Password - for efox admin');
      });

      return redirect('admin')->with('flash_message_success', 'Please check your email for new password!!');
    }
  }


  public function account()
  {
    return view('admin.account');
  }
  public function account_update(Request $request)
  {
    $admin_id = Auth::guard('admin')->user()->id;
    if ($request->isMethod('post')) {
      $data = $request->all();
      //  dd($data);

      $admin = User::find($admin_id);
      $admin->f_name = $data['f_name'];
      $admin->l_name = $data['l_name'];
      $admin->email = $data['email'];
      $admin->phone = $data['phone'];
      if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111, 99999) . '.' . $extension;
          $large_image_path = 'images/admin/profile/' . $filename;

          Image::make($image_tmp)->resize(600, 600)->save($large_image_path);
          $admin->image = $filename;
        }
      }
      $admin->save();
      return redirect()->back()->with('flash_message_success', 'Profile Update Successfully!!');
    }
  }


  public function forgotPassword(Request $request)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();

      $userCount = User::where('email', $data['email'])->count();
      if ($userCount == 0) {
        return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
      }
      $userDetails = User::where('email', $data['email'])->first();

      $random_password = random_int(1000, 9999);
      $new_password = bcrypt($random_password);
      User::where('email', $data['email'])->update(['password' => $new_password]);

      $email = $data['email'];
      $name = $userDetails->name;
      $messageData = [
        'email' => $email,
        'name' => $name,
        'password' => $random_password
      ];
      Mail::send('admin.email.forgotpassword', $messageData, function ($message) use ($email) {
        $message->to($email)->subject('New Password - Efox');
      });

      return redirect('admin')->with('flash_message_success', 'Please check your email for new password!!');
    }

    return view('admin.forget_password');
  }


  public function setting()
  {
    $adminDetails = User::where(['email' => Auth::guard('admin')->user()->email])->first();
    // echo "<pre>";print_r($adminDetails);die;
    return view('admin.admin_password', compact('adminDetails'));
  }
  public function checkPass(Request $request)
  {
    $data = $request->all();

    $user = User::find(Auth::guard('admin')->user()->id);


    if (!Hash::check($data['current_pwd'], $user->password)) {
      echo "false";
      die;
    } else {
      echo "true";
      die;
    }
  }


  public function updatePassword(Request $request)

  {

    $request->validate([

      'new_password' => ['required'],
      'confirm_password' => ['same:new_password'],
    ]);

    if ($request->isMethod('post')) {
      $data = $request->all();

      $admin_id = Auth::guard('admin')->user()->id;

      $userDetails = User::find($admin_id);
      // echo"<pre>";print_r($userDetails);die();


      if (!Hash::check($data['current_pwd'], $userDetails['password'])) {
        return redirect()->route('admin.admin.setting')->with('flash_message_error', ' Current password in not match ');
      } else {


        $userDetails->password = Hash::make($data['new_password']);

        $userDetails->save();
        return redirect()->route('admin.admin.setting')->with('flash_message_success', ' Password update Successfully');
      }
    }
  }




  public function summary()
  {
    $this->data['totalRevenue'] = Listing::whereDay('created_at', carbon::now()->day)->sum('total');
    return view('admin.summary.index', $this->data);
  }
}
