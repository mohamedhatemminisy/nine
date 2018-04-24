<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB ; 
use Auth ; 
use File ; 
use App\Service;

class serviceController extends Controller
{

    public function getData()
    {
        $service = Service::where('status','active')->take(1)->inRandomOrder()->get();

        $services = Service::where('status','active')->get();

        return view('frontend.service',compact('service','services'));
     
    }

 
 
    
}