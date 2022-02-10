<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReferences extends Migration
{
    public function up()
    {
        Schema::table('imgs', function (Blueprint $table) {
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('imgs', function (Blueprint $table) {
            // 移除外键约束
            $table->dropForeign(['topic_id']);
        });

        Schema::table('prices', function (Blueprint $table) {
            $table->dropForeign(['topic_id']);
        });

    }
}
