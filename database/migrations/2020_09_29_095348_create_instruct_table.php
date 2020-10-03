<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('quotation_id');
            $table->string('insurance_id');
            $table->longText('insured');
            $table->longText('period');
            $table->longText('contract_details');
            $table->string('scope');
            $table->string('territorial');
            $table->longText('employee_details');
            $table->longText('vehicle_details');
            $table->longText('cover_type');
            $table->longText('coverage');
            $table->integer('premium');
            $table->integer('policy_cost');
            $table->integer('rate');
            $table->string('warranty');
            $table->longText('other');
            $table->longText('signfor');
            $table->longText('confirmby');
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
        Schema::dropIfExists('instructs');
    }
}
