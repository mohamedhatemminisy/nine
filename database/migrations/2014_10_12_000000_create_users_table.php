<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('Fname')->nullable();
            $table->string('Lname')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->string('profileImage')->nullable();
            $table->enum('isActive', ['active','not_active'])->default('active');          
            $table->string('deviceToken')->nullable();
            $table->string('remember_token',100)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
