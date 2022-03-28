<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertising;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SalesTranscationController extends Controller
{
  public function index()
  {


    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('sales_transcation_view')) {
      $permissions = Role::findByName($role->name)->permissions;


      if (isset($_GET['from']) && $_GET['from'] && $_GET['to']) {
        $fromdate =  $_GET['from'];
        $todate =  $_GET['to'];

        $data['advertisement'] = Advertising::with('adsid')->whereBetween('created_at', [$fromdate, $todate])->get();
        $data['title'] = "Sales Transcations";
        $data['table'] = "Filter Payments By";
        $data['add_title'] = "Add Category";
        $data['add'] = "Add Category";
      } else {
        $data['advertisement'] = Advertising::with('adsid')->get();
        $data['title'] = "Sales Transcations";
        $data['table'] = "Filter Payments By";
        $data['add_title'] = "Add Category";
        $data['add'] = "Add Category";
      }

      return view('admin.sale_transcation.index', $data);
    } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
  }

  public function view_payment($id)
  {

    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('sales_transcation_view')) {
      $permissions = Role::findByName($role->name)->permissions;

      $data = [];
      $data['title'] = "Sales Transcations";
      $data['table'] = "Filter Payments By";
      $data['add_title'] = "Add Category";
      $data['add'] = "Add Category";

      $advertize_data = Advertising::find($id);
      return view('admin.sale_transcation.view_payment', compact('advertize_data'));
    } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
  }
}
