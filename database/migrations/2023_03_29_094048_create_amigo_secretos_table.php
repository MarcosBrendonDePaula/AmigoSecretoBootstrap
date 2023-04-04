<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('amigo_secretos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->unsignedBigInteger('dono_id');
            $table->foreign('dono_id')->references('id')->on('users');
            
            $table->float('valor_minimo')->default(0)->nullable();
            $table->float('valor_maximo')->default(0)->nullable();
            $table->dateTime('data_inicio');
            $table->integer('maximo_participantes')->default(-1)->nullable();
            $table->boolean('sorteado')->default(false);
            $table->boolean('encerrado')->default(false);
            $table->string('nome');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amigo_secretos');
    }
};
