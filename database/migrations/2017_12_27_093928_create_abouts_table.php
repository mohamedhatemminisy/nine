<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('youtibe')->nullable();
            $table->string('snapshat')->nullable();
            $table->enum('status', ['active','not_active'])->default('active');
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
        Schema::dropIfExists('abouts');
    }
}
