<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price','11')->nullable();
            $table->decimal('rent')->nullable();
            $table->decimal('administrative_fee')->nullable();
            $table->decimal('gratuity_fee')->nullable();
            $table->decimal('deposit')->nullable();
            $table->string('other')->nullable();
            $table->unsignedInteger('topic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prices');
    }
}
