<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribeToCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('post_categories', function(Blueprint $table)
        {
             $table->increments('id');
             $table->integer('post_id')->unsigned();
             $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
             $table->integer('categories_id')->unsigned();
             $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::drop('post_categories');
	}

}
