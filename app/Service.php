<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
         public function photos(){

        return $this->hasMany('App\ServiceImage');
    }
}
