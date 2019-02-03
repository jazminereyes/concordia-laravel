<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_forms', function (Blueprint $table) {
            $table->increments('appformid');
            $table->integer('expenditureid');
            $table->integer('hobbyid')->nullable();
            $table->integer('healthinfoid');
            $table->string('lastsemaverage');
            $table->string('submissiondate');
            $table->string('referredby')->nullable();
            $table->string('relationtoreferrer')->nullable();
            $table->string('interviewdate');
            $table->string('interviewedby');
            $table->string('applicationcode');
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
        Schema::dropIfExists('app_forms');
    }
}
