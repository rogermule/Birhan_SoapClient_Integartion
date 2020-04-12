<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id')->unique();
            $table->string('customer_id')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('transaction_date')->nullable();

            $table->string('dr_cr_ind')->nullable();
            $table->string('transaction_refrence_text')->nullable();
            $table->string('transaction_description')->nullable();
            $table->string('transaction_amount')->nullable();
            $table->string('statement_balance')->nullable();
            $table->string('cleared_bal')->nullable();
            $table->string('ledger_bal')->nullable();
            $table->string('depositor_payee_name')->nullable();
            $table->string('depositor_phone')->nullable();
            $table->string('deposited_for')->nullable();

            $table->string('encodedmustunderstand')->nullable();
            $table->string('encodedmustunderstand12')->nullable();
            $table->string('mustunderstand')->default(false)->nullable();
            $table->string('actor')->nullable();
            $table->string('role')->nullable();
            $table->string('didunderstand')->nullable();
            $table->string('encodedrelay')->nullable();
            $table->string('relay')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
