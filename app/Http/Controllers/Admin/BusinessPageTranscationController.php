<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class BusinessPageTranscationController extends Controller
{
  public function index()
  {

    $data['business'] = Listing::with('listingid')->get();
    $data['title'] = "Business Transcations";
    $data['table'] = "Filter Payments By";
    $data['add_title'] = "Add Category";
    $data['add'] = "Add Category";


    return view('admin.business_transcation.index', $data);
  }
}
