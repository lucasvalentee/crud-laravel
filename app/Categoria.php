<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [];

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }
}
