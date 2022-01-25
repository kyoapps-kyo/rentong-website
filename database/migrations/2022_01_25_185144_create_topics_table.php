<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration 
{
	public function up()
	{
		Schema::create('topics', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->text('body');
            $table->bigInteger('admin_user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('last_edit_admin_user_id')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->string('img_id')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('topics');
	}
}
