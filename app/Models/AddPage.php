<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPage extends Model
{
    use HasFactory;
    public function banner()
    {
       return $this->hasMany('App\Models\PageBanner', 'page_id');
    }

    public function slider()
    {
       return $this->hasMany('App\Models\WormSlider', 'page_id');
    }
}
