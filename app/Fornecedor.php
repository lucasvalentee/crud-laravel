<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['NomeCompanhia', 'NomeContato', 'TituloContato', 'Endereco', 'Cidade', 'Regiao', 'cep', 'Pais', 'Telefone', 'Fax', 'website'];

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }
}
