<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('insured_id');
            $table->string('status');
            $table->date('date');
            $table->string('currency_id');
            $table->integer('kurs_to_idr');
            $table->string('cover_type');
            $table->string('insurance_id');
            $table->longText('policy_number');
            $table->date('period_from');
            $table->date('period_to');
            $table->string('risk_location');
            $table->string('sum_insured');
            $table->string('payment_warranty');
            $table->longText('particulars');
            $table->integer('premium');
            $table->integer('policy_cost');
            $table->integer('stamp_duty');
            $table->integer('others_a');//others asli
            $table->longText('signfor');// untuk tanda tangan
            $table->integer('admin_cost');
            $table->integer('mds_commission');
            $table->integer('vat');
            $table->integer('outcome_commission');
            $table->integer('incoming_tax_net');
            $table->integer('others_c'); //others copy
            $table->integer('incoming_tax_total'); //incoming bernilai
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
        Schema::dropIfExists('invoice');
    }
}
