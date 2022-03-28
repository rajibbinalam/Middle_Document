<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvancedController extends Controller
{
    


    public function maintenence(){
        return view('admin.advanced.maintenence');
    }
    public function siteMap(){
        return view('admin.advanced.site_map');
    }
}
