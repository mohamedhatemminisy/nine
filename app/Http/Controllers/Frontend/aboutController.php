<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB ; 
use Auth ; 
use File ; 
use App\About;
use App\Team;
use App\Brands;

class aboutController extends Controller
{

    public function getData()
    {
 
        $about = About::where('id', 1)->first();
        
        $members = Team::where('status','active')->get();
        $brands = Brands::where('status','active')->get();
 
      // dd($brands);
        return view('frontend.about',compact('about','members','brands'));
     
    }

 
 
    
}