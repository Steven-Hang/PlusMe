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
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');     
            $table->integer('contact_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('licence_number');
            $table->boolean('terms');
            $table->string('avatar')->default('profile.png');
            $table->string('rating')->default('Good Standing');
            $table->boolean('is_activated')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_Warning')->default(false);
            $table->boolean('is_Banned')->default(false);
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
        Schema::dropIfExists('users');
    }
}
