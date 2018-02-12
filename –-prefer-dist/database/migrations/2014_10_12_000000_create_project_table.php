<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::create('basic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projectimage')->default('null');
            $table->string('projecttitle')->default('null');
            $table->string('shortblurb')->default('null');
			$table->string('category')->default('null');
			$table->string('subcategory')->default('null');
			$table->string('projectlocation')->default('null');
			$table->integer('fundingduration')->default('0');
			$table->integer('fundinggoal')->default('0');
			$table->integer('fundraised')->default('0');
			$table->string('projectvideo')->default('null');
			$table->string('projectdescription')->default('null');
			$table->string('risksandchallenges')->default('null');
            $table->string('profileid')->default('null');
        });
		
		Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
			$table->string('link')->default('null');
            $table->string('basicid')->default('null');
		});
		
		Schema::create('perks', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title')->default('null');
			$table->integer('pledgeamount')->default('0');
			$table->string('description')->default('null');
			$table->string('estimated delivery')->default('null');
			$table->string('shippingdetails')->default('null');
            $table->string('basicid')->default('null');
		});
		
		
		Schema::create('collaborators',function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->default('null');
			$table->string('basicid')->default('null');
			
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic');
		Schema::dropIfExists('gallery');
		Schema::dropIfExists('perks');
		Schema::dropIfExists('collaborators');
		
    }
}
