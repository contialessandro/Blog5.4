<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_login');
            $table->string('user_pass');
            $table->string('user_nicename')->default(null);
            $table->string('user_email')->unique();
            $table->string('user_url')->default(null);
            $table->dateTime('user_registered');
            $table->string('user_activation_key')->default(null);
            $table->string('user_status')->default(null);
            $table->string('display_name')->default(null);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
