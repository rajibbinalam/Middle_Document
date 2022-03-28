<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
   public function index()
   {
       $data['page'] = Page::get();
       return view('admin.fees_page.page.index',$data);
   }

   public function insert(Request $request)
   {
       if($request->isMethod('post')){
           $data = $request->all();
           $page = new Page;
           $page->title = $data['title'];
           if(empty( $data['price'])){
            $page->price = 0;
        }else{
         $page->price = $data['price'];
        }
           $page->price = $data['price'];
           if(empty( $data['user_id'])){
               $page->user_id = 0;
           }else{
            $page->user_id = $data['user_id'];
           }

           if(empty( $data['user_price'])){
            $page->user_price = 0;
        }else{
         $page->user_price = $data['user_price'];
        }
           $page->save();
           return back();
       }
   }
}
