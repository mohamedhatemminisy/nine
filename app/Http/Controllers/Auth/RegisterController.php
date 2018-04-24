<?php

namespace App\Http\Controllers\Auth;

 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;
use App\User; 
use Illuminate\Http\Request;
use Session ; 


use Auth ; 


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');


    }


     public function showRegistrationForm()
    {
        return view('auth.register');
    }

     

    public function register(Request $request){


                // create default user object
                $user = new User ; 


                if($request->ajax()){

                   
                   /**
                    * Get user type cause we have 2 forms  
                    */
                   
                   $user_incoming_type = $request->get('user_type'); 


                 


                   if($user_incoming_type == 'doctor'){


                     

                        
                        $user->doctorName = $request->get('doctorName');
                        $user->mobileNumber = $request->get('doctorMobileNumber');
                        $user->email = $request->get('doctorEmail'); 
                        $user->website = $request->get('doctorWebsite'); 
                       
                        $user->proffestionPracticeNumber = $request->get('proffestionPracticeNumber');
                        $user->doctorHospitalRelatedTo = $request->get('doctorHospitalRelatedTo');
                        $user->doctorSpecialization = $request->get('doctorSpecialization');
                
                       
                        $user->password = crypt($request->get('docPassword'),'');
                   
                        $user->isActive = "active";  
                        $user->userType = $user_incoming_type; 


                       


                        if($user->save()){

                            Auth::loginUsingId($user->id); 

                            $request->session()->flash('registration_success', trans('frontend.registration_success'));

                            return response()->json(['status'=>'success']);


                        }






                   }else{


                    

                        
                       $user->userType = $user_incoming_type; 
         
                        $user->propertyName = $request->get('propertyName');
                        $user->businessRecordNumber = $request->get('businessRecordNumber');
                
                        $user->phoneNumber =  $request->get('businessRecordNumber');
                        $user->branchName = $request->get('branchName');
                        $user->email = $request->get('email');
                        $user->website = $request->get('website');
                        // $user->location = $request->get('longitude').'-'.$request->get('latitude') ;
                        $user->headPersonName = $request->get('headPersonName');
                        $user->mobileNumber = $request->get('mobileNumber');
                        $user->password = crypt($request->get('password'),'');
                        $user->isActive = "active";  



                        if($user->save()){

                            Auth::loginUsingId($user->id); 

                            $request->session()->flash('registration_success', trans('frontend.registration_success'));

                            return response()->json(['status'=>'success']);


                        }


                   }


                    


                }
 
              
               
                // session()->flash('success' , trans("authentication_labels.register_success")); 
                // return redirect()->back(); 


    
        }


}
