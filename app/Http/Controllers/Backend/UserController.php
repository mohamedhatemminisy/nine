<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    /**
     * Display Profile Info
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profile(Request $request, $id){

           $user  = User::find($id);

        return view('backend.user.profile' , compact('user')); 


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
         $users = User::all(); 

        return view('backend.user.index' , compact('users')); 
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.user.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User ;


        $user->Fname = $request->FirstName ; 
        $user->Lname = $request->LastName ; 
        $user->role = $request->user_role;
        $user->phoneNumber = $request->user_mobile_number ;  
        $user->email = $request->user_email ; 
        $user->password = crypt($request->user_password ,'') ; 
        $user->isActive = $request->user_status == 'on' ? 'active' : 'not_active' ; 

             if($request->hasFile('logo')){

            $logo = $request->file('logo'); 
            $extension = $logo->getClientOriginalExtension();
            $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
            $logo->move(public_path('uploads/users'), $logo_rename) ; 
            $user->profileImage = $logo_rename ; 
        } 

        $user->save(); 
        session()->flash('success' , trans('user info created')); 
        return redirect()->route('user.index'); 


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
        //
         $user = User::find($id); 

        return view('backend.user.edit' , compact('user'));
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
        //

        $user = User::find($id);

        $user->Fname = $request->FirstName ; 
        $user->Lname = $request->LastName ;  
        $user->phoneNumber = $request->user_mobile_number ;  
        $user->email = $request->user_email ; 
        $user->isActive = $request->status == 'on' ? 'active' : 'not_active' ;

        if ($user->password != "")
        {
             
        }
        else{
              $user->password  = crypt($request->user_password , '') ;
        }
       
         if($request->hasFile('logo')){

                $logo = $request->file('logo'); 
                $extension = $logo->getClientOriginalExtension();
                $logo_rename = time() . '.' .$logo->getClientOriginalExtension(); 
                $logo->move(public_path('uploads/users'), $logo_rename) ; 
                $user->profileImage = $logo_rename ; 
        }

        $user->save() ; 




        session()->flash('success' , trans('user info updated')); 

        // return to a specific view 
        return redirect()->route('user.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $user = User::find($id); 

       $user->delete() ; 



        session()->flash('success' , trans('user info deleted')); 

        // return to a specific view 
        return redirect()->route('user.index'); 
    }
}
