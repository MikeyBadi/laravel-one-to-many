<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    public function posts(){
        return $this->hasMany('App\Post');
    }


}
