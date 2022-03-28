<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailTamplete;


class EmailTampleteController extends Controller
{
    public function index()
    {
        $data['title']="Show Email Tamplete";
        $data['table']="Show Email TampleteList";
        $data['add_title'] = "Add Email Tamplete";
        $data['tamplete'] = EmailTamplete::get();


        // dd($data['subEmail Tamplete']);
    return view('admin.email_tamplete',$data);
    }

    public function status($id, $status)
    {

        $data = EmailTamplete::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }


    public function insert(Request $request)
    {
        $data = new EmailTamplete();
        $data->tamplete_name = $request['tamplete_name']; 
        $data->subject = $request['subject']; 

        $data->description = $request['description']; 
        $data->save(); 
       return back()->with('flash_message_success','Email Tamplete added successfully');
    }


  

    public function update(Request $request,$id)
    {
        $data = EmailTamplete::find($id);
        $data->tamplete_name = $request['tamplete_name']; 
        $data->subject = $request['subject']; 

        $data->description = $request['description']; 
      
        $data->save(); 
        return back()->with('flash_message_success','Email Tamplete Update successfully');
    }

    public function delete($id)
    {
      $data = EmailTamplete::find($id);
   
    $data->delete();
    return back()->with('flash_message_success','Email Tamplete has delete successfully');
    }
}
