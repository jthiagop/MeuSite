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
        Schema::create('foros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("descricao")->nullable();
            $table->string("patrimonio_local")->nullable();
            $table->ipAddress("cep")->nullable();
            $table->string("rua")->nullable();
            $table->integer("numero")->nullable();
            $table->text("complemento")->nullable();
            $table->string("bairro")->nullable();
            $table->string("cidade")->nullable();
            $table->string("pagamento")->nullable();
            $table->string("recebido")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foros');
    }
};
