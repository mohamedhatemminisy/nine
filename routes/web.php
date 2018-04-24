<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	

    // Frontend- ---- 	


		/**
		 * Frontend Routes 
		 * its not our business now  
		 */

        // This Roue will send you to index page . 

		// Route::get('/', function(){

 	// 		return view('frontend.index');
 	// 	}); 

    Route::get('/', function(){



        return view('frontend.index');
    }); 

    Route::get('/admin',  function()
      {
      if (Auth::check()) {
    // The user is logged in...
    return view('backend.dashboard.index');
        }
else {
        return view('frontend.adminLogin');
}
      });
       
        Route::get('/','Frontend\indexController@getData');
        Route::get('services', 'Frontend\serviceController@getData');
        Route::get('about_us', 'Frontend\aboutController@getData');

       Route::get('contact_seccion',function()
        {
        return redirect('/#contact');
        });

 		/**
 		 * Authentication Routes : 
 		 */
 		
 	 
 		// login
 		Route::post('authenticate' , 'Auth\LoginController@authenticate');

 		// logout
 		Route::post('logout' , 'Auth\LoginController@logout') ; 


 		/**
 		 * Registeration Routes 
 		 */
 		

 		Route::get('register' , 'Auth\RegisterController@showRegistrationForm'); 
 		Route::post('register' , 'Auth\RegisterController@register'); 



// Backend ----



Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth' ]], function()
{





		Route::get('dashboard' , function(){



            return view('backend.dashboard.index');
		});


        Route::resource('user', 'Backend\UserController');

        Route::get('user/profile/{id}', 'Backend\UserController@profile')->name('user.profile');

 
        Route::resource('brands', 'Backend\BrandController');
        Route::resource('gallary', 'Backend\GallaryController');
        Route::resource('team', 'Backend\TeamController');
        Route::resource('service', 'Backend\ServiceController');
        Route::resource('slider', 'Backend\SliderController');
         Route::delete('/product-items/{id}', 'Backend\ServiceController@destroyImage' )->name('destroy-item-image');

 

 

 
         Route::resource('visitorsMessages', 'Backend\visitorsMessagesController');

      Route::get('visitorsMessages', 'Backend\visitorsMessagesController@getvisitorsMessages')->name('visitorsMessages');
    Route::Delete('visitorsMessagesdelete/{id}', 'Backend\visitorsMessagesController@deletevisitorsMessages')->name('deletevisitorsMessages');
 
 
 
       /**
        *  routes for site Setting module
        */

        // Route::resource('siteSetting','Backend\siteSettingController');
        
 
        Route::get('/about' , 'Backend\AboutController@index')->name('about') ;
        Route::put('/about/{id}' , 'Backend\AboutController@update')->name('about_update') ; 

        // about photos 
        Route::get('/about-photos/{related_to}' , 'Backend\AboutController@getImages')->name('about-photos') ;
        Route::delete('/about-photos/{id}', 'Backend\AboutController@destroyImage' )->name('destroy-image');
        
      
});

 
 
