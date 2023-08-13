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
        Schema::table('foros', function (Blueprint $table) {
            $table->dateTime('data')->nullable();
            $table->ipAddress('cpf_cnpj')->nullable();
            $table->string('natureza')->nullable();
            $table->ipAddress('area_terreno')->nullable();
            $table->ipAddress('area_diocese')->nullable();
            $table->ipAddress('fracao_ideal')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foros', function (Blueprint $table) {

            $table->dropColumn('data');
            $table->dropColumn("cpf_cnpj");
            $table->dropColumn("natureza");
            $table->dropColumn("area_terreno");
            $table->dropColumn("area_diocese");
            $table->dropColumn("fracao_ideal");
        });
    }
};
