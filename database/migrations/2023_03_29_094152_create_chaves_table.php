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
        Schema::create('chaves', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
           
            $table->unsignedBigInteger('tirou_user_id');
            $table->foreign('tirou_user_id')->references('id')->on('users');
            
            $table->boolean('visualizado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chaves');
    }
};
