<?php

use Illuminate\Database\Seeder;

use App\Language ; 

class LanguageDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	$language_arabic  = new Language ; 

    	 

		$language_arabic->label = 'ar'  ; 
		$language_arabic->name = 'العربية' ; 
		$language_arabic->status = '1' ; 
		$language_arabic->save(); 

    	$language_english = new Language ; 
    		 
		$language_english->label = 'en' ; 
		$language_english->name = 'English' ; 
		$language_english->status = '1' ; 
		$language_english->save(); 

    		 

    			

    			



    	 

    }
}
