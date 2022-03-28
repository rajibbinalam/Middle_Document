<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\AddPage;
use App\Models\PageBanner;
use App\Models\WormSlider;
use App\Models\GallerySlider;
Use App\Models\Advertising;
Use App\Models\Addfees;

class FrontController extends Controller
{
   public function index()
   {
      $data['categories'] = Category::where('status',1)->get();
      $data['cities'] = City::where('status',1)->get();
      $data['page']=AddPage::first();
      $data['banner']= PageBanner::where('page_id','1')->latest()->first();
      $data['worm']= PageBanner::where('page_id','1')->get();
      $gallery= GallerySlider::where('page_id','1')->get()->toArray();
      // dd($gallery);
      $data['galleryChank'] = array_chunk($gallery,5);
   //   dd($data['galleryChank']);
   $data['adds'] = Advertising::with('adsid')->get();
//  dd($data['adds']);
 
      return view('front.index',$data);
   }


   public function search(Request $request)
   {
      $category = $request->category;
      $city = $request->city;
      
      $categories = Category::where('status', 1)->get();
      $cities = City::where('status', 1)->get();
      $page= AddPage::first();
      $banner = PageBanner::where('page_id', '1')->latest()->first();
      $worm = PageBanner::where('page_id', '1')->get();
      $gallery = GallerySlider::where('page_id', '1')->get()->toArray();
      $galleryChank = array_chunk($gallery, 5);
      $adds = Advertising::where([['cat_id', '=', $category],['city_id', '=', $city]])->get();

      
      return view('front.SearchProducts', compact('adds', 'categories', 'cities', 'page', 'banner', 'worm', 'gallery', 'galleryChank'));
   }

   public function navSearch(Request $request)
   {
      $searchWord = $request->navSearch;
      
      $categories = Category::where('status', 1)->get();
      $cities = City::where('status', 1)->get();
      $page= AddPage::first();
      $banner = PageBanner::where('page_id', '1')->latest()->first();
      $worm = PageBanner::where('page_id', '1')->get();
      $gallery = GallerySlider::where('page_id', '1')->get()->toArray();
      $galleryChank = array_chunk($gallery, 5);

      $cat_id = Category::where('cat_name', $searchWord)->get();
      $adds = Advertising::where('title','LIKE', "%{$searchWord}%")
                           ->orWhere('cat_id', 'LIKE', "{$cat_id}" )
                           ->orWhere('year', 'LIKE', "%{$searchWord}%")
                           ->orWhere('description','LIKE', "%{$searchWord}%")
                           ->orWhere('color','LIKE', "%{$searchWord}%")
                           ->get();

      return view('front.SearchProducts', compact('adds', 'categories', 'cities', 'page', 'banner', 'worm', 'gallery', 'galleryChank'));
   }
}
