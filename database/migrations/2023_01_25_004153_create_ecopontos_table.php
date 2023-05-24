<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecopontos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 65);
            $table->string('rua', 65);
            $table->string('bairro', 65);
            $table->string('cidade', 65);
            $table->string('estado', 65);
            $table->string('cep', 20);
            $table->string('funcionamento', 45);
            $table->string('telefone', 25);
            $table->decimal('longitude', 10, 8);
            $table->decimal('latitude', 11, 8);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecopontos');
    }
};
