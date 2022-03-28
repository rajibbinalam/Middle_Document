<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasMany('App\Models\SubCategory','cat_id');
    }
    public function subcategories()
    {
        return $this->hasMany('App\Models\SubCategory','cat_id');
    }
    public static function categories(){
        $getCategory= Category::with('subcategories')->get();
        $getCategory = json_decode(json_encode($getCategory),true);
        return $getCategory;
      }
    // public function subcategories()
    // {
    //     return $this->hasMany('App\Models\Category','cat_id');
    // }

    public static function catDetails($url){

        $catDetails = SubCategory::select('id','subcat_name','url')->where('url',$url)->first()->toArray();
    //   dd($catDetails);die();
    

       
        foreach($catDetails as $subcat){
        $catIds = $subcat['id'];
        
        }
        //   dd($catIds);die();
         return array('catIds'=>$catIds,'catDetails'=>$catDetails);
        }
}
