<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobbies', function (Blueprint $table) {
            $table->increments('hobbyid');
            $table->string('homeactivity')->nullable();
            $table->string('outsideactivity')->nullable();
            $table->string('favesubject')->nullable();
            $table->string('extraco')->nullable();
            $table->string('favesport')->nullable();
            $table->string('ambition')->nullable();
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
        Schema::dropIfExists('hobbies');
    }
}
