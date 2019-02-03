<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_infos', function (Blueprint $table) {
            $table->increments('healthinfoid');
            $table->float('height');
            $table->float('weight');
            $table->string('status');
            $table->string('discolormarks')->nullable();
            $table->string('haircolor');
            $table->string('eyecolor');
            $table->string('skintone');
            $table->string('illness');
            $table->string('lasthd')->nullable();
            $table->string('lastph')->nullable();
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
        Schema::dropIfExists('health_infos');
    }
}
