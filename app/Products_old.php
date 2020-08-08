<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'nome', 'modelo'
    ];
}