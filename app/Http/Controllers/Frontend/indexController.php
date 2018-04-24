<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use LaravelLocalization ; 
use DB ; 
use Auth ; 
use File ; 
use App\Http\Requests;
use App\About;
use App\Service;
use App\ServiceImage;
use App\slider;

class indexController extends Controller
{

    public function getData()
    {
       $abouts = About::first();
       $service = Service::where('status','active')->take(3)->inRandomOrder()->get();
       
       $slider = slider::take(1)->get();
       $sliders = slider::skip(1)->take(2)->get();
 
        return view('frontend.index',compact('abouts','service','slider','sliders'));
    }

 
 
    
}