<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\About ; 
use App\AboutPhotos ; 
use LaravelLocalization ; 
use DB ; 
use Auth ; 
use File ; 


class AboutController extends Controller
{
    
    /**
     * So here we will check if we have about information 
     * then we will update it unless create a new one  
     * cause this is a single blade 
     * @return [type] [description]
     */
    public function index(){

        // get authenticated  
       // $user = Auth::user(); 



        $about = About::updateOrCreate([
             
             
        ]);


        return view('backend.about.index',compact('about')); 
    }

    public function update(Request $request , $id){


         
        $about              = About::find($id);
        $about->Facebook    = $request->facebook;
        $about->twiter      = $request->twiter;
        $about->instgram    = $request->instgram;
        $about->google_plus = $request->google_plus;
        $about->offic_one   = $request->offic_one;
        $about->offic_two   = $request->offic_two;
        $about->email       = $request->email;
        $about->about       = strip_tags($request->about) ;
        $about->about_ar    = strip_tags($request->about_ar) ;
        $about->conten      = strip_tags($request->conten) ;
        $about->content_ar      = strip_tags($request->content_ar) ;
        $about->history     = strip_tags($request->history) ;
        $about->history_ar     = strip_tags($request->history_ar) ;
        $about->featured    = strip_tags($request->featured) ;
        $about->description = strip_tags($request->description) ;
        $about->description_ar = strip_tags($request->description_ar) ;
        $about->defination  = strip_tags($request->defination) ;
        $about->defenation_ar  = strip_tags($request->defenation_ar) ;
        
        $about->save();
 


             // flashing a success message  
                session()->flash('success' , trans('Settings updated')); 

                
                return back(); 

    }




    /**
     * Fetch User About Photos  
     * as we know that each user has only one about record on database  
     * @param  [type] $related_to [description]
     * @return [type]             [description]
     */
    public function getImages(){



            // get about info 
            $photos = About::get();

            // then through it we wikll fetch all related photos 

            return view('backend.about.about-photos' , compact('photos')); 
            






    }



    public function destroyImage($id){


        $image = About::find($id); 

        $image_path = public_path().'/uploads/about/'.$image->name;

        File::delete($image_path); 


        $image->delete(); 



         // flashing a success message  
        session()->flash('success' , trans('about.about_image_deleted')); 

        return back(); 





    }


}
