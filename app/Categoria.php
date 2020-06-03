<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['IDCategoria', 'NomeCategoria', 'Descricao', 'Figura'];
    protected $primaryKey = 'IDCategoria';
    public $timestamps = false;

    public function produto()
    {
        return $this->hasMany(Produto::class, 'IDProduto');
    }
}
