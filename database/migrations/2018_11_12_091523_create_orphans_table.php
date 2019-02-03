<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrphansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphans', function (Blueprint $table) {
            $table->increments('orphanid');
            $table->integer('personid');
            $table->string('caseno');
            $table->string('birthdate');
            $table->string('religion')->nullable();
            $table->string('placefound');
            $table->string('admissiondate');
            $table->string('casestatus');
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
        Schema::dropIfExists('orphans');
    }
}
