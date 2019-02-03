<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_details', function (Blueprint $table) {
            $table->increments('adoptiondetailid');
            $table->integer('orphanid');
            $table->string('type');
            $table->string('adoptiondate');
            $table->string('parentname');
            $table->string('parentemail');
            $table->string('parentcontact');
            $table->string('parentaddress');
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
        Schema::dropIfExists('adoption_details');
    }
}
