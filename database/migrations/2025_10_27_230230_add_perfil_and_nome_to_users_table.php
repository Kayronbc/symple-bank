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
    Schema::table('users', function (Blueprint $table) {
        $table->string('nome')->after('id')->nullable();
        $table->unsignedBigInteger('perfil_id')->after('email')->default(1); // default para Cliente
        $table->foreign('perfil_id')->references('id')->on('perfils')->onDelete('restrict');
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['perfil_id']);
        $table->dropColumn('perfil_id');
        $table->dropColumn('nome');
    });
    }
};
