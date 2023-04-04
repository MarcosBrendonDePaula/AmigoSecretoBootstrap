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
        Schema::create('mensagems', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('chat_id');
            $table->foreign('chat_id')->references('id')->on('chats');
            $table->text('texto');
            $table->string('hash_personagem',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
