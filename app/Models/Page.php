<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public static function pageid($id){
        $page = App\Models\Page::find('id',$id)->first();
        return $page;
    }
}
