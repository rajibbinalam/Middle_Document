<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Page;
use App\Models\SiteFees;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Suburbs;
use App\Models\GalleryImage;
use App\Models\Advertising;
use App\Models\Addfees;
use Illuminate\Http\Request;
use App\Models\UserSpecialPrice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = "Manage User";
        $data['table'] = "Show User List";
        $data['add_title'] = "Edit Category";
        $data['user'] = User::get();
        // dd($data);
        return view('admin.user.index', $data);
    }

    public function user_adds()
    {
        $data['title'] = "User Ads";
        $data['table'] = "Show User Ads";
        $data['add_title'] = "Show Users Ads";
        $data['ads'] = Advertising::get();
        return view('admin.user.user_ads', $data);
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_delete')) {
            $permissions = Role::findByName($role->name)->permissions;

            $user = User::find($id);
            // dd($user);
            $user->delete();
            return back();
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function user_adds_view($id)
    {
        $data['title'] = "User Ads";
        $data['table'] = "Show User Single Ad";
        $data['ads'] = Advertising::find($id);
        return view('admin.user.user_ads_view', $data);
    }
    public function deleteUserAds($id)
    {
        $userAds = Advertising::find($id);
        $userAds->delete();
        return back();
    }


    public function user_price()
    {
        $data['title'] = "Show Fees";
        $data['table'] = "Show Fees List";
        $data['add_title'] = "Add Site Fees";
        $data['page'] = Page::get();
        $data['fees'] = SiteFees::get();
        $data['user_price'] = UserSpecialPrice::get();
        return view('admin.user.user_price', $data);
    }

    public function getuser(Request $requst)
    {
        if ($requst->id != 0) {
            $data = User::findOrFail($requst->id);
            echo '
                <div><strong>ID: </strong>' . $data->id . '</div>
                <div><strong>First Name: </strong>' . $data->f_name . '</div>
                <div><strong>Last Name: </strong>' . $data->l_name . '</div>
                <div><strong>User Name: </strong>' . $data->username . '</div>
                <div><strong>Address: </strong>' . $data->address . '</div>
                <div><strong>EMAIL: </strong>' . $data->email . '</div>
                <div><strong>PHONE: </strong>' . $data->phone . '</div>
            ';
        } else {
            echo '
                <div>Select User First</div>
            ';
        }
    }

    public function user_price_insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $price = SiteFees::get();
            // dd($values);
            foreach ($price as $key => $val) {

                $user = new UserSpecialPrice;
                $user->page_id = $data['page_id'][$key];
                $user->user_id = $request->user_id;
                $user->price = $data['price'][$key];
                $user->user_price = $data['user_price'][$key];
                $user->save();

                // $val->weight_kg =$data['weight_kg'];
                // $val->price = $data['price'];
                // $val->tax = $data['tax'];
                // dd($val);
            }
            return back();
        }
    }

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data = User::find($id);
            $data->status = $status;
            if ($data->save()) {
                echo '1';
            } else {
                echo '0';
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function block($id, $block)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data = User::find($id);
            $data->is_banned = $block;
            if ($data->save()) {
                echo '1';
            } else {
                echo '0';
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}
