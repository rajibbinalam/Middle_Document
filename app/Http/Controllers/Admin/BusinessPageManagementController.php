<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessPageBanner;
use App\Models\LisitngFees;
use Image;

class BusinessPageManagementController extends Controller
{
    public function index()
    {
        $data['title'] = "Business Directory";
        $data['table'] = "Filter Payments By";
        $data['add_title'] = "Add Business Directory Banner";
        $data['add'] = "Add Business Directory Banner";
        $data['banner'] = BusinessPageBanner::get();
        $data['fees'] = LisitngFees::get();
        return view('admin.business_management.index', $data);
    }


    public function updatePrice($id, $price)
    {

        $data = LisitngFees::select('id', 'price')->find($id);
        $data->price = $price;
        if ($data->save()) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function banner_insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $banner = new BusinessPageBanner();
            //imagehomepage1
            $banner->banner_1_link = $data['banner_1_link'];
            $banner->banner_1_upload = $data['banner_1_upload'];
            $banner->banner_1_expired = $data['banner_1_expired'];

            if ($request->hasFile('banner_1_image')) {
                $image_tmp = $request->file('banner_1_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

                    Image::make($image_tmp)->save($large_image_path);
                    $banner->banner_1_image = $filename;
                }
            }

            //imagehomepage2
            // $banner->banner_2_link = $data['banner_2_link'];
            // $banner->banner_2_upload = $data['banner_2_upload'];
            // $banner->banner_2_expired = $data['banner_2_expired'];
            // if ($request->hasFile('banner_2_image')) {
            //     $image_tmp = $request->file('banner_2_image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = rand(111, 99999) . '.' . $extension;
            //         $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

            //         Image::make($image_tmp)->save($large_image_path);
            //         $banner->banner_2_image = $filename;
            //     }
            // }

            //imagehomepage3
            // $banner->banner_3_link = $data['banner_3_link'];
            // $banner->banner_3_upload = $data['banner_3_upload'];
            // $banner->banner_3_expired = $data['banner_3_expired'];
            // if ($request->hasFile('banner_3_image')) {
            //     $image_tmp = $request->file('banner_3_image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = rand(111, 99999) . '.' . $extension;
            //         $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

            //         Image::make($image_tmp)->save($large_image_path);
            //         $banner->banner_3_image = $filename;
            //     }
            // }
            //imahehomepage4
            // $banner->banner_4_link = $data['banner_4_link'];
            // $banner->banner_4_upload = $data['banner_4_upload'];
            // $banner->banner_4_expired = $data['banner_4_expired'];
            // if ($request->hasFile('banner_4_image')) {
            //     $image_tmp = $request->file('banner_4_image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = rand(111, 99999) . '.' . $extension;
            //         $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

            //         Image::make($image_tmp)->save($large_image_path);
            //         $banner->banner_4_image = $filename;
            //     }
            // }

            //imahehomepage5
            // $banner->banner_5_link = $data['banner_5_link'];
            // $banner->banner_5_upload = $data['banner_5_upload'];
            // $banner->banner_5_expired = $data['banner_5_expired'];
            // if ($request->hasFile('banner_5_image')) {
            //     $image_tmp = $request->file('banner_5_image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = rand(111, 99999) . '.' . $extension;
            //         $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

            //         Image::make($image_tmp)->save($large_image_path);
            //         $banner->banner_5_image = $filename;
            //     }
            // }

            //imahehomepage6
            // $banner->banner_6_link = $data['banner_6_link'];
            // $banner->banner_6_upload = $data['banner_6_upload'];
            // $banner->banner_6_expired = $data['banner_6_expired'];
            // if ($request->hasFile('banner_6_image')) {
            //     $image_tmp = $request->file('banner_6_image');
            //     if ($image_tmp->isValid()) {
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename = rand(111, 99999) . '.' . $extension;
            //         $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

            //         Image::make($image_tmp)->save($large_image_path);
            //         $banner->banner_6_image = $filename;
            //     }
            // }






            $banner->save();
            return back()->with('flash_message_success', 'General Setting update successfully');
        }
    }

public function banner_update(Request $request,$id)
{
    if ($request->isMethod('post')) {
        $data = $request->all();
        $banner = BusinessPageBanner::find($id);
        //imagehomepage1
        $banner->banner_1_link = $data['banner_1_link'];
        $banner->banner_1_upload = $data['banner_1_upload'];
        $banner->banner_1_expired = $data['banner_1_expired'];
        $banner->name = $data['name'];
        $banner->key_words = json_encode($data['key_words']);

        if ($request->hasFile('banner_1_image')) {
            $image_tmp = $request->file('banner_1_image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'assets/images/backend_images/banner/listing/' . $filename;

                Image::make($image_tmp)->save($large_image_path);
                $banner->banner_1_image = $filename;
            }
        }



        $banner->save();
        return back()->with('flash_message_success', 'General Setting update successfully');
    }
}

    public function payment_for_business()
    {
        $data['title'] = "Payment Methods For Business";
        $data['table'] = "Filter Payments By";
        return view('admin.business_management.payment_for_business', $data);
    }
}
