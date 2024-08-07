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
        Schema::create('tbllivros', function (Blueprint $table) {
            $table->id("codigo");//id ja deixa como auto increment, primary key e int
            $table->string('nomeLivro', 30);
            $table->string('generoLivro', 10);
            $table->date("anoLivro");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbllivros');
        $table->id("codigo");//id ja deixa como auto increment, primary key e int
        $table->string("nomeLivro");
        $table->string("generoLivro");
        $table->date("anoLivro");
        $table->timestamps();
    }
};
