<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Suburbs;

class CityController extends Controller
{
    public function index()
    {
        $data['title']="Show City";
        $data['table']="Show city List";
        $data['add_title'] = "Add city";
        $data['add'] = "Add new City";
        $data['city'] = City::get();
    return view('admin.city.index',$data);
    }

    public function suburbs($id)
    {
        $data['title']="Show Subrubs";
        $data['table']="Show Subrubs List";
        $data['add_title'] = "Add Suburbs";
        $data['city'] = City::where('id',$id)->first();
        $data['cityname'] = City::get();
        $data['suburbs'] =Suburbs::where('city_id',$data['city']->id)->get();
        return view('admin.city.suburbs',$data);
    }

    public function status($id, $status)
    {

        $data = City::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function insert(Request $request)
    {
        $data = new City();
        $data->city_name = $request['city_name']; 
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
        $data['category'] = City::find($id);
       return view('admin.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = City::find($id);
        $data->city_name = $request['city_name']; 
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->kewywords = json_encode($request['kewywords']);  
        $data->save(); 
        return back()->with('flash_message_success','City Update successfully');
    }

    public function delete($id)
    {
      $data = City::find($id);
   
    $data->delete();
    return back()->with('flash_message_success','City has delete successfully');
    }
}
