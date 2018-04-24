<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallary;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary = Gallary::get();
        return view('backend.gallaries.index',compact('gallary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.gallaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallary = new Gallary();

        $gallary->name_en        = $request->Name;       
        $gallary->name_ar        = $request->name_ar;       
        $gallary->status         = $request->status == 'on' ? 'active' : 'not_active' ; 
        $gallary->description_en = strip_tags($request->description);    
        $gallary->description_ar = strip_tags($request->description_ar);    
      if($request->hasFile('logo')){

            $logo = $request->file('logo'); 
            $extension = $logo->getClientOriginalExtension();
            $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
            $logo->move(public_path('uploads/gallary'), $logo_rename) ; 
            $gallary->photo = $logo_rename ; 
        } 

        $gallary->save(); 
        session()->flash('success' , trans('gallary info created')); 
        return redirect()->route('gallary.index'); 
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
         $gallary = Gallary::find($id); 

        return view('backend.gallaries.edit' , compact('gallary'));
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
        $gallary = Gallary::find($id);

        $gallary->name_en        = $request->name_en ;  
        $gallary->name_ar        = $request->name_ar ;  
        $gallary->description_en = strip_tags($request->description_en);  
        $gallary->description_ar = strip_tags($request->description_ar);  
        $gallary->status      = $request->status == 'on' ? 'active' : 'not_active' ;
       
         if($request->hasFile('logo')){

                $logo = $request->file('logo'); 
                $extension = $logo->getClientOriginalExtension();
                $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
                $logo->move(public_path('uploads/sliders'), $logo_rename) ; 
                $gallary->photo = $logo_rename ; 
        }

        $gallary->save() ; 




        session()->flash('success' , trans('gallary info updated')); 

        // return to a specific view 
        return redirect()->route('gallary.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $gallary = Gallary::find($id); 
       $gallary->delete() ; 
        session()->flash('success' , trans('gallary info deleted')); 

        // return to a specific view 
        return redirect()->route('gallary.index'); 
    }
}
