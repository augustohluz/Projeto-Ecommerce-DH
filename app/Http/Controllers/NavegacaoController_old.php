<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Details;

class CarrinhoController extends Controller
{
    public function listarDetalhe($slug){
        
        $detalheProduto = Details::where('slug','=', $slug)->first();
        
        if ($detalheProduto) {
            
            return view('detalhes')->with([
                'detalheProduto', $detalheProduto
            ]);
        }
    }
}
