<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('budgetid');
            $table->integer('budgetallocationid');
            $table->integer('scholarid');
            $table->float('equivsupplies');
            $table->float('equivprojects');
            $table->float('equivuniform');
            $table->float('equivcontrib');
            $table->float('equivtranspo');
            $table->float('amountspent');
            $table->float('amountremaining');
            $table->float('amountcredited');
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
        Schema::dropIfExists('budgets');
    }
}
