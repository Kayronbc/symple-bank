<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('solicitacoes', function (Blueprint $table) {
        $table->id();
        $table->string('protocolo')->unique(); // protocolo gerado ao criar a solicitação
        $table->unsignedBigInteger('usuario_solicitante_id'); // user que abriu
        $table->unsignedBigInteger('banco_id')->nullable();
        $table->enum('tipo', ['criacao','reset','reinicio_2fa','outro']);
        $table->text('descricao')->nullable();
        $table->unsignedBigInteger('status_id')->default(1); // FK para status
        $table->unsignedBigInteger('responsavel_id')->nullable(); // atendente atribuído
        $table->timestamp('data_abertura')->useCurrent();
        $table->timestamp('data_conclusao')->nullable();
        $table->timestamps();

        // índices e chaves
        $table->foreign('usuario_solicitante_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('banco_id')->references('id')->on('bancos')->onDelete('set null');
        $table->foreign('status_id')->references('id')->on('status')->onDelete('restrict');
        $table->foreign('responsavel_id')->references('id')->on('users')->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    Schema::dropIfExists('solicitacoes');
    }
};
