<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acc_unique_id');
            $table->int('company_id');
            $table->string('acc_name');
            $table->int('acc_owner');
            $table->int('acc_parent');
            $table->text('billing_addr');
            $table->text('shipping_addr');
            $table->int('annual_rev');
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
        Schema::dropIfExists('accounts');
    }
}
