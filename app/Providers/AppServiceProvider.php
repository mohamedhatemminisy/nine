<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\About;
use View;

use LaravelLocalization; 

 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

            
    
            Schema::defaultStringLength(191);

      
          view::composer('*' , function ($view){



                // Footer data

                $header = About::first();
                $view-> with('header' , $header) ;
 
            });

      

            

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
