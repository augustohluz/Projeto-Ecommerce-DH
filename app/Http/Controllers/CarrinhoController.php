<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;

class CarrinhoController extends Controller
{
    public function index()
    {
        $listaCarrinho = Carrinho::paginate(10);

        if ($listaCarrinho) {
            return view('carrinhoz.index')->with('listaCarrinho', $listaCarrinho);
        }
    }

    public function delete($id)
    {
        $listaCarrinho = Carrinho::find($id);

        if ($listaCarrinho->delete()) {
            return redirect()->route('carrinho', [
                'success' => true
            ]);
        }
    }
}
