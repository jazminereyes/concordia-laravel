<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_allocations', function (Blueprint $table) {
            $table->increments('budgetallocationid');
            $table->integer('schoolsupp');
            $table->integer('schoolproj');
            $table->integer('schooluni');
            $table->integer('schoolcontrib');
            $table->integer('transpo');
            $table->string('type');
            $table->string('effectivityperiod');
            $table->integer('totalamount');
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
        Schema::dropIfExists('budget_allocations');
    }
}
