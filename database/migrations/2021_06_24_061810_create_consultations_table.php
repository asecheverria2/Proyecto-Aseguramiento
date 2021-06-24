<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('pacient_id');
            $table->foreign('pacient_id')->references('id')->on('pacients');
            $table->BigInteger('medic_id');
            $table->foreign('medic_id')->references('id')->on('medics');
            $table->Integer('temperature');
            $table->Integer('cardiac_frecuency');
            $table->Integer('oxygen_saturation');
            $table->string('diagnostic');
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
        Schema::dropIfExists('consultations');
    }
}
