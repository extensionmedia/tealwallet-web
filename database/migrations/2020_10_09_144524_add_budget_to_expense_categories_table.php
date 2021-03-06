<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBudgetToExpenseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_categories', function (Blueprint $table) {
            $table->boolean('is_budget')->default(0);
            $table->decimal('budget_amount', 8, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_categories', function (Blueprint $table) {
            //
        });
    }
}
