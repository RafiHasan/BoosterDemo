<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('Profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName')->default('null');
			$table->string('LastName')->default('null');
            $table->string('Email')->unique()->default('null');
            $table->string('Password')->default('null');
			$table->string('Picture')->default('null');
			$table->string('Biography')->default('null');
            $table->rememberToken();
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
        Schema::dropIfExists('Profile');
		
    }
}
