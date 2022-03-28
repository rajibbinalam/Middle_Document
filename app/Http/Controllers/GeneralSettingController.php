<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\AutctionSetting;
use App\Models\BidSetting;
use Image;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GeneralSettingController extends Controller
{
    public function generalSetting()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('setup')) {
            $permissions = Role::findByName($role->name)->permissions;

            $gs = GeneralSetting::latest()->first();
            $data['title'] = "General Setting ";
            $data['table'] = "Website Setup";
            return view('admin.general.setting', $data, compact('gs'));
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $setting = GeneralSetting::latest()->first();
            $setting->users_login_by = $data['users_login_by'];
            $setting->auto_approved_new_user = $data['auto_approved_new_user'];
            $setting->confirm_new_user_status = $data['confirm_new_user_status'];
            $setting->auto_approved_new_user_as_sellers = $data['auto_approved_new_user_as_sellers'];
            $setting->auto_approved_new_user_as_buyers = $data['auto_approved_new_user_as_buyers'];
            $setting->website_name = $data['website_name'];
            $setting->site_title = $data['site_title'];

            $setting->meta_description = $data['meta_description'];
            $setting->website_currency = $data['website_currency'];
            $setting->homepage_featured = $data['homepage_featured'];
            $setting->category_featured = $data['category_featured'];
            $setting->per_category_page = $data['per_category_page'];
            $setting->business_page = $data['business_page'];

            $setting->geolocation_country = $data['geolocation_country'];

            $setting->language = $data['language'];
            // $setting->google_analytical_code = $data['google_analytical_code'];
            $setting->contract_form = $data['contract_form'];
            $setting->banned_words = json_encode($data['banned_words']);
            $setting->banned_content = $data['banned_content'];
            $setting->meta_keyword = $data['meta_keyword'];
            $setting->h1_tages = json_encode($data['h1_tages']);
            $setting->h2_tags = json_encode($data['h2_tags']);
            $setting->h3_tages = json_encode($data['h3_tages']);


            //logo
            if ($request->hasFile('site_logo')) {
                $image_tmp = $request->file('site_logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                    $setting->site_logo = $filename;
                }
            }


            //fabicon


            if ($request->hasFile('favicon')) {
                $image_tmp = $request->file('favicon');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/setting/' . $filename;

                    Image::make($image_tmp)->save($large_image_path);
                    $setting->favicon = $filename;
                }
            }
            $setting->save();
            return back()->with('flash_message_success', 'General Setting update successfully');
        }
    }

    public function term_and_condition(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('t_c')) {
            $permissions = Role::findByName($role->name)->permissions;

            if ($request->isMethod('post')) {
                $data = $request->all();
                $setting = GeneralSetting::latest()->first();
                $setting->t_c_information = $data['t_c_information'];
                $setting->t_c_title = $data['t_c_title'];
                $setting->t_c_description = $data['t_c_description'];
                $setting->t_c_keyword = json_encode($data['t_c_keyword']);



                $setting->save();
                return back()->with('flash_message_success', 'General Setting update successfully');
            }
            $gs = GeneralSetting::latest()->first();
            $data['title'] = "Term & Conditions";
            $data['table'] = "Website Setup";
            return view('admin.general.term_condition', $data, compact('gs'));
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function about_us(Request $request)
    {

        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('a_u')) {
            $permissions = Role::findByName($role->name)->permissions;

            if ($request->isMethod('post')) {
                $data = $request->all();
                $setting = GeneralSetting::latest()->first();
                $setting->a_u_information = $data['a_u_information'];
                $setting->a_u_title = $data['a_u_title'];
                $setting->a_u_description = $data['a_u_description'];
                $setting->a_u_keyword = json_encode($data['a_u_keyword']);



                $setting->save();
                return back()->with('flash_message_success', 'General Setting update successfully');
            }
            $gs = GeneralSetting::latest()->first();
            $data['title'] = "About us";
            $data['table'] = "Website Setup";
            return view('admin.general.about_us', $data, compact('gs'));
        } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    public function privacy_policy(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('p_c')) {
            $permissions = Role::findByName($role->name)->permissions;

            if ($request->isMethod('post')) {
                $data = $request->all();
                $setting = GeneralSetting::latest()->first();
                $setting->p_p_information = $data['p_p_information'];
                $setting->p_p_title = $data['p_p_title'];
                $setting->p_p_description = $data['p_p_description'];
                $setting->p_p_keyword = json_encode($data['p_p_keyword']);

                $setting->save();
                return back()->with('flash_message_success', 'General Setting update successfully');
            }
            $gs = GeneralSetting::latest()->first();
            $data['title'] = "Privacy Policy ";
            $data['table'] = "Website Setup";
            return view('admin.general.privacy_policy', $data, compact('gs'));
        } else
        return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function mailSetting()
    {
        $data['title'] = "Email Configuration ";
        $data['table'] = "Website Setup";
        return view('admin.setting.mail_setting', $data);
    }

    public function mailSettingStore(Request $request)
    {


        $data = $request->all();

        //writting mail info in .env file
        $path = base_path('.env');
        // dd($path);
        $searchArray = array('MAIL_HOST="' . env('MAIL_HOST') . '"', 'MAIL_PORT=' . env('MAIL_PORT'), 'MAIL_FROM_ADDRESS="' . env('MAIL_FROM_ADDRESS') . '"', 'MAIL_FROM_NAME="' . env('MAIL_FROM_NAME') . '"' , 'MAIL_FROM_EMAIL="' . env('MAIL_FROM_EMAIL') . '"', 'MAIL_USERNAME="' . env('MAIL_USERNAME') . '"', 'MAIL_PASSWORD="' . env('MAIL_PASSWORD') . '"');
        //    return $searchArray;

        $replaceArray = array('MAIL_HOST="' . $data['mail_host'] . '"', 'MAIL_PORT=' . $data['port'], 'MAIL_FROM_ADDRESS="' . $data['mail_address'] . '"', 'MAIL_FROM_NAME="' . $data['mail_name'] . '"' , 'MAIL_FROM_EMAIL="' . $data['email_name'] . '"', 'MAIL_USERNAME="' . $data['mail_address'] . '"', 'MAIL_PASSWORD="' . $data['password'] . '"');
        // return $replaceArray;
        file_put_contents($path, str_replace($searchArray, $replaceArray, file_get_contents($path)));

        return redirect()->back()->with('message', 'Data updated successfully');
    }

    public function auction_setting(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $setting = AutctionSetting::latest()->first();
            $setting->t_c_information = $data['t_c_information'];
            $setting->t_c_title = $data['t_c_title'];
            $setting->t_c_description = $data['t_c_description'];
            $setting->t_c_keyword = json_encode($data['t_c_keyword']);



            $setting->save();
            return back()->with('flash_message_success', 'General Setting update successfully');
        }
        $row = AutctionSetting::latest()->first();
        $data['title'] = "Auction Setting";
        $data['table'] = "Auction";
        return view('admin.general.auction_setting', $data, compact('row'));
    }


    public function auction_bid(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $setting = new BidSetting();
            $setting->for_price_at_or_above = $data['for_price_at_or_above'];
            $setting->increment = $data['increment'];

            $setting->save();
            return back()->with('flash_message_success', 'General Setting update successfully');
        }
        $data['bid'] = BidSetting::get();
        $data['title'] = "Bidding Setting";
        $data['table'] = "Function";
        return view('admin.general.bid_setting', $data);
    }

    public function updatePriceAbove($id, $priceabove)
    {

        $data = BidSetting::select('id', 'for_price_at_or_above')->find($id);
        $data->for_price_at_or_above = $priceabove;
        if ($data->save()) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function updatePriceincrement($id, $priceincrement)
    {

        $data = BidSetting::select('id', 'increment')->find($id);
        $data->increment = $priceincrement;
        if ($data->save()) {
            echo "1";
        } else {
            echo "0";
        }
    }
    public function bid_delete($id)
    {
        $data = BidSetting::find($id);

        $data->delete();
        return back()->with('flash_message_success', 'Bid has delete successfully');
    }

    public function site_fees(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('p_c')) {
            $permissions = Role::findByName($role->name)->permissions;

            if ($request->isMethod('post')) {
                $data = $request->all();
                $setting = GeneralSetting::latest()->first();
                $setting->site_fees_information = $data['site_fees_information'];
                $setting->site_fees_title = $data['site_fees_title'];
                $setting->site_fees_description = $data['site_fees_description'];
                $setting->site_fees_keyword = json_encode($data['site_fees_keyword']);

                $setting->save();
                return back()->with('flash_message_success', 'General Setting update successfully');
            }
            $gs = GeneralSetting::latest()->first();
            $data['title'] = "Site Fees ";
            $data['table'] = "Website Setup";
            return view('admin.general.site_fees', $data, compact('gs'));
        } else
        return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}
