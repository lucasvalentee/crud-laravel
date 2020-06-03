<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['IDProduto', 'NomeProduto', 'QuantidadePorUnidade', 'PrecoUnitario', 'UnidadesEmEstoque', 'UnidadesEmOrdem', 'NivelDeReposicao', 'Descontinuado'];
    public $timestamps  = false;
    protected $primaryKey = 'IDProduto';

    public function fornecedor()
    {
        return $this->hasOne(Fornecedor::class, 'IDFornecedor');
    }

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'IDCategoria');
    }
}
