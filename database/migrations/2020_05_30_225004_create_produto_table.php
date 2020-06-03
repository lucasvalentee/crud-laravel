<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('IDProduto');
            $table->unsignedBigInteger('IDFornecedor');
            $table->unsignedBigInteger('IDCategoria');
            $table->string('NomeProduto', 40);
            $table->string('QuantidadePorUnidade', 20);
            $table->decimal('PrecoUnitario', 10, 2);
            $table->smallInteger('UnidadesEmEstoque');
            $table->smallInteger('UnidadesEmOrdem');
            $table->smallInteger('NivelDeReposicao');
            $table->boolean('Descontinuado');
            $table->timestamps();

            $table->foreign('IDFornecedor')->references('IDFornecedor')->on('fornecedores');
            $table->foreign('IDCategoria')->references('IDCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
