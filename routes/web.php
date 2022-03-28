<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\GeneralSettingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/abcd', function () {
//     return view('front.cat_details');
// });
Route::get('/search', function () {
    return view('front.searchByAllSystem');
});
// Add To Card 
Route::post('user/add-to-cart',[App\Http\Controllers\Front\BusinessLisitngController::class,'addToCart'])->name('addToCart');
// Route::post('user/update-cart','BusinessLisitngController@UpdateCart')->name('UpdateCart');
Route::get('user/cart-remove/{rowId}',[App\Http\Controllers\Front\BusinessLisitngController::class,'removeItem'])->name('removeItem');
Route::get('user/checkout',[App\Http\Controllers\Front\BusinessLisitngController::class,'checkOut'])->name('checkout');    // View Cart

Route::get('user/order',[App\Http\Controllers\Front\BusinessLisitngController::class,'Order'])->name('Order');    // Order
Route::get('/user/order-delete/{id}',[App\Http\Controllers\Front\BusinessLisitngController::class,'OrderDelete'])->name('OrderDelete');    // Order

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/',[App\Http\Controllers\Front\FrontController::class,'index'])->name('front.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('layout.admin.master');
})->name('dashboard');

//admin Panel strat
Route::get('admin',[AdminController::class,'login']);

Route::post('admin/login',[AdminController::class,'adminLogin'])->name('admin.login');
Route::match(['get','post'],'/admin/forgot-password',  [AdminController::class,'forgotPassword'])->name('admin.forgot-password');
Route::group(['middleware'=>['admin']],function(){






Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');

    Route::get('/cache/clear', function() {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return redirect()->route('admin.general.setting')->with('flash_message_success','System Cache Has Been Removed.');
      })->name('admin-cache-clear');
    

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/account',[AdminController::class,'account'])->name('account');
    Route::post('/account/update',[AdminController::class,'account_update'])->name('account.update');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    //summary 
    Route::get('/summary',[AdminController::class,'summary'])->name('summary');

    Route::get('admin/setting',[AdminController::class,'setting'] )->name('admin.setting');
   Route::get('/check-pwd', [AdminController::class,'checkPass'])->name('admin.checkPass');
   Route::post('/admin/update-pwd',[AdminController::class,'updatePassword'])->name('admin.updatePassword');

    //sales TranscationController start 
    Route::get('/sales_transcation',[App\Http\Controllers\Admin\SalesTranscationController::class,'index'])->name('sales_transcation.index');
    Route::get('/sales_transcation/view_payment/{id}',[App\Http\Controllers\Admin\SalesTranscationController::class,'view_payment'])->name('sales_transcation.view_payment');
    //salesTranscationController End
    Route::get('/sale_transcation',[AdminController::class,'sale_transcation'])->name('sale_transcation');
    Route::get('/lisitng_fees_revenue',[AdminController::class,'lisitng_fees_revenue'])->name('lisitng_fees_revenue');
    Route::get('/lisitng_fees_revenue_details/{id}',[AdminController::class,'lisitng_fees_revenue_details'])->name('lisitng_fees_revenue_details');
    Route::get('/general_setting',[GeneralSettingController::class,'generalSetting'])->name('general.setting');
    Route::post('/update',[GeneralSettingController::class,'update'])->name('general.update');
    Route::match(['get','post'], '/term_and_condition',[GeneralSettingController::class,'term_and_condition'])->name('general.term_and_condition');
    Route::match(['get','post'], '/aboutUs',[GeneralSettingController::class,'about_us'])->name('general.about_us');
    Route::match(['get','post'], '/privacyPolicy',[GeneralSettingController::class,'privacy_policy'])->name('general.privacy_policy');
    Route::get('setting/mail_setting', [GeneralSettingController::class,'mailSetting'])->name('setting.mail');
    Route::post('setting/mail_setting_store',[GeneralSettingController::class,'mailSettingStore'])->name('setting.mailStore');
    Route::match(['get','post'], '/banner',[App\Http\Controllers\Admin\BannerController::class,'banner'])->name('banner.insert');
    Route::match(['get','post'], '/site_fees',[GeneralSettingController::class,'site_fees'])->name('general.site_fees');

    //Auction Setting
    Route::match(['get','post'], '/auction/setting',[GeneralSettingController::class,'auction_setting'])->name('general.auction_setting');
    //Auction Bid
    Route::match(['get','post'], '/auction/bid',[GeneralSettingController::class,'auction_bid'])->name('general.auction_bid');
    Route::get('/auction/update-above/{id}/{priceabove}',[GeneralSettingController::class,'updatePriceAbove']);
    Route::get('/auction/update-increment/{id}/{priceincrement}',[GeneralSettingController::class,'updatePriceincrement']);
    Route::get('/delete-bid/{id}',[GeneralSettingController::class,'bid_delete'])->name('bid.delete');


    //pageCOntroller 

    Route::get('/page',[App\Http\Controllers\Admin\PageController::class,'index'])->name('page.index');
    Route::post('/page/insert',[App\Http\Controllers\Admin\PageController::class,'insert'])->name('page.insert');


    //FeesController
    Route::get('/fees/show',[App\Http\Controllers\Admin\SiteFeesController::class,'show_site_fees'])->name('site.fees.show');
    Route::get('/fees/add/{id}',[App\Http\Controllers\Admin\SiteFeesController::class,'add_site_fees'])->name('site.fees.add');
    Route::get('/fees',[App\Http\Controllers\Admin\SiteFeesController::class,'index'])->name('site.fees');
    Route::post('/fees/insert',[App\Http\Controllers\Admin\SiteFeesController::class,'insert'])->name('site.fees.insert');
    Route::get('/fees/update-status/{id}/{status}',[App\Http\Controllers\Admin\SiteFeesController::class,'update_status']);
    Route::get('/pay/update-status/{id}/{status}',[App\Http\Controllers\Admin\SiteFeesController::class,'pay_status']);
    Route::get('/pay/update-fees/{id}/{price}',[App\Http\Controllers\Admin\SiteFeesController::class,'updatePrice']);

    
    //FeesController
    Route::get('/edit-payment-gateway',[App\Http\Controllers\Admin\SiteFeesController::class,'edit_payment_gateway'])->name('edit_payment_gateway');



//categoryController

Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('category.index');
Route::get('/category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('category.edit');
Route::get('/category/sub_category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'sub_category'])->name('category.subcategory.view');
Route::post('/category/insert',[App\Http\Controllers\Admin\CategoryController::class,'insert'])->name('category.insert');
Route::post('/category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('category.update');
Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('category.delete');

Route::get('/category/update-status/{id}/{status}',[App\Http\Controllers\Admin\CategoryController::class,'status']);

//categoryController     --- Custom Field
Route::get('/custom-field',[App\Http\Controllers\Admin\CategoryController::class,'customField'])->name('customField');



//AdvancedController
Route::get('/maintenence',[App\Http\Controllers\Admin\AdvancedController::class,'maintenence'])->name('maintenence');
Route::get('/site-map',[App\Http\Controllers\Admin\AdvancedController::class,'siteMap'])->name('siteMap');

//sucategoryController

Route::get('/subcategory',[App\Http\Controllers\Admin\SubCategoryController::class,'index'])->name('subcategory.index');
Route::post('/subcategory/insert',[App\Http\Controllers\Admin\SubCategoryController::class,'insert'])->name('subcategory.insert');
Route::post('/subcategory/update/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'update'])->name('subcategory.update');
Route::get('/delete-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'delete'])->name('subcategory.delete');

Route::get('/subcategory/update-status/{id}/{status}',[App\Http\Controllers\Admin\SubCategoryController::class,'status']);



//cityController

Route::get('/city',[App\Http\Controllers\Admin\CityController::class,'index'])->name('city.index');
Route::get('/city/suburbs/{id}',[App\Http\Controllers\Admin\CityController::class,'suburbs'])->name('city.suburbs.view');
Route::post('/city/insert',[App\Http\Controllers\Admin\CityController::class,'insert'])->name('city.insert');
Route::post('/city/update/{id}',[App\Http\Controllers\Admin\CityController::class,'update'])->name('city.update');
Route::get('/delete-city/{id}',[App\Http\Controllers\Admin\CityController::class,'delete'])->name('city.delete');

Route::get('/city/update-status/{id}/{status}',[App\Http\Controllers\Admin\CityController::class,'status']);

//suburbsControllerController

Route::get('/suburbs',[App\Http\Controllers\Admin\SuburbsController::class,'index'])->name('suburbs.index');
Route::post('/suburbs/insert',[App\Http\Controllers\Admin\SuburbsController::class,'insert'])->name('suburbs.insert');
Route::post('/suburbs/update/{id}',[App\Http\Controllers\Admin\SuburbsController::class,'update'])->name('suburbs.update');
Route::get('/delete-suburbs/{id}',[App\Http\Controllers\Admin\SuburbsController::class,'delete'])->name('suburbs.delete');

Route::get('/suburbs/update-status/{id}/{status}',[App\Http\Controllers\Admin\SuburbsController::class,'status']);

//EmailtampleteControllerController

Route::get('/email_tanplete',[App\Http\Controllers\Admin\EmailTampleteController::class,'index'])->name('email_tanplete.index');
Route::post('/email_tanplete/insert',[App\Http\Controllers\Admin\EmailTampleteController::class,'insert'])->name('email_tanplete.insert');
Route::post('/email_tanplete/update/{id}',[App\Http\Controllers\Admin\EmailTampleteController::class,'update'])->name('email_tanplete.update');
Route::get('/delete-emailTamplete/{id}',[App\Http\Controllers\Admin\EmailTampleteController::class,'delete'])->name('email_tanplete.delete');

Route::get('/emailTamplete/update-status/{id}/{status}',[App\Http\Controllers\Admin\EmailTampleteController::class,'status']);

//UserController

Route::get('/user',[App\Http\Controllers\Admin\UserController::class,'index'])->name('user.index');
Route::post('/user/insert',[App\Http\Controllers\Admin\UserController::class,'insert'])->name('user.insert');
Route::post('/user/update/{id}',[App\Http\Controllers\Admin\UserController::class,'update'])->name('user.update');
Route::get('/delete-user/{id}',[App\Http\Controllers\Admin\UserController::class,'delete'])->name('user.delete');

Route::get('/user/update-status/{id}/{status}',[App\Http\Controllers\Admin\UserController::class,'status']);
Route::get('/user/update-block/{id}/{block}',[App\Http\Controllers\Admin\UserController::class,'block']);

// user Special Price
Route::get('/user/special-price',[App\Http\Controllers\Admin\UserController::class,'user_price'])->name('user.user_price');
Route::get('/user/getuser',[App\Http\Controllers\Admin\UserController::class,'getuser'])->name('user.getuser');
Route::post('/user/price/insert',[App\Http\Controllers\Admin\UserController::class,'user_price_insert'])->name('user.price.insert');

//user Adds
Route::get('/user/adds',[App\Http\Controllers\Admin\UserController::class,'user_adds'])->name('user.user_adds');
Route::get('/user/adds/view/{id}',[App\Http\Controllers\Admin\UserController::class,'user_adds_view'])->name('user.user_adds.view');
Route::get('/delete-userads/{id}',[App\Http\Controllers\Admin\UserController::class,'deleteUserAds']);
//banner and Slider COntroller
Route::get('/page/index',[App\Http\Controllers\Admin\AdPageController::class,'index'])->name('adpage.index');
Route::get('/page/gallery/{id}',[App\Http\Controllers\Admin\AdPageController::class,'gallery_add'])->name('adpage.gallery.add');
Route::post('/page/banner/insert/{id}',[App\Http\Controllers\Admin\AdPageController::class,'banner_insert'])->name('banner.page.insert');
Route::post('/page/worm/insert/{id}',[App\Http\Controllers\Admin\AdPageController::class,'worm_insert'])->name('worm.page.insert');
Route::post('/page/gallery/insert/{id}',[App\Http\Controllers\Admin\AdPageController::class,'gallery_insert'])->name('gallery.page.insert');
Route::post('/category/update/banner/{id}',[App\Http\Controllers\Admin\AdPageController::class,'banner_update'])->name('category.banner.update');
Route::post('/category/update/slider/{id}',[App\Http\Controllers\Admin\AdPageController::class,'slider_update'])->name('category.slider.update');
Route::get('/delete-slider/{id}',[App\Http\Controllers\Admin\AdPageController::class,'delete_slider'])->name('slider.delete');



//sendmailController
Route::post('/user/sendMail',[App\Http\Controllers\Admin\SendMailController::class,'userEmail'])->name('user.sendMail');
Route::post('/all_user/sendMail',[App\Http\Controllers\Admin\SendMailController::class,'all_user'])->name('all_user.sendMail');

//BusinessTranscationCOntroller strat
Route::get('/business_transcation',[App\Http\Controllers\Admin\BusinessPageTranscationController::class,'index'])->name('business_transcation.index');
    Route::get('/business_transcation/view_payment/{id}',[App\Http\Controllers\Admin\BusinessPageTranscationController::class,'view_payment'])->name('business_transcation.view_payment');
    Route::get('/business_management',[App\Http\Controllers\Admin\BusinessPageManagementController::class,'index'])->name('business_management.index');
    Route::post('/business_management/insert/banner',[App\Http\Controllers\Admin\BusinessPageManagementController::class,'banner_insert'])->name('business_management.banner.insert');
    Route::post('/business_management/update/banner/{id}',[App\Http\Controllers\Admin\BusinessPageManagementController::class,'banner_update'])->name('business_management.banner.update');
    Route::get('/listing/update-fees/{id}/{price}',[App\Http\Controllers\Admin\BusinessPageManagementController::class,'updatePrice']);


    Route::get('/payment-for-business',[App\Http\Controllers\Admin\BusinessPageManagementController::class,'payment_for_business'])->name('payment_for_business');
//BusinessController end

//HelpController
Route::get('/show/message',[App\Http\Controllers\Admin\HelpController::class,'show'])->name('show.message');

//RoleController
Route::get('/role/create',[App\Http\Controllers\Admin\RoleController::class,'index'])->name('role.index');
Route::post('/role/insert',[App\Http\Controllers\Admin\RoleController::class,'insert'])->name('role.insert');
Route::get('/delete-roll/{id}',[App\Http\Controllers\Admin\RoleController::class,'delete'])->name('role.delete');
Route::get('/update/{id}',[App\Http\Controllers\Admin\RoleController::class,'edit'])->name('role.edit');
Route::post('/update/{id}',[App\Http\Controllers\Admin\RoleController::class,'update'])->name('role.update');

//staff

Route::get('/staff/create',[App\Http\Controllers\Admin\RoleController::class,'staff'])->name('staff.index');
Route::post('/staff/insert',[App\Http\Controllers\Admin\RoleController::class,'staff_insert'])->name('staff.insert');
Route::get('/delete-staff/{id}',[App\Http\Controllers\Admin\RoleController::class,'staff_delete'])->name('staff.delete');
Route::get('/staff/update/{id}',[App\Http\Controllers\Admin\RoleController::class,'staff_edit'])->name('staff.edit');
Route::post('/staff/update/{id}',[App\Http\Controllers\Admin\RoleController::class,'staff_update'])->name('staff.update');

//permission



});
});

Route::get('role/permission/{id}', [App\Http\Controllers\Admin\RoleController::class,'permission'])->name('role.permission');
Route::post('role/set_permission', [App\Http\Controllers\Admin\RoleController::class,'setPermission'])->name('role.setPermission');

//admin Panel end |


//User Panel start
Route::get('/user/register',[App\Http\Controllers\User\UserController::class,'index'])->name('user.register');
Route::get('/user/login',[App\Http\Controllers\User\UserController::class,'loginForm'])->name('user.loginForm');
Route::get('verify/email',[App\Http\Controllers\User\UserController::class,'verify_email'])->name('verify.email');
Route::post('verify/email',[App\Http\Controllers\User\UserController::class,'send_verify_email'])->name('user.verify.email');
Route::post('/user/login',[App\Http\Controllers\User\UserController::class,'login'])->name('user.login');
Route::post('/user/registartion',[App\Http\Controllers\User\UserController::class,'registration'])->name('user.registration');
Route::match(['get','post'],'/user/forgot-password',  [App\Http\Controllers\User\UserController::class,'forgotPassword'])->name('user.forgot-password');
Route::get('/get_suburbs',[App\Http\Controllers\User\UserController::class,'get_suburbs'])->name('get_suburbs');

Route::get('confirm/{code}' ,[App\Http\Controllers\User\UserController::class,'confirmAccount'])->name('user.confirm');
Route::group(['middleware'=>['user']],function(){
    //user Account Controller start
Route::get('/user/account' ,[App\Http\Controllers\User\UserController::class,'account'])->name('user.account');
Route::get('/edit_suburbs',[App\Http\Controllers\User\UserController::class,'edit_suburbs'])->name('edit_suburbs');
Route::get('/user/account/edit/{id}' ,[App\Http\Controllers\User\UserController::class,'account_edit'])->name('user.account.edit');
Route::post('/user/account/update/{id}' ,[App\Http\Controllers\User\UserController::class,'account_update'])->name('user.account.update');
Route::get('/user/logout' ,[App\Http\Controllers\User\UserController::class,'logout'])->name('user.logout');

//end User Controller


//AdvertisingCOntroller Start
Route::get('/user/post_ad' ,[App\Http\Controllers\User\AdvertisementController::class,'index'])->name('user.post_ad');
Route::get('/get_subcategory',[App\Http\Controllers\User\AdvertisementController::class,'get_subcategory'])->name('get_subcategory');
Route::get('/add_get_suburbs',[App\Http\Controllers\User\AdvertisementController::class,'get_suburbs'])->name('add_get_suburbs');
Route::post('/user/store' ,[App\Http\Controllers\User\AdvertisementController::class,'store'])->name('user.store');

// user active advertising view
Route::get('/user/active/advertising/view/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'ActiveAdsView'])->name('user.active.advertising.view');

Route::get('/user/active/advertising' ,[App\Http\Controllers\User\AdvertisementController::class,'activeAdvertising'])->name('user.active.advertising');


// user expired advertising view
Route::get('/user/expired/advertising/view/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'ExpiredAdsView'])->name('user.expired.advertising.view');

Route::get('/user/expired/advertising' ,[App\Http\Controllers\User\AdvertisementController::class,'expiredAdvertising'])->name('user.expired.advertising');

// user advertising view
Route::get('/user/advertising/view/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'UserAdsView'])->name('user.advertising.view');


Route::get('/user/advertising' ,[App\Http\Controllers\User\AdvertisementController::class,'advertising'])->name('user.advertising');
Route::get('/user/advertising/edit/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'edit'])->name('user.advertising.edit');
Route::post('/user/advertising/update/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'update'])->name('user.advertising.update');
Route::match(['get','post'],'user/delete-advertising/{id}' ,[App\Http\Controllers\User\AdvertisementController::class,'delete'])->name('user.advertising.delete');
//advertisingController End



//LisitngController start

Route::get('/user/lisitng/view/{id}' ,[App\Http\Controllers\User\ListingController::class,'listView'])->name('user.listing.view');
Route::get('/user/listing_ad' ,[App\Http\Controllers\User\ListingController::class,'listAdd'])->name('user.listing_ad');
Route::post('/user/listing/store' ,[App\Http\Controllers\User\ListingController::class,'liststore'])->name('user.listing.store');
Route::get('/user/active/lisitng' ,[App\Http\Controllers\User\ListingController::class,'activeListing'])->name('user.active.lisitng');


Route::get('/user/expired/lisitng' ,[App\Http\Controllers\User\ListingController::class,'expiredListing'])->name('user.expired.lisitng');
Route::get('/user/lisitng' ,[App\Http\Controllers\User\ListingController::class,'listing'])->name('user.lisitng');
Route::get('/user/lisitng/edit/{id}' ,[App\Http\Controllers\User\ListingController::class,'edit'])->name('user.listing.edit');
Route::post('/user/lisitng/update/{id}' ,[App\Http\Controllers\User\ListingController::class,'update'])->name('user.listing.update');
Route::match(['get','post'],'user/delete-lisitng/{id}' ,[App\Http\Controllers\User\ListingController::class,'delete'])->name('user.listing.delete');
//lisitngController End
//use Message
Route::get('/user/view/message', [App\Http\Controllers\User\MessageController::class, 'user_message'])->name('user.view.message');
Route::post('/user/reply/message', [App\Http\Controllers\User\MessageController::class, 'reply_message'])->name('user.reply.message');





//product view
Route::get('/product/view' ,[App\Http\Controllers\User\ListingController::class,'Productview'])->name('product.view');

//Watch Controller start 
Route::get('/user/watch' ,[App\Http\Controllers\User\WatchController::class,'index'])->name('user.watch');

//Watch controller End


Route::get('/paypal' ,[App\Http\Controllers\PaypalController::class,'paypal'])->name('payment.paypal');


Route::get('create-transaction', [App\Http\Controllers\PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [App\Http\Controllers\PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [App\Http\Controllers\PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [App\Http\Controllers\PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
//paypalController End

});
//User Panel End

 




//Front Panel Start

Route::get('/business/listing',[App\Http\Controllers\Front\BusinessLisitngController::class,'index'])->name('front.business.lisitng');
Route::get('/business/listing/details/{id}',[App\Http\Controllers\Front\BusinessLisitngController::class,'listing_details'])->name('front.business.lisitng.details');
Route::get('{url}',[App\Http\Controllers\Front\CategoryController::class,'index'])->name('front.category');


Route::get('/user/cat/details/{id}',[App\Http\Controllers\Front\CategoryController::class,'cat_details'])->name('front.categories.cateory.details');
Route::post('/watch/adds',[App\Http\Controllers\Front\CategoryController::class,'watch'])->name('front.watch');
//Front panel End


//facebook login start
Route::get('auth/facebook', [App\Http\Controllers\FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\FacebookController::class, 'handleFacebookCallback']); 

//facebook login end

//search Controller
Route::post('/search', [App\Http\Controllers\Front\FrontController::class, 'search'])->name('front.search');
Route::post('/navSearch', [App\Http\Controllers\Front\FrontController::class, 'navSearch'])->name('front.navSearch');

//search controller
//user Send Message
Route::post('/user/send/message', [App\Http\Controllers\User\MessageController::class, 'send_message'])->name('user.send.message');
//extraController
Route::get('user/t_c', [App\Http\Controllers\Front\ExtraController::class, 't_c'])->name('user.t_c'); 
Route::get('user/privecy_policy', [App\Http\Controllers\Front\ExtraController::class, 'privecy_policy'])->name('user.privecy_policy');
Route::get('user/about_us', [App\Http\Controllers\Front\ExtraController::class, 'about_us'])->name('user.about_us'); 
Route::get('user/help', [App\Http\Controllers\Front\ExtraController::class, 'help'])->name('user.help'); 
Route::post('user/help', [App\Http\Controllers\Front\ExtraController::class, 'send_message'])->name('useer.help.efox'); 
//Auction Controller

Route::get('user/auction/{id}', [App\Http\Controllers\Front\AuctionController::class, 'auction'])->name('user.auction');
//BuyController
Route::get('user/buy/{id}', [App\Http\Controllers\Front\BuyController::class, 'buy'])->name('user.buy');
Route::get('user/listing/{id}', [App\Http\Controllers\Front\BuyController::class, 'user_listing'])->name('user.listing');


//BidController
Route::get('user/bid/login', [App\Http\Controllers\User\BidController::class, 'bidlogin'])->name('user.bid.login');
Route::post('user/bid/login/insert', [App\Http\Controllers\User\BidController::class, 'bidlogininsert'])->name('user.bid.login.insert');
Route::get('/user/bid/register',[App\Http\Controllers\User\BidController::class,'bidindex'])->name('user.bid.register');
Route::get('bud/verify/email',[App\Http\Controllers\User\BidController::class,'bid_verify_email'])->name('bid.verify.email');
Route::post('bid/verify/email',[App\Http\Controllers\User\BidController::class,'bid_send_verify_email'])->name('user.bid.verify.email');
Route::post('/user/bid/registartion',[App\Http\Controllers\User\BidController::class,'bidregistration'])->name('user.bid.registration');
Route::get('bid/confirm/{code}' ,[App\Http\Controllers\User\BidController::class,'bidconfirmAccount'])->name('user.bid.confirm');
Route::group(['middleware'=>['bid']],function(){
    //UserBid Controller
Route::post('/user/send/bids', [App\Http\Controllers\User\UserBidController::class, 'user_sends_bids'])->name('user.send.bids');
//PAypalController start
});


