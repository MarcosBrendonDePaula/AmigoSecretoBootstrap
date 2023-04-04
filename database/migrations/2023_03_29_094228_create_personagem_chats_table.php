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
        Schema::create('personagen_chats', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
           
            $table->unsignedBigInteger('chat_id');
            $table->foreign('chat_id')->references('id')->on('chats');
            
            $table->unsignedBigInteger('personagen_id');
            $table->foreign('personagen_id')->references('id')->on('personagens');
            
            $table->boolean('disponivel')->default(false);
            $table->string('hash',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagem_chats');
    }
};
