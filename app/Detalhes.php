<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Details extends Model
{
    protected $table = 'products';
    protected $fillable = ['nome', 'modelo'];

    public function setAttributeNome($value){
        $this->attributes['nome'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}