<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\SiteFees;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SiteFeesController extends Controller
{
    public function index()
    {

        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_site_fees')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data['title'] = "Show Fees";
            $data['table'] = "Show Fees List";
            $data['add_title'] = "Add Site Fees";
            $data['page'] = Page::get();
            $data['fees'] = SiteFees::where('page','1')->get();
            $data['fees_page'] = SiteFees::where('page','2')->get();
            return view("admin.fees_page.index", $data);
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function insert(Request $request)
    {

        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_fees_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

            if ($request->isMethod('post')) {
                $data = new SiteFees();
                $data->page_id = $request['page_id'];

                $data->period = $request['period'];
                $data->price = $request['price'];
                if (empty($request['user_id'])) {
                    $data->user_id = 0;
                } else {
                    $data->user_id = $request['user_id'];
                }

                if (empty($request['user_price'])) {
                    $data->user_price = 0;
                } else {
                    $data->user_price = $request['user_price'];
                }
                $data->save();
                return back();
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update_status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_fees_edit')) {
            $permissions = Role::findByName($role->name)->permissions;


            $data = SiteFees::find($id);
            $data->free = $status;
            if ($data->save()) {
                echo "1";
            } else {
                echo "0";
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function updatePrice($id, $price)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_fees_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data = SiteFees::select('id', 'price')->find($id);
            $data->price = $price;
            if ($data->save()) {
                echo "1";
            } else {
                echo "0";
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function pay_status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_fees_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data = SiteFees::find($id);
            $data->pay = $status;
            if ($data->save()) {
                echo "1";
            } else {
                echo "0";
            }
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function show_site_fees()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_site_fees')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data['title'] = "Show Fees";
            $data['table'] = "Show Fees List";
            $data['add_title'] = "Add Site Fees";
            $data['page'] = Page::get();
            $data['fees'] = SiteFees::get();
            return view("admin.fees_page.show_site_fees", $data);
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function add_site_fees($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_fees_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
            $data['title'] = "Show Fees";
            $data['table'] = "Show Fees List";
            $data['add_title'] = "Add Site Fees";
            $data['page'] = Page::where('id', $id)->first();
            $data['fees'] = SiteFees::get();
            return view("admin.fees_page.add_site_fees", $data);
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }



    public function edit_payment_gateway()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('payment_gateway')) {
            $permissions = Role::findByName($role->name)->permissions;

            $data['title'] = "Payment";
            $data['table'] = "Edit Payment Gateway";
            return view('admin.fees_page.edit_payment_gateway', $data);
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}
