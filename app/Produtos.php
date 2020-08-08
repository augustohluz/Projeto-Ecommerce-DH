<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produtos extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'nome', 
        'modelo',
        'velocidade',
        'preco',
        'categoria'
    ];

    public function setNomeAttribute($value){
        $this->attributes['nome'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}