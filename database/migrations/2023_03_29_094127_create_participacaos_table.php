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
        Schema::create('participacaos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('amigosecreto_id');
            $table->foreign('amigosecreto_id')->references('id')->on('amigo_secretos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participacaos');
    }
};
