<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('status');
            $table->dateTime('date');
            $table->longText('to');
            $table->longText('insured');
            $table->longText('period');
            $table->longText('contract_details');
            $table->string('scope');
            $table->string('territorial');
            $table->longText('employee_details');
            $table->longText('vehicle_details');
            $table->longText('cover_type');
            $table->longText('coverage');
            $table->longText('rate');
            $table->string('warranty');
            $table->longText('remarks');
            $table->longText('signfor');
            $table->softDeletes();
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
        Schema::dropIfExists('quotations');
    }
}
