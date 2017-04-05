<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->index()->unsigned();
          $table->binary('pic')->nullable();
          $table->string('homeadd')->nullable();
          $table->string('colladd')->nullable();
          $table->string('erno')->nullable();
          $table->string('tel')->nullable();
          $table->integer('weight')->nullable();
          $table->integer('height')->nullable();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
