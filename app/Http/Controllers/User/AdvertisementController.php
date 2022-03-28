<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Page;
Use App\Models\SiteFees;
Use App\Models\Category;
Use App\Models\SubCategory;
use App\Models\City;
use App\Models\Suburbs;
Use App\Models\Advertising;
Use App\Models\Addfees;
use Carbon\Carbon;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdvertisementController extends Controller
{

    // active advertising view
    public function ActiveAdsView($id)
    {   

         $data['advertising'] = Advertising::find($id);
         return view('user.advertising.advertising_view',$data);
    }


    // expried advertising view
    public function ExpiredAdsView($id){
         $data['advertising'] = Advertising::find($id);
        return view('user.advertising.expired_ads_view',$data);
    }

    // user advertising view
    public function UserAdsView($id)
    {
         $data['advertising'] = Advertising::find($id);
        return view('user.advertising.user_ads_view',$data);
    }


    public function Advertising(){

        $advertising = Advertising::where('user_id',Auth::user()->id);
// dd($advertising);

        if (isset($_GET['sort']) && !empty($_GET['sort'])) {
            if ($_GET['sort']=="latest_listing") {
              $advertising->orderBy('id','DESC');
             
            }else if ($_GET['sort']=="old_listing") {
                $advertising->orderBy('id','ASC');
              
          }
        }else{

          }
       
        
          $advertising = $advertising->paginate(6);
        $data['category']=Category::get();
        $data['city']=City::get();
        $data['title']="View All Advertising";
        return view('user.advertising.view',$data,compact('advertising'));
    }


    public function index()
    {
        $data['page']=Page::get();
        $data['price']=SiteFees::get();
        $data['category']=Category::get();
        $data['city']=City::get();
        $data['suburbs']=Suburbs::get();
        $productFilters = Advertising::productFilters();
        $sellerType =$productFilters['sellerType'];
        $transmission =$productFilters['transmission'];
        $doors =$productFilters['doors'];
        $condition =$productFilters['condition'];
        $aircondition =$productFilters['aircondition'];
        $registerd =$productFilters['registerd'];
        $listing_duration =array('7','14','21','30');
       return view('user.advertising.post_ad',$data,compact('sellerType','listing_duration','transmission','doors','condition','aircondition','registerd'));
    }

    public function get_subcategory(Request $request)
    {
        $cat_id = $request->cat_id;
        $all_sucategory = SubCategory::where('cat_id',$cat_id)->get();
        return response()->json($all_sucategory);
    }

    public function get_suburbs(Request $request)
    {
        $city_id = $request->city_id;
        $all_subrubs = Suburbs::where('city_id',$city_id)->get();
        // dd( $all_subrubs);
        return response()->json($all_subrubs);
    }

     //store

    public function store(Request $request){

        // $image = $request->file('main_image');
        //     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        //     Image::make($image)->resize(300,300)->save('upload/products/'.$name_gen);
        //     $save_url = 'upload/products/'.$name_gen;

//   dd($request);



$this->validate($request,[
    'main_image' =>'image|nullable',
]);
if ($request->isMethod('post')) {
    $data = $request->all();


        if($request->hasFile('main_image')){

            //get file name  with the  extension
            $filenameWithExt =
$request->file('main_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('main_image')->getClientOriginalExtension();
            //file name to  store
            $adverImage =
$filename.'_'.time().'.'.$extension;
           
            //upload image
            $path =
$request->file('main_image')->move(public_path('images'),$adverImage);
// dd( $path);

        }else{
            $adverImage = 'noimage.jpg';
        }

        

    //    $data =  Advertising::insert([
        
    //         'cat_id' => $request->cat_id,
    //         'page_id' => json_encode($request->page_id),
    //         'subcat_id' => $request->subcat_id,
    //         'title' => $request->title,
    //         'door' => $request->door,
    //         'mileage' => $request->mileage,
    //         'year' => $request->year,
    //         'transmissions' => $request->transmissions,
    //         'airconditioning' => $request->airconditioning,
    //         'description' => $request->description,
    //         'main_image' => $adverImage,
    //         'city_id' => $request->city_id,
    //         'name' => $request->name,
    //         'color' => $request->color,
    //         'body' => $request->body,
    //         'price' => $request->price,
    //         'condition' => $request->condition,
    //         'seller_type' => $request->seller_type,
    //         'registered' => $request->registered,
    //         'registered_experiy' => $request->registered_experiy,
    //         'suburbs_id' => $request->suburbs_id,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'total'=> $request->total,
    //         'created_at' => Carbon::now(),

    //     ]);

    $adds = new Advertising();
    $adds->cat_id =$request->cat_id;
    $adds->post_id =random_int(100000, 999999);
    $adds->page_id =json_encode($request->page_id);
    $adds->subcat_id =$request->subcat_id;
    $adds-> title =$request->title;
    $adds-> door =$request->door;
    $adds-> mileage =$request->mileage;
    $adds->year =$request->year;
    $adds-> transmissions =$request->transmissions;
    $adds-> airconditioning =$request->airconditioning;
    $adds->description =$request->description;
    $adds-> main_image =$adverImage;
    $adds-> city_id =$request->city_id;
    $adds-> name =$request->name;
    $adds-> color =$request->color;
    $adds-> body =$request->body;
    $adds-> price =$request->price;
    $adds->condition =$request->condition;
    $adds->sell =$request->sell;
    $adds->registered =$request->registered;
    $adds->registered_experiy =$request->registered_experiy;
    $adds->suburbs_id =$request->suburbs_id;
    $adds-> email =$request->email;
    $adds->phone =$request->phone;
    $adds->total=$request->total;


    $adds->listing_type =$request->listing_type;
    $adds->listing_duration =$request->listing_duration;
    $adds->quantity =$request->quantity;
    $adds-> start_date =$request->start_date;
    $adds->start_time =$request->start_time;
    $adds->starting_bid=$request->starting_bid;
    $adds->reserved_price=$request->reserved_price;
    $adds->user_id = Auth::user()->id;
    $adds-> created_at =Carbon::now();
    $adds->save();
    if($adds->save()){
        $data_id = $adds->id;
        // dd($data_id);
        foreach($data['page_id'] as $key => $val){

            $addsid = new Addfees;
         
            $addsid->ads_id  = $data_id;
         
            $addsid->page_id = $data['page_id'][$key];
           
       
            $addsid->user_id = Auth::user()->id;
            $addsid->save();

        }
    }

    if($adds->save()){
        $ads_id = $adds->id;
        if ($request->hasFile('galleryImage')) {
          $galleryimages = $request->file('galleryImage');
          foreach ($galleryimages as $key => $image) {
           $productimage = new GalleryImage;
           
           // echo "<pre>";print_r(( $productimage));die();
           $image_tmp = Image::make($image);
       
           // echo $orginalName = $image->getClientOriginalName();die();
           $extension = $image->getClientOriginalExtension();
           $imageName =  rand(111,99999).time().".".$extension;
           
               $medium_image_path = 'images/gallery/'.$imageName;
     
              
               Image::make($image_tmp)->save($medium_image_path);
                $productimage->galleryImage =$imageName;
                $productimage->ad_id = $ads_id;
                $productimage->save();
               }
              
         }
      }
     
}
 return redirect('/create-transaction')->with('success', 'inserted successfully');  

    }


    public function activeAdvertising()
    {
        $user_id=Auth::user()->id;
        $data['title']="View Active Advertising";
        $data['advertising'] = Advertising::with('adsid')->where('user_id',$user_id)->get();
        $sellerType =array('Owner','Dealer','Agency');
        $transmission =array('Manual','Automatic','Semi-Automatic');
        $doors =array('2','3','4','5');
        $condition =array('New','Used','Certified Pre-Owned');
        $aircondition =array('Yes','No');
        $registerd =array('Yes','No');
      
        return view('user.advertising.active_advertising',$data,compact('sellerType','transmission','doors','condition','aircondition','registerd'));
    }



    function expiredAdvertising()
    {
        $data['advertising'] = Advertising::where('user_id',Auth::user()->id)->get();
        $data['category']=Category::get();
        $data['city']=City::get();
        $data['title']="View Expired Advertising";
        $sellerType =array('Owner','Dealer','Agency');
        $transmission =array('Manual','Automatic','Semi-Automatic');
        $doors =array('2','3','4','5');
        $condition =array('New','Used','Certified Pre-Owned');
        $aircondition =array('Yes','No');
        $registerd =array('Yes','No');
        return view('user.advertising.expired_advertising',$data,compact('sellerType','transmission','doors','condition','aircondition','registerd'));
    }


    public function edit($id)
    {
        $data['advertising'] = Advertising::find($id);
        $data['category']=Category::get();
        $data['subcategory']=SubCategory::get();
        $data['city']=City::get();
        $data['suburbs']=Suburbs::get();
        $data['title']="View Active Advertising";
        $sellerType =array('Owner','Dealer','Agency');
        $transmission =array('Manual','Automatic','Semi-Automatic');
        $doors =array('2','3','4','5');
        $condition =array('New','Used','Certified Pre-Owned');
        $aircondition =array('Yes','No');
        $registerd =array('Yes','No');
        return view('user.advertising.edit_advertising',$data,compact('sellerType','transmission','doors','condition','aircondition','registerd'));
    }
    public function update(Request $request,$id){
      


            if ($request->isMethod('post')) {
                $data = $request->all();
            
            
                    if($request->hasFile('main_image')){
            
                        //get file name  with the  extension
                        $filenameWithExt =
            $request->file('main_image')->getClientOriginalName();
                        //get just file name
                        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                        //get just ext
                        $extension = $request->file('main_image')->getClientOriginalExtension();
                        //file name to  store
                        $adverImage =
            $filename.'_'.time().'.'.$extension;
                       
                        //upload image
                        $path =
            $request->file('main_image')->move(public_path('images'),$adverImage);
            // dd( $path);
            
                    }else{
                        $adverImage = 'noimage.jpg';
                    }


        // advertising::insert([

        //     'business_name' => $request->business_name,
        //     'logo' => $listingImage,
        //     'industry' => $request->industry,
        //     'city_id' => $request->city_id,
        //     'suburbs_id' => $request->suburbs_id,

        //     'mobile' => $request->mobile,
        //     'landline' => $request->landline,
        //     'website' => $request->website,
        //     'description' => $request->description,

        //     'payment_method' => $request->payment_method,
        //     'address' => $request->address,
        //     'tags' => $request->tags,
     
        //     'created_at' => Carbon::now(),

        // ]);

        $adds =  Advertising::find($id);
        $adds->cat_id =$request->cat_id;
        $adds->page_id =json_encode($request->page_id);
        $adds->subcat_id =$request->subcat_id;
        $adds-> title =$request->title;
        $adds-> door =$request->door;
        $adds-> mileage =$request->mileage;
        $adds->year =$request->year;
        $adds-> transmissions =$request->transmissions;
        $adds-> airconditioning =$request->airconditioning;
        $adds->description =$request->description;
        $adds-> main_image =$adverImage;
        $adds-> city_id =$request->city_id;
        $adds-> name =$request->name;
        $adds-> color =$request->color;
        $adds-> body =$request->body;
        $adds-> price =$request->price;
        $adds->condition =$request->condition;
        $adds->sell =$request->sell;
        $adds->registered =$request->registered;
        $adds->registered_experiy =$request->registered_experiy;
        $adds->suburbs_id =$request->suburbs_id;
        $adds-> email =$request->email;
        $adds->phone =$request->phone;
        $adds->total=$request->total;
        $adds->user_id = Auth::user()->id;
        $adds-> created_at =Carbon::now();
        $adds->save();
      
        }
   

         return redirect('/create-transaction')->with('flash_message_success', 'update successfully'); 


    }
public function delete($id)
{
  $data= Advertising::find($id);
  $data->delete();
  return back()->with('flash_message_success','Listing Delete successfully');

}

}
