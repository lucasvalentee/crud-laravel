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
            $table->id('IDFornecedor');
            $table->string('NomeCompanhia', 40);
            $table->string('NomeContato'  , 30);
            $table->string('TituloContato', 30);
            $table->string('Endereco');
            $table->string('Cidade');
            $table->string('Regiao');
            $table->string('cep'          , 10);
            $table->string('Pais');
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
