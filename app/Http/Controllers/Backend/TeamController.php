<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('backend.teams.index',compact('teams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->career      = $request->career;       
        $team->carrer_ar      = $request->carrer_ar;       
        $team->name        = $request->memberName;       
        $team->name_ar        = $request->name_ar;       
        $team->status      = $request->status == 'on' ? 'active' : 'not_active' ; 
        $team->description = strip_tags($request->description);    
        $team->description_ar = strip_tags($request->description_ar);    
      if($request->hasFile('logo')){

            $logo = $request->file('logo'); 
            $extension = $logo->getClientOriginalExtension();
            $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
            $logo->move(public_path('uploads/teams'), $logo_rename) ; 
            $team->photo = $logo_rename ; 
        } 

        $team->save(); 
        session()->flash('success' , trans('member info created')); 
        return redirect()->route('team.index');    
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
        $team = Team::find($id); 

        return view('backend.teams.edit' , compact('team'));
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

        $team = Team::find($id);

        $team->career      = $request->career ; 
        $team->carrer_ar      = $request->carrer_ar ; 
        $team->name        = $request->Name ;  
        $team->name_ar        = $request->name_ar ;  
        $team->description = strip_tags($request->description);  
        $team->description_ar = strip_tags($request->description_ar);  
        $team->status      = $request->status == 'on' ? 'active' : 'not_active' ;
       
         if($request->hasFile('logo')){

                $logo = $request->file('logo'); 
                $extension = $logo->getClientOriginalExtension();
                $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
                $logo->move(public_path('uploads/teams'), $logo_rename) ; 
                $team->photo = $logo_rename ; 
        }

        $team->save() ; 




        session()->flash('success' , trans('member info updated')); 

        // return to a specific view 
        return redirect()->route('team.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $team = Team::find($id); 
       $team->delete() ; 
        session()->flash('success' , trans('member info deleted')); 

        // return to a specific view 
        return redirect()->route('team.index'); 
    }
}
