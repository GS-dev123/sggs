<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('geracao');
            $table->string('modelo');
            $table->string('polegadas');
            $table->string('cap_ram');
            $table->string('tipo_ram');
            $table->string('cap_hdd');
            $table->string('tipo_hdd');
            $table->string('grafica');
            $table->string('cap_grafica');
            $table->string('duracao_bateria');
            $table->string('volts_carregador');
            $table->string('problema');
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
        Schema::dropIfExists('lap');
    }
}
