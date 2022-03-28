<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
Use App\Models\Advertising;
use App\Models\City;
use App\Models\Listing;
use App\Models\PageBanner;
use App\Models\WormSlider;
use App\Models\Watch;

class WatchController extends Controller
{
    public function index()
    {
        $data['listing'] = Listing::get();
        return view('user.watch.view',$data);
    }
}
