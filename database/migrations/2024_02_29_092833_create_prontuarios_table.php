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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('codigo');
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')->references('id')->on('agendas')->onDelete('cascade')->onUpadate('cascade');
            $table->unsignedBigInteger('convenio_id');
            $table->foreign('convenio_id')->references('id')->on('convenios')->onDelete('cascade')->onUpadate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
    }
};
