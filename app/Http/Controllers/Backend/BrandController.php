<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::get();
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.brands.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brands ;


         $brand->status = $request->status == 'on' ? 'active' : 'not_active' ; 

             if($request->hasFile('logo')){

            $logo = $request->file('logo'); 
            $extension = $logo->getClientOriginalExtension();
            $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
            $logo->move(public_path('uploads/brands'), $logo_rename) ; 
            $brand->photo = $logo_rename ; 
        } 

        $brand->save(); 
        session()->flash('success' , trans('brand info created')); 
        return redirect()->route('brands.index'); 


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
         $brands = Brands::find($id); 

        return view('backend.brands.edit' , compact('brands'));
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
       
        $brand = Brands::find($id);

         $brand->status = $request->status == 'on' ? 'active' : 'not_active' ;
 
         if($request->hasFile('logo')){

                $logo = $request->file('logo'); 
                $extension = $logo->getClientOriginalExtension();
                $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
                $logo->move(public_path('uploads/brands'), $logo_rename) ; 
                $brand->photo = $logo_rename ; 
        }

        $brand->save() ; 




        session()->flash('success' , trans('brand info updated')); 

        // return to a specific view 
        return redirect()->route('brands.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand = Brands::find($id); 

       $brand->delete() ; 



        session()->flash('success' , trans('brand deleted')); 

        // return to a specific view 
        return redirect()->route('brands.index'); 
    }
}
