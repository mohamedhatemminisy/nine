<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceImage;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('backend.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->name        = $request->name;       
        $service->name_ar        = $request->name_ar;       
        $service->description = strip_tags($request->description);       
        $service->description_ar = strip_tags($request->description_ar);       
        $service->status          = $request->status == 'on' ? 'active' : 'not_active' ;
        $service->save();  
          if($request->hasFile('file')){


                    $images = $request->file('file'); 

                    foreach ($images as $image) {
                       


                            $extension = $image->getClientOriginalExtension();
                            $image_rename = str_random(6). '.' .$image->getClientOriginalExtension();  
                            $image->move(public_path('uploads/services'), $image_rename) ; 


                            /**
                             * Saving  in in our seperated table  
                             * we will fetch  by eloquent 
                             */

                            $servie_image = new ServiceImage(); 
                            $servie_image->service_id =  $service->id ; 
                            $servie_image->name = $image_rename ; 

                            $servie_image->save() ;

                   }  

            }
   

        session()->flash('success' , trans('service info created')); 
        return redirect()->route('service.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id) ;
        $photos = $service->photos ;
 
         return view('backend.services.show' , compact('service' , 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id); 
        return view('backend.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $service = Service::find($id);

        $service->name        = $request->Name ;  
        $service->name_ar        = $request->name_ar ;  
        $service->description = strip_tags($request->description);  
        $service->description_ar = strip_tags($request->description_ar);  
        $service->status      = $request->status == 'on' ? 'active' : 'not_active' ;
       
 

        $service->save() ; 

         if($request->hasFile('file')){


                    $images = $request->file('file'); 

                    foreach ($images as $image) {
                       


                            $extension = $image->getClientOriginalExtension();
                            $image_rename = str_random(6). '.' .$image->getClientOriginalExtension();  
                            $image->move(public_path('uploads/services'), $image_rename) ; 


                            /**
                             * Saving  in in our seperated table  
                             * we will fetch  by eloquent 
                             */

                            $pic = new ServiceImage(); 
                            $pic->service_id =  $service->id ; 
                            $pic->name = $image_rename ; 

                            $pic->save() ;
                 }  

            }
   


        session()->flash('success' , trans('service info updated')); 

        // return to a specific view 
        return redirect()->route('service.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $service = Service::find($id); 
       $service->delete() ; 
        session()->flash('success' , trans('service info deleted')); 

        // return to a specific view 
        return redirect()->route('service.index'); 
    }

        public function destroyImage($id){


        $image = ServiceImage::find($id); 

        $image_path = public_path().'/uploads/services/'.$image->name;

        File::delete($image_path); 


        $image->delete(); 


         // flashing a success message  
        session()->flash('success' , trans('photo deleted')); 

        return back(); 

    }
}
