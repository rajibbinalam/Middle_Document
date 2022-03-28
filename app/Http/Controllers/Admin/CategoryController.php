<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $data['title']="Show category";
        $data['table']="Show Category List";
        $data['add_title'] = "Add Category";
        $data['category'] = Category::get();
    return view('admin.category.index',$data);
    }

    public function sub_category($id)
    {
        $data['title']="Show Sub-category";
        $data['table']="Show Sub-Category List";
        $data['add_title'] = "Add Sub Category";
        $data['category'] = Category::where('id',$id)->first();
        $data['subcategory'] =SubCategory::where('cat_id',$data['category']->id)->get();
        $data['catname'] = Category::get();
        return view('admin.category.subcategory',$data);
    }

    public function status($id, $status)
    {

        $data = Category::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function insert(Request $request)
    {
        $data = new Category();
        $data->cat_name = $request['cat_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
       return back()->with('flash_message_success','Category added successfully');
    }

    public function edit($id)
    {   $data['title']="Show category";
        $data['table']="Show Category List";
        $data['add_title'] = "Edit Category";
        $data['category'] = Category::find($id);
       return view('admin.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = Category::find($id);
        $data->cat_name = $request['cat_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
        return back()->with('flash_message_success','Category Update successfully');
    }

    public function delete($id)
    {
      $data = Category::find($id);
   
    $data->delete();
    return back()->with('flash_message_success','Category has delete successfully');
    }


    public function customField(){
        $data['title'] = "Custom Field";
        $data['table'] = "Custom Field";
        return view('admin.category.custom_field',$data);
    }
}
