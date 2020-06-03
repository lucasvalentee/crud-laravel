<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table    = 'fornecedores';
    protected $fillable = ['IDFornecedor', 'NomeCompanhia', 'NomeContato', 'TituloContato', 'Endereco',
                           'Cidade', 'Regiao', 'cep', 'Pais', 'Telefone', 'Fax', 'website'];
    public $timestamps  = false;
    protected $primaryKey = 'IDFornecedor';

    public function produto()
    {
        return $this->hasMany(Produto::class, 'IDProduto');
    }
}
