<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['IDProduto', 'IDFornecedor', 'IDCategoria', 'NomeProduto', 'QuantidadePorUnidade', 'PrecoUnitario', 'UnidadesEmEstoque', 'UnidadesEmOrdem', 'NivelDeReposicao', 'Descontinaudo'];

    public function fornecedores()
    {
        return $this->hasOne(Fornecedor::class);
    }

    public function categorias()
    {
        return $this->hasOne(Categoria::class);
    }
}
