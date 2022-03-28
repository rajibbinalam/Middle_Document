<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPage;
use App\Models\PageBanner;
use App\Models\WormSlider;
use App\Models\GallerySlider;
use Image;

class AdPageController extends Controller
{
    public function index()
    {
        $data['title']="Banner ";
     
        $data['add_title'] = " add Banner";
        $data['table'] = " add Banner";
        $data['page'] = AddPage::get();
       return view('admin.page.index',$data);
    }

    public function gallery_add($id)
    {
        $data['title']="Banner ";
     
        $data['add_title'] = " add Banner";
        $data['table'] = " add Banner";
        $data['gs'] = " add Banner";
        $data['page'] = AddPage::with('banner','slider')->where('id',$id)->first();
       return view('admin.page.gallery',$data);
    }

    public function banner_insert(Request $request,$id)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $banner =new PageBanner();
            $banner->page_id = $data['page_id'];
            $banner->banner_1_link = $data['banner_1_link'];
            $banner->banner_1_upload = $data['banner_1_upload'];
            $banner->banner_1_expired = $data['banner_1_expired'];
            $banner->banner_name = $data['banner_name'];
            $banner->key_words = json_encode($data['key_words']);

            if ($request->hasFile('banner_1_image')) {
                $image_tmp = $request->file('banner_1_image');
                if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename=rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/images/backend_images/banner/'.$filename;
        
                Image::make($image_tmp)->save($large_image_path);
                   $banner->banner_1_image =$filename;
        
                }
                }

            //imagehomepage1
            // $banner->banner_2_link = $data['banner_2_link'];
            // $banner->banner_2_upload = $data['banner_2_upload'];
            // $banner->banner_2_expired = $data['banner_2_expired'];
            // if ($request->hasFile('banner_2_image')) {
            //     $image_tmp = $request->file('banner_2_image');
            //     if ($image_tmp->isValid()) {
            //     $extension = $image_tmp->getClientOriginalExtension();
            //     $filename=rand(111,99999).'.'.$extension;
            //     $large_image_path = 'assets/images/backend_images/banner/'.$filename;
        
            //     Image::make($image_tmp)->save($large_image_path);
            //        $banner->banner_2_image =$filename;
        
            //     }
            //     }

            //imagehomepage2
            // $banner->banner_3_link = $data['banner_3_link'];
            // $banner->banner_3_upload = $data['banner_3_upload'];
            // $banner->banner_3_expired = $data['banner_3_expired'];
            // if ($request->hasFile('banner_3_image')) {
            //     $image_tmp = $request->file('banner_3_image');
            //     if ($image_tmp->isValid()) {
            //     $extension = $image_tmp->getClientOriginalExtension();
            //     $filename=rand(111,99999).'.'.$extension;
            //     $large_image_path = 'assets/images/backend_images/banner/'.$filename;
        
            //     Image::make($image_tmp)->save($large_image_path);
            //        $banner->banner_3_image =$filename;
        
            //     }
            //     }
            //imahehomepage3
            // $banner->banner_4_link = $data['banner_4_link'];
            // $banner->banner_4_upload = $data['banner_4_upload'];
            // $banner->banner_4_expired = $data['banner_4_expired'];
            // if ($request->hasFile('banner_4_image')) {
            //     $image_tmp = $request->file('banner_4_image');
            //     if ($image_tmp->isValid()) {
            //     $extension = $image_tmp->getClientOriginalExtension();
            //     $filename=rand(111,99999).'.'.$extension;
            //     $large_image_path = 'assets/images/backend_images/banner/'.$filename;
        
            //     Image::make($image_tmp)->save($large_image_path);
            //        $banner->banner_4_image =$filename;
        
            //     }
            //     }
            //imageHomepage4

//  dd($banner);
            //imageCategory4
           


            $banner->save();
         return back()->with('flash_message_success','General Setting update successfully');
         

        }
  
    }

    public function banner_update(Request $request,$id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $banner = PageBanner::find($id);
            //imagehomepage1
            $banner->banner_1_link = $data['banner_1_link'];
            $banner->banner_1_upload = $data['banner_1_upload'];
            $banner->banner_1_expired = $data['banner_1_expired'];
            $banner->banner_name = $data['banner_name'];
            $banner->key_words = json_encode($data['key_words']);
    
            if ($request->hasFile('banner_1_image')) {
                $image_tmp = $request->file('banner_1_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/backend_images/banner/' . $filename;
    
                    Image::make($image_tmp)->save($large_image_path);
                    $banner->banner_1_image = $filename;
                }
            }
    
    
    
            $banner->save();
            return back()->with('flash_message_success', 'General Setting update successfully');
        }
    }

    public function worm_insert(Request $request,$id)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $worm = new WormSlider();
            $worm->page_id = $data['page_id'];
           
            $worm->worm_1_upload = $data['worm_1_upload'];
            $worm->worm_1_expired = $data['worm_1_expired'];

            if ($request->hasFile('worm_1_image')) {
                $image_tmp = $request->file('worm_1_image');
                if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename=rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/images/backend_images/worm/'.$filename;
        
                Image::make($image_tmp)->save($large_image_path);
                   $worm->worm_1_image =$filename;
        
                }
                }

         

 
           


            $worm->save();
         return back()->with('flash_message_success','General Setting update successfully');
         

        }
  
    }
    public function slider_update(Request $request,$id)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $worm = WormSlider::find($id);
         
           
            $worm->worm_1_upload = $data['worm_1_upload'];
            $worm->worm_1_expired = $data['worm_1_expired'];
            $worm->banner_name = $data['banner_name'];

            if ($request->hasFile('worm_1_image')) {
                $image_tmp = $request->file('worm_1_image');
                if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename=rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/images/backend_images/worm/'.$filename;
        
                Image::make($image_tmp)->save($large_image_path);
                   $worm->worm_1_image =$filename;
        
                }
                }

         

 
           


            $worm->save();
         return back()->with('flash_message_success','General Setting update successfully');
         

        }
  
    }
    public function delete_slider($id)
    {
        $data = WormSlider::find($id);
   
        $data->delete();
        return back()->with('flash_message_success','WormSlider has delete successfully');
    }

    public function gallery_insert(Request $request,$id)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            $worm = new gallerySlider();
            $worm->page_id = $data['page_id'];
  

            if ($request->hasFile('gallery_slider_image')) {
                $image_tmp = $request->file('gallery_slider_image');
                if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename=rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/images/backend_images/gallery/'.$filename;
        
                Image::make($image_tmp)->save($large_image_path);
                   $worm->gallery_slider_image =$filename;
        
                }
                }

         
           


            $worm->save();
           

         

 
           


           
         return back()->with('flash_message_success','General Setting update successfully');
         

        }
  
    }
}
