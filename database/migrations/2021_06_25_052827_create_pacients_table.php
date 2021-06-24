<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('names');
            $table->string('adress');
            $table->tinyInteger('age');
            $table->tinyInteger('height');
            $table->tinyInteger('weight');
            $table->string('padecimientos');
            $table->string('ci');
            $table->boolean('status');
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
        Schema::dropIfExists('pacients');
    }
}
