<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            //
            $table->string('postcode');
            $table->string('prefecture')->nullable();
            $table->string('city')->nullable();
            $table->string('suburb')->nullable();
            $table->string('detail_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            //
            $table->dropColumn(['prefecture','city','suburb','map','postcode','detail_address']);
        });
    }
}
