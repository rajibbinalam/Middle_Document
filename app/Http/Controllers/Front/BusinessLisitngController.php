<?php

namespace App\Http\Controllers\Front;

use App\Models\City;
use App\Models\Order;
use App\Models\AddPage;
use App\Models\Listing;
Use App\Models\Advertising;
use App\Models\Category;
use App\Models\PageBanner;
use App\Models\WormSlider;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\GallerySlider;
use App\Models\BusinessPageBanner;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class BusinessLisitngController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where('status',1)->get();
       
        $data['cities'] = City::where('status',1)->get();
        $data['page']=AddPage::first();
        $data['banner']= PageBanner::where('page_id','3')->latest()->first();
        $data['worm']= PageBanner::where('page_id','1')->get();
        $gallery= GallerySlider::where('page_id','1')->get()->toArray();
        // dd($gallery);
        $data['galleryChank'] = array_chunk($gallery,5);
     //   dd($data['galleryChank']);
     $data['listing'] = Listing::get();
      $data['banner1'] = BusinessPageBanner::where('id',1)->select('banner_1_image')->first();
      $data['banner2'] = BusinessPageBanner::where('id',2)->select('banner_1_image')->first();
      $data['banner3'] = BusinessPageBanner::where('id',3)->select('banner_1_image')->first();
      $data['banner4'] = BusinessPageBanner::where('id',4)->select('banner_1_image')->first();
      $data['banner5'] = BusinessPageBanner::where('id',5)->select('banner_1_image')->first();
      $data['banner6'] = BusinessPageBanner::where('id',6)->select('banner_1_image')->first();
    //   dd($this->data['banner1']);
        return view('front.business_listing',$data);
    }


    public function listing_details($id)
    {
        $data['categories'] = Category::where('status',1)->get();
       
        $data['cities'] = City::where('status',1)->get();
        $data['page']=AddPage::first();
        $data['banner']= PageBanner::where('page_id','1')->latest()->first();
     
        $gallery= GallerySlider::where('page_id','1')->get()->toArray();
        // dd($gallery);
        $data['galleryChank'] = array_chunk($gallery,5);
     //   dd($data['galleryChank']);
     $data['listing'] = Listing::where('id',$id)->first();
        return view('front.lisitng_details',$data);
    }



    // Add To Card Section

    public function addToCart(Request $request){
        $id = $request->get('id');
        $business_name = $request->get('business_name');
        $logo = $request->get('logo');
        $industry = $request->get('industry');
        $city_id = $request->get('city_id');
        $suburbs_id = $request->get('suburbs_id');
        $mobile = $request->get('mobile');
        $landline = $request->get('landline');
        $website = $request->get('website');
        $description = $request->get('description');
        $payment_method = $request->get('payment_method');
        $address = $request->get('address');
        $totalPrice = $request->get('total');
        $quantity = 1;

        $cart = Cart::content()->where('id',$id)->first();

            if(isset($cart)&& $cart != null){
                $quantity = ((int)$quantity + (int)$cart->qty);
                $total = ((int)$quantity * (int)$totalPrice);
                Cart::update($cart->rowId,['qty'=>$quantity , 'options'=>['logo'=>$logo , 'total'=>$total]]);
            }else{
                $total = ((int)$quantity * (int)$totalPrice);
                Cart::add($id,$business_name,$quantity,$totalPrice,['logo'=>$logo , 'total'=>$total]);
            }
            
            return back()->with('flash_message_success','Product Added To Cart');
    }

    public function checkOut(){
        
        return view('user.checkout');
    }
    public function OrderDelete($id){
        $delete = Order::find($id)->delete();
        return back();
    }



    public function Order(){
        foreach(Cart::content() as $cart){
            $order = new Order();
            $order->order_number = 'Efox-'.time();
            $order->product_id = $cart->id;
            $order->user_id = Auth::user()->id;
            $order->total_cost = $cart->price;
            $order->quantity = $cart->qty;
            $order->save();
        }
        Cart::destroy();
        return back()->with('success','Order Confirmed');
    }


    // public function UpdateCart(Request $request){


    //     $cart = Cart::content()->where('id',$id)->first();
    //     $Totalquantity = Product::find($id)->quantity;
    //     if($quantity > $Totalquantity){
    //         return back()->with('error','You Must select Less Then '.$Totalquantity);
    //     }else{
    //         if(isset($cart)&& $cart != null){
    //             // $quantity = ((int)$quantity + (int)$cart->qty);
    //             $total = ((int)$quantity * (int)$price);
    //             Cart::update($cart->rowId,['qty'=>$quantity , 'options'=>['size'=>$size ,'colors'=>$colors , 'image'=>$image , 'total'=>$total]]);
    //         }else{
    //             $total = ((int)$quantity * (int)$price);
    //             Cart::add($id,$name,$quantity,$price,['size'=>$size ,'colors'=>$colors , 'image'=>$image , 'total'=>$total]);
    //         }
            
    //         return back()->with('success','Product Added To Cart');
    //     }
    // }


    public function removeItem($rowId){
        Cart::remove($rowId);
        return back()->with('flash_message_success','Item Remove from Cart');
    }

}
