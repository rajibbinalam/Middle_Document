<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RoleController extends Controller
{
    public function index()
    {

        $lims_role_all = Roles::get();
        return view('admin.role.create', compact('lims_role_all'));
    }
    public function insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $role = new Roles();
            $role->name = $data['name'];
            $role->save();
            return back();
        }
    }


    public function delete($id)
    {
        $delete = Roles::find($id);
        // dd($delete);
        $delete->delete();
        return back();
    }

    public function edit($id)
    {
        $data = Roles::find($id);
        return view('admin.role.update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Roles::find($id);
        $data->name = $request->name;
        // $data->description = $request->description;
        $data->save();
        return back()->with('message', 'Roll Updated');
    }

    public function staff()
    {
        $data['staff'] = User::where('is_admin', 'admin')->get();
        $data['staffrole'] = Role::get();
        return view('admin.staff.index', $data);
    }
    public function staff_insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $staff = User::where('email', $data['email'])->count();
            if ($staff > 0) {
                return back()->with('flash_message_error', 'Email already Exists');
            } else {
                $role = new User();
                $role->username = $data['username'];
                $role->role_id = $data['role_id'];
                $role->email = $data['email'];
                $role->is_admin = 'admin';
                $role->password = bcrypt($data['password']);
                $role->save();
                return back()->with('flash_message_success', 'Admin staff Added Successfully');
            }
        }
    }
    public function staff_update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $role = User::find($id);
            $role->username = $data['username'];
            $role->role_id = $data['role_id'];
            $role->email = $data['email'];
            $role->save();
            return back()->with('flash_message_success', 'Admin staff update Successfully');
        }
    }
    public function staff_delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('admin_staff_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
            $delete = User::find($id);
            // dd($delete);
            $delete->delete();
            return back();
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function permission($id)
    {

        if (Auth::guard('admin')->user()->role_id <= 2) {
            $lims_role_data = Roles::find($id);
            $permissions = Role::findByName($lims_role_data->name)->permissions;
            foreach ($permissions as $permission)
                $all_permission[] = $permission->name;
            if (empty($all_permission))
                $all_permission[] = 'dummy text';
            return view('admin.role.permission', compact('lims_role_data', 'all_permission'));
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


        public function setPermission(Request $request)
       {
        $role = Role::firstOrCreate(['id' => $request['role_id']]);

        if ($request->has('users_index')) {
            $permission = Permission::firstOrCreate(['name' => 'users_index']);
            if (!$role->hasPermissionTo('users_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_index');

        if ($request->has('users_create')) {
            $permission = Permission::firstOrCreate(['name' => 'users_create']);
            if (!$role->hasPermissionTo('users_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_create');

        if ($request->has('users_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'users_edit']);
            if (!$role->hasPermissionTo('users_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_edit');

        if ($request->has('users_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'users_delete']);
            if (!$role->hasPermissionTo('users_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_delete');

        if ($request->has('users_status')) {
            $permission = Permission::firstOrCreate(['name' => 'users_status']);
            if (!$role->hasPermissionTo('users_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_status');

        if ($request->has('category_index')) {
            $permission = Permission::firstOrCreate(['name' => 'category_index']);
            if (!$role->hasPermissionTo('category_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_index');

        if ($request->has('category_create')) {
            $permission = Permission::firstOrCreate(['name' => 'category_create']);
            if (!$role->hasPermissionTo('category_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_create');

        if ($request->has('category_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'category_edit']);
            if (!$role->hasPermissionTo('category_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_edit');

        if ($request->has('category_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'category_delete']);
            if (!$role->hasPermissionTo('category_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_delete');

        if ($request->has('category_status')) {
            $permission = Permission::firstOrCreate(['name' => 'category_status']);
            if (!$role->hasPermissionTo('category_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_status');

        if ($request->has('subcategory_index')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_index']);
            if (!$role->hasPermissionTo('subcategory_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_index');

        if ($request->has('subcategory_create')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_create']);
            if (!$role->hasPermissionTo('subcategory_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_create');

        if ($request->has('subcategory_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_edit']);
            if (!$role->hasPermissionTo('subcategory_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_edit');

        if ($request->has('subcategory_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_delete']);
            if (!$role->hasPermissionTo('subcategory_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_delete');

        if ($request->has('subcategory_status')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_status']);
            if (!$role->hasPermissionTo('subcategory_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_status');

        if ($request->has('city_index')) {
            $permission = Permission::firstOrCreate(['name' => 'city_index']);
            if (!$role->hasPermissionTo('city_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('city_index');

        if ($request->has('city_create')) {
            $permission = Permission::firstOrCreate(['name' => 'city_create']);
            if (!$role->hasPermissionTo('city_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('city_create');

        if ($request->has('city_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'city_edit']);
            if (!$role->hasPermissionTo('city_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('city_edit');

        if ($request->has('city_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'city_delete']);
            if (!$role->hasPermissionTo('city_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('city_delete');

        if ($request->has('city_status')) {
            $permission = Permission::firstOrCreate(['name' => 'city_status']);
            if (!$role->hasPermissionTo('city_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('city_status');

        if ($request->has('suburbs_index')) {
            $permission = Permission::firstOrCreate(['name' => 'suburbs_index']);
            if (!$role->hasPermissionTo('suburbs_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('suburbs_index');

        if ($request->has('suburbs_create')) {
            $permission = Permission::firstOrCreate(['name' => 'suburbs_create']);
            if (!$role->hasPermissionTo('suburbs_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('suburbs_create');

        if ($request->has('suburbs_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'suburbs_edit']);
            if (!$role->hasPermissionTo('suburbs_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('suburbs_edit');

        if ($request->has('suburbs_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'suburbs_delete']);
            if (!$role->hasPermissionTo('suburbs_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('suburbs_delete');

        if ($request->has('suburbs_status')) {
            $permission = Permission::firstOrCreate(['name' => 'suburbs_status']);
            if (!$role->hasPermissionTo('suburbs_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('suburbs_status');

        if ($request->has('users_ads_index')) {
            $permission = Permission::firstOrCreate(['name' => 'users_ads_index']);
            if (!$role->hasPermissionTo('users_ads_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_ads_index');

        if ($request->has('users_ads_create')) {
            $permission = Permission::firstOrCreate(['name' => 'users_ads_create']);
            if (!$role->hasPermissionTo('users_ads_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_ads_create');

        if ($request->has('users_ads_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'users_ads_edit']);
            if (!$role->hasPermissionTo('users_ads_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_ads_edit');

        if ($request->has('users_ads_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'users_ads_delete']);
            if (!$role->hasPermissionTo('users_ads_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_ads_delete');

        if ($request->has('users_ads_status')) {
            $permission = Permission::firstOrCreate(['name' => 'users_ads_status']);
            if (!$role->hasPermissionTo('users_ads_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_ads_status');

        if ($request->has('admin_staff_index')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_index']);
            if (!$role->hasPermissionTo('admin_staff_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_index');

        if ($request->has('admin_staff_create')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_create']);
            if (!$role->hasPermissionTo('admin_staff_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_create');

        if ($request->has('admin_staff_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_edit']);
            if (!$role->hasPermissionTo('admin_staff_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_edit');

        if ($request->has('admin_staff_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_delete']);
            if (!$role->hasPermissionTo('admin_staff_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_delete');

        if ($request->has('admin_staff_status')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_status']);
            if (!$role->hasPermissionTo('admin_staff_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_status');

        if ($request->has('role_permission_index')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_index']);
            if (!$role->hasPermissionTo('role_permission_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_index');

        if ($request->has('role_permission_create')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_create']);
            if (!$role->hasPermissionTo('role_permission_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_create');

        if ($request->has('role_permission_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_edit']);
            if (!$role->hasPermissionTo('role_permission_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_edit');

        if ($request->has('role_permission_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_delete']);
            if (!$role->hasPermissionTo('role_permission_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_delete');

        if ($request->has('role_permission_status')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_status']);
            if (!$role->hasPermissionTo('role_permission_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_status');

            
        if ($request->has('setup')) {
            $permission = Permission::firstOrCreate(['name' => 'setup']);
            if (!$role->hasPermissionTo('setup')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('setup');

        if ($request->has('t_c')) {
            $permission = Permission::firstOrCreate(['name' => 't_c']);
            if (!$role->hasPermissionTo('t_c')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('t_c');

        if ($request->has('a_u')) {
            $permission = Permission::firstOrCreate(['name' => 'a_u']);
            if (!$role->hasPermissionTo('a_u')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('a_u');

        if ($request->has('p_c')) {
            $permission = Permission::firstOrCreate(['name' => 'p_c']);
            if (!$role->hasPermissionTo('p_c')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('p_c');
        // Billing and site Fees
        if ($request->has('billing_fees_view')) {
            $permission = Permission::firstOrCreate(['name' => 'billing_fees_view']);
            if (!$role->hasPermissionTo('billing_fees_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('billing_fees_view');

        if ($request->has('view_site_fees')) {
            $permission = Permission::firstOrCreate(['name' => 'view_site_fees']);
            if (!$role->hasPermissionTo('view_site_fees')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('view_site_fees');

        if ($request->has('site_fees_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'site_fees_edit']);
            if (!$role->hasPermissionTo('site_fees_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('site_fees_edit');

        if ($request->has('payment_gateway')) {
            $permission = Permission::firstOrCreate(['name' => 'payment_gateway']);
            if (!$role->hasPermissionTo('payment_gateway')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('payment_gateway');

        // Banner 
        if ($request->has('bannerAndGallery_index')) {
            $permission = Permission::firstOrCreate(['name' => 'bannerAndGallery_index']);
            if (!$role->hasPermissionTo('bannerAndGallery_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('bannerAndGallery_index');

        if ($request->has('bannerAndGallery_create')) {
            $permission = Permission::firstOrCreate(['name' => 'bannerAndGallery_create']);
            if (!$role->hasPermissionTo('bannerAndGallery_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('bannerAndGallery_create');

        if ($request->has('bannerAndGallery_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'bannerAndGallery_edit']);
            if (!$role->hasPermissionTo('bannerAndGallery_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('bannerAndGallery_edit');

        if ($request->has('bannerAndGallery_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'bannerAndGallery_delete']);
            if (!$role->hasPermissionTo('bannerAndGallery_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('bannerAndGallery_delete');

        if ($request->has('bannerAndGallery_status')) {
            $permission = Permission::firstOrCreate(['name' => 'bannerAndGallery_status']);
            if (!$role->hasPermissionTo('bannerAndGallery_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('bannerAndGallery_status');

        // Function
        if ($request->has('function_index')) {
            $permission = Permission::firstOrCreate(['name' => 'function_index']);
            if (!$role->hasPermissionTo('function_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('function_index');

        if ($request->has('function_create')) {
            $permission = Permission::firstOrCreate(['name' => 'function_create']);
            if (!$role->hasPermissionTo('function_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('function_create');

        if ($request->has('function_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'function_edit']);
            if (!$role->hasPermissionTo('function_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('function_edit');

        if ($request->has('function_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'function_delete']);
            if (!$role->hasPermissionTo('function_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('function_delete');

        if ($request->has('function_status')) {
            $permission = Permission::firstOrCreate(['name' => 'function_status']);
            if (!$role->hasPermissionTo('function_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('function_status');

        // Auction
        if ($request->has('auction_index')) {
            $permission = Permission::firstOrCreate(['name' => 'auction_index']);
            if (!$role->hasPermissionTo('auction_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('auction_index');


        if ($request->has('auction_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'auction_edit']);
            if (!$role->hasPermissionTo('auction_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('auction_edit');


        if ($request->has('auction_status')) {
            $permission = Permission::firstOrCreate(['name' => 'auction_status']);
            if (!$role->hasPermissionTo('auction_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('auction_status');


        // Business page
        if ($request->has('business_page_view')) {
            $permission = Permission::firstOrCreate(['name' => 'business_page_view']);
            if (!$role->hasPermissionTo('business_page_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('business_page_view');

        if ($request->has('business_management_view')) {
            $permission = Permission::firstOrCreate(['name' => 'business_management_view']);
            if (!$role->hasPermissionTo('business_management_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('business_management_view');

        if ($request->has('business_transaction_view')) {
            $permission = Permission::firstOrCreate(['name' => 'business_transaction_view']);
            if (!$role->hasPermissionTo('business_transaction_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('business_transaction_view');

        if ($request->has('business_payment_method_view')) {
            $permission = Permission::firstOrCreate(['name' => 'business_payment_method_view']);
            if (!$role->hasPermissionTo('business_payment_method_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('business_payment_method_view');


        // Email Settings
        if ($request->has('email_setting_view')) {
            $permission = Permission::firstOrCreate(['name' => 'email_setting_view']);
            if (!$role->hasPermissionTo('email_setting_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('email_setting_view');


        if ($request->has('email_templete_view')) {
            $permission = Permission::firstOrCreate(['name' => 'email_templete_view']);
            if (!$role->hasPermissionTo('email_templete_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('email_templete_view');


        if ($request->has('smtp_setting_view')) {
            $permission = Permission::firstOrCreate(['name' => 'smtp_setting_view']);
            if (!$role->hasPermissionTo('smtp_setting_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('smtp_setting_view');


        // Advanced
        if ($request->has('advance_view')) {
            $permission = Permission::firstOrCreate(['name' => 'advance_view']);
            if (!$role->hasPermissionTo('advance_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('advance_view');


        if ($request->has('advance_maintenance_view')) {
            $permission = Permission::firstOrCreate(['name' => 'advance_maintenance_view']);
            if (!$role->hasPermissionTo('advance_maintenance_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('advance_maintenance_view');


        if ($request->has('advance_siteMap_view')) {
            $permission = Permission::firstOrCreate(['name' => 'advance_siteMap_view']);
            if (!$role->hasPermissionTo('advance_siteMap_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('advance_siteMap_view');

        // User Special Price
        if ($request->has('user_special_price_index')) {
            $permission = Permission::firstOrCreate(['name' => 'user_special_price_index']);
            if (!$role->hasPermissionTo('user_special_price_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('user_special_price_index');


        if ($request->has('user_special_price_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'user_special_price_edit']);
            if (!$role->hasPermissionTo('user_special_price_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('user_special_price_edit');

        // Report View
        if ($request->has('report_view')) {
            $permission = Permission::firstOrCreate(['name' => 'report_view']);
            if (!$role->hasPermissionTo('report_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('report_view');


        if ($request->has('sales_transcation_view')) {
            $permission = Permission::firstOrCreate(['name' => 'sales_transcation_view']);
            if (!$role->hasPermissionTo('sales_transcation_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('sales_transcation_view');

        if ($request->has('listing_fees_view')) {
            $permission = Permission::firstOrCreate(['name' => 'listing_fees_view']);
            if (!$role->hasPermissionTo('listing_fees_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('listing_fees_view');




        return redirect('admin/role/create')->with('message', 'Permission updated successfully');
       }
    
       
    
}
