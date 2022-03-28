<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Suburbs;


class SuburbsController extends Controller
{
    public function index()
    {
        $data['title']="Show Suburbs";
        $data['table']="Show Suburbs List";
        $data['add_title'] = "Add Subrubs";
        $data['city'] = City::get();
        $data['suburbs'] = Suburbs::with('city')->get();

        // dd($data['subcategory']);
    return view('admin.suburbs.index',$data);
    }

    public function status($id, $status)
    {

        $data = Suburbs::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function insert(Request $request)
    {
        $data = new Suburbs();
        $data->city_id = $request['city_id']; 
        $data->suburbs_name = $request['suburbs_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
       return back();
    }

    public function edit($id)
    {       $data['title']="Show category";
        $data['table']="Show Category List";
        $data['add_title'] = "Edit Category";
        $data['category'] = Suburbs::find($id);
       return view('admin.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = Suburbs::find($id);
        $data->city_id = $request['city_id']; 
        $data->suburbs_name = $request['suburbs_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']); 
        $data->save(); 
        return back()->with('flash_message_success','Suburbs Update successfully');
    }

    public function delete($id)
    {
      $data = Suburbs::find($id);
   
    $data->delete();
    return back()->with('flash_message_success','SubCategory has delete successfully');
    }
}
