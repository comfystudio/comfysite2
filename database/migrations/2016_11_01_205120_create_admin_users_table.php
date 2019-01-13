<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('salt');
            $table->string('display_name');
            $table->timestamps();
        });

        DB::table('admin_users')->insert(
            array(
                'username' => 'william',
                'password' => 'cb988a5d7fd2ec1919e3edf8e1eee6f869e8c42d65a33e9271e716b81dd899b8',
                'email' => 'will_byrne56@hotmail.com',
                'salt' => 1478532380,
                'display_name' => 'william',
                'created_at' => date('Y-m-d H:i:s')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_users');
    }
}
