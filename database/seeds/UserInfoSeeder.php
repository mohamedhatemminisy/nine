<?php

use Illuminate\Database\Seeder;

use App\User ; 

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User ;

        $user->email = "admin@tatweer.com"; 
        $user->Fname = "Mohamed"; 
    	$user->Lname = "Minesy"; 
    	$user->password = crypt(123456, '');
    	$user->isActive = "active";

    	$user->save() ; 
    }
}
