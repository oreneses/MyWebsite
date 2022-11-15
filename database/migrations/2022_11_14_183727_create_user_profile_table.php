<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserProfile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surnames');
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('residence');
            $table->string('job');
            $table->boolean('remote');
            $table->string('url_linkedIn')->unique();
            $table->string('presentation');
            $table->string('idUser');
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
        Schema::dropIfExists('UserProfile');
    }
}
