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
        Schema::create('foro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("descricao");
            $table->string("patrimonio_local");
            $table->integer("cep");
            $table->string("rua");
            $table->integer("numero");
            $table->text("complemento");
            $table->string("bairro");
            $table->string("cidade");
            $table->string("pagamento");
            $table->string("recebido");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foro');
    }
};
