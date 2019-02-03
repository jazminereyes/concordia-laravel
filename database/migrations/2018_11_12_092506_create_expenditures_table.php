<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenditures', function (Blueprint $table) {
            $table->increments('expenditureid');
            $table->string('hometype');
            $table->string('homestatus');
            $table->float('housecost')->nullable();
            $table->string('electricitytype');
            $table->float('electricitycost');
            $table->string('foodtype');
            $table->integer('individualcount');
            $table->string('watertype');
            $table->integer('watercost');
            $table->string('bathroomtype');
            $table->float('educexpense')->nullable;
            $table->float('medexpense')->nullable;
            $table->float('otherexpense')->nullable;
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
        Schema::dropIfExists('expenditures');
    }
}
