<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class SeedUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $users = [
            [
                'name'        => 'kyo',
                'password' => Hash::make('password'),
                'email' => 'kyo@example.com',
            ],
            [
                'name'        => 'rtadmin',
                'password' => Hash::make('password'),
                'email' => 'rtadmin@example.com',
            ],
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('users')->truncate();
    }
}
