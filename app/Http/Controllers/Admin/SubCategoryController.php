<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['title']="Show Sub-category";
        $data['table']="Show Sub-Category List";
        $data['add_title'] = "Add Sub Category";
        $data['catname'] = Category::get();
        $data['subcategory'] = SubCategory::get();

        // dd($data['subcategory']);
    return view('admin.sub_category.index',$data);
    }

    public function status($id, $status)
    {

        $data = SubCategory::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }


    public function insert(Request $request)
    {
        $data = new SubCategory();
        $data->cat_id = $request['cat_id']; 
        $data->subcat_name = $request['subcat_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
       return back()->with('flash_message_success','SubCategory added successfully');
    }


    public function edit($id)
    {       $data['title']="Show category";
        $data['table']="Show Category List";
        $data['add_title'] = "Edit Sub Category";
        $data['category'] = SubCategory::find($id);
       return view('admin.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = SubCategory::find($id);
        $data->cat_id = $request['cat_id']; 
        $data->subcat_name = $request['subcat_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
        return back()->with('flash_message_success','SubCategory Update successfully');
    }

    public function delete($id)
    {
      $data = SubCategory::find($id);
   
    $data->delete();
    return back()->with('flash_message_success','SubCategory has delete successfully');
    }
}
