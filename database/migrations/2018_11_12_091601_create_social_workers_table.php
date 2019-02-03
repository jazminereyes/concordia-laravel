<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_workers', function (Blueprint $table) {
            $table->increments('socialworkerid');
            $table->integer('personid');
            $table->string('email');
            $table->string('birthdate');
            $table->string('address');
            $table->string('contactnumber');
            $table->string('endorseragency');
            $table->string('identification');
            $table->string('applicationphoto');
            $table->string('dateapplied');
            $table->string('verifiedflag');
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
        Schema::dropIfExists('social_workers');
    }
}
