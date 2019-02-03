<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholars', function (Blueprint $table) {
            $table->increments('scholarid');
            $table->integer('appformid');
            $table->integer('personid');
            $table->integer('sponsorid');
            $table->string('caseno');
            $table->string('nickname')->nullable();
            $table->string('currentyrlevel');
            $table->string('birthdate');
            $table->string('address');
            $table->string('classification');
            $table->string('school');
            $table->string('religion');
            $table->string('admissiondate');
            $table->string('applicationstatus');
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
        Schema::dropIfExists('scholars');
    }
}
