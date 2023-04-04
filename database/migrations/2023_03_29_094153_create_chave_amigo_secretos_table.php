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
        Schema::create('chave_amigo_secretos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            
            $table->unsignedBigInteger('amigosecreto_id');
            $table->foreign('amigosecreto_id')->references('id')->on('amigo_secretos');
            
            $table->unsignedBigInteger('chave_id');
            $table->foreign('chave_id')->references('id')->on('chaves');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chave_amigo_secretos');
    }
};
