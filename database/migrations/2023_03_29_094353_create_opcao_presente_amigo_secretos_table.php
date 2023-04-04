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
        Schema::create('opcao_presente_amigo_secretos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            
            $table->unsignedBigInteger('amigosecreto_id');
            $table->foreign('amigosecreto_id')->references('id')->on('amigo_secretos');
            
            $table->unsignedBigInteger('opcao_presente_id');
            $table->foreign('opcao_presente_id')->references('id')->on('opcao_presentes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcao_presente_amigo_secretos');
    }
};
