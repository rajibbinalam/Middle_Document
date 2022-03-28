<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
Use App\Models\Advertising;
use App\Models\City;
use App\Models\AddPage;
use App\Models\Page;
use App\Models\SiteFees;
use App\Models\PageBanner;
use App\Models\WormSlider;
use App\Models\Watch;
use App\Models\GallerySlider;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index($url,Request $request)
    {
       
        if($request->ajax()){
            $data = $request->all();
           echo "<pre>";print_r($data);die;
           $url = $data['url'];
           $categoryCount= SubCategory::where('url',$url)->where('status','1')->count();
            //   echo "<pre>";print_r( $categoryCount);die();
                        if($categoryCount > 0){
                            // echo "category existes"
                            
                            $banner= PageBanner::where('id','5')->where('banner_1_upload' < 'banner_1_expired')->get();
                            dd($banner);
                            $subcategory = SubCategory::where('url',$url)->first();
                            // dd($subcategory);
                            $categoryAddvertisement = Advertising::with('adsid')->where('subcat_id',$subcategory['id']);

                            if(isset($data['sell']) && !empty($data['sell'])){
                                $categoryAddvertisement->whereIn('advertisings.seller_type',$data['sell']);

                            }
                            if (isset($data['sort']) && !empty($data['sort'])) {
                                if ($data['sort']=="latest_listing") {
                                $categoryAddvertisement->orderBy('id','DESC');
                      
                                }else if ($data['sort']=="old_listing") {
                                $categoryAddvertisement->orderBy('id','ASC');
                      
                                }
                                }else{
                      
                                }
                        //    dd($categoryAddvertisement);
                              $categoryAddvertisement = $categoryAddvertisement->paginate(20);
                                            
                        //    
                    
                            return view('front.ajax_category',compact('url','categoryAddvertisement','banner'));
                
                        }else{
                            abort(404);
                
                        }

        }else{
            $categoryCount= SubCategory::where('url',$url)->where('status','1')->count();
            //   echo "<pre>";print_r( $categoryCount);die();
                        if($categoryCount > 0){
                            // echo "category existes"
                            $nowdate = Carbon::now()->toDateString();
                            $banner= PageBanner::where('id','5')->where('banner_1_upload', '=', $nowdate)->latest()->first();
                            // dd($nowdate);
                            $data['banner1']= PageBanner::where('id','5')->where('banner_1_upload', '<=', $nowdate)->first();
                    //   dd($data['banner1']);
                            $data['banner2']= PageBanner::where('id','6')->where('banner_1_upload', '<=', $nowdate)->first();
                            $data['banner3']= PageBanner::where('id','7')->where('banner_1_upload', '<=', $nowdate)->first();
                            $data['banner4']= PageBanner::where('id','8')->where('banner_1_upload', '<=', $nowdate)->first();
                            // dd($banner);
                            $subcategory = SubCategory::where('url',$url)->first();
                            // dd($subcategory);
                            $categoryAddvertisement = Advertising::with('adsid')->where('subcat_id',$subcategory['id']);
                            $productFilters = Advertising::productFilters();
                            $sellerType =$productFilters['sellerType'];
                            $transmission =$productFilters['transmission'];
                            $doors =$productFilters['doors'];
                            $condition =$productFilters['condition'];
                            $aircondition =$productFilters['aircondition'];
                            $registerd =$productFilters['registerd'];
                           
                        //    dd($categoryAddvertisement);
                              $categoryAddvertisement = $categoryAddvertisement->paginate(20);
                                            
                        $pageName = "Category";
                    
                            return view('front.category',$data,compact('pageName','banner','nowdate','url','categoryAddvertisement','sellerType','transmission','doors','condition','aircondition','registerd'));
                
                        }else{
                            abort(404);
                
                        }

        }
           
    
      
    }
    public function watch(Request $request)
    {
        $data = new Watch;
        $data->user_id = Auth::user()->id;
        $data->ads_id = $request->ads_id;
        $data->save();
        return back();
    }
    public function cat_details($id)
    {
         $data['advertising'] = Advertising::with('gallery')->find($id);
        return view('front.cat_details',$data);
    }


public function test($id,Request $request)
{
   
    if($request->ajax()){
        $data = $request->all();
        $categoryCount= Category::where('id',$id)->where('status','1')->count();
        // echo "<pre>";print_r( $categoryCount);die();
        $id = $data['id'];
        if($categoryCount > 0){
            $categories = Category::where('status',1)->get();
            $cities = City::where('status',1)->get();
            $banner= PageBanner::where('page_id','2')->latest()->first();
             $subcategory = Category::catDetails($id);
             $worm= PageBanner::where('page_id','1')->get();
             $gallery= GallerySlider::where('page_id','1')->get()->toArray();
             // dd($gallery);
             $galleryChank = array_chunk($gallery,5);
          //   dd($data['galleryChank']);
          $adds = Advertising::get();
       
            $categoryAddvertisement = Advertising::whereIn('subcat_id',$subcategory['catIds']);
          
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort']=="latest_listing") {
                  $categoryAddvertisement->orderBy('id','DESC');
                 
                }else if ($data['sort']=="old_listing") {
                    $categoryAddvertisement->orderBy('id','ASC');
                  
              }
            }else{
    
              }
              $categoryAddvertisement = $categoryAddvertisement->paginate(10);
          
    
            return view('front.ajax_category',compact('subcategory','id','categoryAddvertisement','categories','cities','banner','adds','galleryChank','worm','gallery'));

        }else{
            abort(404);

        }
        

    }else{
        $categoryCount= Category::where('id',$id)->where('status','1')->count();
        // echo "<pre>";print_r( $categoryCount);die();
        if($categoryCount > 0){
            $categories = Category::where('status',1)->get();
            $cities = City::where('status',1)->get();
            $banner= PageBanner::where('page_id','2')->latest()->first();
             $subcategory = Category::catDetails($id);
             $worm= PageBanner::where('page_id','1')->get();
             $gallery= GallerySlider::where('page_id','1')->get()->toArray();
             // dd($gallery);
             $galleryChank = array_chunk($gallery,5);
          //   dd($data['galleryChank']);
          $adds = Advertising::get();
        //    echo "<pre>";print_r( $subcategory);die();
            $categoryAddvertisement = Advertising::whereIn('subcat_id',$subcategory['catIds']);
    
            echo "<pre>";print_r( $categoryAddvertisement);die();
           
              $categoryAddvertisement = $categoryAddvertisement->paginate(2);
          
            return view('front.category',compact('subcategory','id','categoryAddvertisement','categories','cities','banner','adds','galleryChank','worm','gallery'));

        }else{
            abort(404);

        }

    }

   
   
}


}
