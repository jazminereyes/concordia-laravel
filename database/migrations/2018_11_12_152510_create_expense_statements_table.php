<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_statements', function (Blueprint $table) {
            $table->increments('statementid');
            $table->integer('budgetid');
            $table->string('purpose');
            $table->string('expensecategory');
            $table->float('amount');
            $table->float('balance');
            $table->string('receivedby');
            $table->string('releasedate');
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
        Schema::dropIfExists('expense_statements');
    }
}
