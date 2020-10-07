<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoRekeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_rekenings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('input_kode');
            $table->string('nama_bank');
            $table->integer('no_rekening');
            $table->string('atas_nama');
            $table->SoftDeletes();
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
        Schema::dropIfExists('no_rekenings');
    }
}
