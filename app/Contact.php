<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        public function sender(){
        return $this->belongsTo('App\User' , 'sender_id');
     }
 }