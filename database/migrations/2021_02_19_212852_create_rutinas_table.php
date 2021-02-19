<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo');
            $table->string('nombre_ej1');
            $table->text('descrpcion_ej1');
            $table->text('video_ej1');
            $table->string('nombre_ej2');
            $table->text('descrpcion_ej2');
            $table->text('video_ej2');
            $table->string('nombre_ej3');
            $table->text('descrpcion_ej3');
            $table->text('video_ej3');
            
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
        Schema::dropIfExists('rutinas');
    }
}
