<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function banner(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $banner = new Banner();
            $banner->home_page_banner_1_link = $data['home_page_banner_1_link'];
            $banner->home_page_banner_1_upload = $data['home_page_banner_1_upload'];
            $banner->home_page_banner_1_expired = $data['home_page_banner_1_expired'];

            //imagehomepage1
            $banner->home_page_banner_2_link = $data['home_page_banner_2_link'];
            $banner->home_page_banner_2_upload = $data['home_page_banner_2_upload'];
            $banner->home_page_banner_2_expired = $data['home_page_banner_2_expired'];

            //imagehomepage2
            $banner->home_page_banner_3_link = $data['home_page_banner_3_link'];
            $banner->home_page_banner_3_upload = $data['home_page_banner_3_upload'];
            $banner->home_page_banner_3_expired = $data['home_page_banner_3_expired'];
            //imahehomepage3
            $banner->home_page_banner_4_link = $data['home_page_banner_4_link'];
            $banner->home_page_banner_4_upload = $data['home_page_banner_4_upload'];
            $banner->home_page_banner_4_expired = $data['home_page_banner_4_expired'];
            //imageHomepage4

            $banner->cateory_banner_1_link = $data['cateory_banner_1_link'];
            $banner->cateory_banner_1_upload = $data['cateory_banner_1_upload'];
            $banner->cateory_banner_1_expired = $data['cateory_banner_1_expired'];
            //imahecategory1
            $banner->cateory_banner_2_link = $data['cateory_banner_2_link'];
            $banner->cateory_banner_2_upload = $data['cateory_banner_2_upload'];
            $banner->cateory_banner_2_expired = $data['cateory_banner_2_expired'];
            //imageCategory2
            $banner->cateory_banner_3_link = $data['cateory_banner_3_link'];
            $banner->cateory_banner_3_upload = $data['cateory_banner_3_upload'];
            $banner->cateory_banner_3_expired = $data['cateory_banner_3_expired'];
            //imageCategory3

            $banner->cateory_banner_4_link = $data['cateory_banner_4_link'];
            $banner->cateory_banner_4_upload = $data['cateory_banner_4_upload'];
            $banner->cateory_banner_4_expired = $data['cateory_banner_4_expired'];
            //imageCategory4
           


            $banner->save();
         return back()->with('flash_message_success','General Setting update successfully');
         

        }
        $data['title']="Banner ";
     
        $data['add_title'] = " add Banner";
        $gs = Banner::latest()->first();
        return view('admin.banner',$data,compact('gs'));
    }
}
