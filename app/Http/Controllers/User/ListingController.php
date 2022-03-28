<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\City;
use App\Models\LisitngFees;
use App\Models\Listingorder;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Auth;
use Mail;

class ListingController extends Controller
{
    public function listing()
    {
        $listing = Listing::where('user_id',Auth::user()->id);
      
        if (isset($_GET['sort']) && !empty($_GET['sort'])) {
            if ($_GET['sort']=="latest_listing") {
              $listing->orderBy('id','DESC');
             
            }else if ($_GET['sort']=="old_listing") {
                $listing->orderBy('id','ASC');
              
          }
        }else{

          }
       
        
          $listing = $listing->paginate(6);
    return view('user.listing.view',compact('listing'));
    }



    // listing view
    public function listView($id)
    {
      $data['listing'] = listing::find($id);
      return view('user.listing.listing_view',$data);
    }

    

   public function listAdd()
    {
    	$data['listing'] = listing::get();
      $data['fees'] = LisitngFees::get();
    	$data['city']=City::get();
    	return view('user.listing.listing_ad',$data);
    }



    public function liststore(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();


    if($request->hasFile('logo')){

            //get file name  with the  extension
            $filenameWithExt =$request->file('logo')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            //file name to  store
            $listingImage =$filename.'_'.time().'.'.$extension;
           //dd($travel_departure_cirtificate);
            //upload image
            $path =$request->file('logo')->move(public_path('images/listing'),$listingImage);


        }else{
            $listingImage = 'noimage.jpg';
        }


        // Listing::insert([

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

        $listing = new Listing();
         $listing->business_name = $request->business_name;
          $listing->logo = $listingImage;
          $listing->industry = $request->industry;
          $listing->city_id = $request->city_id;
          $listing->suburbs_id = $request->suburbs_id;

          $listing->mobile = $request->mobile;
          $listing->landline = $request->landline;
          $listing->website = $request->website;
          $listing->description = $request->description;

          $listing->payment_method = $request->payment_method;
          $listing->address = $request->address;
          $listing->tags = $request->tags;
          $listing->total = $request->total;
          $listing->user_id = Auth::user()->id;
     
           $listing->created_at = Carbon::now();
        $listing->save();
        if($listing->save()){
            $listing_id = $listing->id;
            foreach($data['page_id'] as  $key=>$val){
                $listingid = new Listingorder();
                $listingid->listing_id = $listing_id;
                $listingid->page_id = $data['page_id'][$key];
                $listingid->user_id = Auth::user()->id;
                $listingid->save();

            }
        }
        }

   
        $email =Auth::user()->email;
        $messageData = [
            'email'=>Auth::user()->email
         ];
       Mail::send('user.email.listing',$messageData,function($message) use($email){
         $message->to($email)->subject('Lisitng Added with efox');
         });
         return redirect('/create-transaction')->with('success', 'inserted successfully'); 


    }


  

    // active listing function

    public function activeListing()
    {
    
        
    
return view('user.listing.active_listing');
    }

    function expiredListing()
    {
      
      $listing =Listing::with('listingid')->where('user_id',Auth::user()->id);
      if (isset($_GET['sort']) && !empty($_GET['sort'])) {
        if ($_GET['sort']=="latest_listing") {
        $listing->orderBy('id','DESC');


        }else if ($_GET['sort']=="old_listing") {
        $listing->orderBy('id','asc');


        }
        }else{

        }
        $listing = $listing->paginate(10);
        return view('user.listing.expired_listing',compact('listing'));
    }

    public function edit($id)
    {
        $data['listing'] = Listing::find($id);
        $data['fees'] = LisitngFees::get();
    	  $data['city']=City::get();
        return view('user.listing.edit_listing',$data);
    }
    public function update(Request $request,$id){
        if ($request->isMethod('post')) {
            $data = $request->all();


    if($request->hasFile('logo')){

            //get file name  with the  extension
            $filenameWithExt =$request->file('logo')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            //file name to  store
            $listingImage =$filename.'_'.time().'.'.$extension;
           //dd($travel_departure_cirtificate);
            //upload image
            $path =$request->file('logo')->move(public_path('images/listing'),$listingImage);


        }else{
            $listingImage = 'noimage.jpg';
        }


        // Listing::insert([

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

        $listing =  Listing::find($id);
         $listing->business_name = $request->business_name;
          $listing->logo = $listingImage;
          $listing->industry = $request->industry;
          $listing->city_id = $request->city_id;
          $listing->suburbs_id = $request->suburbs_id;

          $listing->mobile = $request->mobile;
          $listing->landline = $request->landline;
          $listing->website = $request->website;
          $listing->description = $request->description;

          $listing->payment_method = $request->payment_method;
          $listing->address = $request->address;
          $listing->tags = $request->tags;
          $listing->total = $request->total;
          $listing->user_id = Auth::user()->id;
     
         
        $listing->save();
      
        }

        $email =Auth::user()->email;
        $messageData = [
            'email'=>Auth::user()->email
         ];
       Mail::send('user.email.listing_update',$messageData,function($message) use($email){
         $message->to($email)->subject('Lisitng update with efox');
         });

         return redirect('/user/lisitng')->with('flash_message_success', 'update successfully'); 


    }
public function delete($id)
{
  $data= Listing::find($id);
  $data->delete();
  return back()->with('flash_message_success','Listing Delete successfully');

}
}
