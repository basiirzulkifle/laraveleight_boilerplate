<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userscore', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prev_score')->nullable();
            $table->unsignedBigInteger('current_score')->nullable()->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_7650528')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userscore');
    }
}
