<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use LaravelLocalization ; 

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = "dashboard";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /**

     * [authenticate description]

     * @param  Request $request [description]

     * @return [type]           [description]

     */

    public function authenticate(Request $request){
    
 



            $txt_user_check = $request->get('txt_user_check'); 
            $password = $request['password'];

            

            if(empty($txt_user_check)){

                return response()->json(['status'=>'empty_txt_user_check']);

            }


            if(empty($password)){
                return response()->json(['status'=>'empty_password']);
            }
            
            
            




          if (   (Auth::attempt(['email' => $txt_user_check, 'password' => $password ]) )  ||  (Auth::attempt(['phoneNumber' => $txt_user_check, 'password' => $password ]) ) )

            {


              // here attemp is successfull then check user type  :
              // auth attemp success as email -or phone and password
              // but if his status is not active -- just tell hime that
              // he should activate hist account
                  $user = Auth::user();
                  Auth::login($user);

                   return redirect('/dashboard');



              }
              else{
                  return redirect('/');

              }





    }



    public function logout(Request $request){

        Auth::logout(); 

        // regenrate session : 

        $request->session()->regenerate();

        // then redirect to home page  : 

        return redirect('/'); 



    }








}