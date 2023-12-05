<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoColaboradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_colaborador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_id')->nullable();
            $table->foreignId('colaborador_id')->nullable();
            $table->integer('nota_desempenho')->nullable();
            
            $table->timestamps();
            $tabke->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo_colaborador');
    }
}
