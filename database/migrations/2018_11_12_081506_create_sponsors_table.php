<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('sponsorid');
            $table->integer('personid');
            $table->string('birthdate');
            $table->string('email');
            $table->string('contactnumber');
            $table->string('street');
            $table->string('city');
            $table->string('zip');
            $table->string('country');
            $table->integer('scholarcount');
            $table->string('donationtype');
            $table->integer('amount');
            $table->string('submissiondate');
            $table->string('activedate')->nullable();
            $table->string('inactivitydate')->nullable();
            $table->string('applicationcode')->unique();
            $table->string('applicationstatus');
            $table->boolean('activeflag');
            $table->integer('preferenceid')->nullable();
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
        Schema::dropIfExists('sponsors');
    }
}
