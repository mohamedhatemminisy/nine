<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::get();
        return view('backend.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $slider = new slider();
        $slider->name        = $request->Name;       
        $slider->name_ar        = $request->name_ar;       
        $slider->status      = $request->status == 'on' ? 'active' : 'not_active' ; 
        $slider->description = strip_tags($request->description);    
        $slider->description_ar = strip_tags($request->description_ar);    
      if($request->hasFile('logo')){

            $logo = $request->file('logo'); 
            $extension = $logo->getClientOriginalExtension();
            $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
            $logo->move(public_path('uploads/sliders'), $logo_rename) ; 
            $slider->photo = $logo_rename ; 
        } 

        $slider->save(); 
        session()->flash('success' , trans('slider info created')); 
        return redirect()->route('slider.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $slider = slider::find($id); 

        return view('backend.sliders.edit' , compact('slider'));
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
            $slider = slider::find($id);

        $slider->name        = $request->Name ;  
        $slider->name_ar        = $request->name_ar ;  
        $slider->description = strip_tags($request->description);  
        $slider->description_ar = strip_tags($request->description_ar);  
        $slider->status      = $request->status == 'on' ? 'active' : 'not_active' ;
       
         if($request->hasFile('logo')){

                $logo = $request->file('logo'); 
                $extension = $logo->getClientOriginalExtension();
                $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
                $logo->move(public_path('uploads/sliders'), $logo_rename) ; 
                $slider->photo = $logo_rename ; 
        }

        $slider->save() ; 




        session()->flash('success' , trans('slider info updated')); 

        // return to a specific view 
        return redirect()->route('slider.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slid = slider::find($id); 
       $slid->delete() ; 
        session()->flash('success' , trans('slid info deleted')); 

        // return to a specific view 
        return redirect()->route('slider.index'); 
    }
}
