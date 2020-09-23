<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placings', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->dateTime('date');
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
            $table->integer('compensation');
            $table->string('warranty');
            $table->longText('remarks');
            $table->longText('signfor');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE placings AUTO_INCREMENT = 00000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placings');
    }
}
