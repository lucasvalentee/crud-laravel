<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('NomeCompanhia', 40);
            $table->string('NomeContato'  , 30);
            $table->string('TituloContato', 30);
            $table->string('Endereco'     , 60);
            $table->string('Cidade'       , 15);
            $table->string('Regiao'       , 15);
            $table->string('cep'          , 10);
            $table->string('Pais'         , 15);
            $table->string('Telefone'     , 24);
            $table->string('Fax'          , 24);
            $table->text('website');
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
        Schema::dropIfExists('fornecedores');
    }
}
