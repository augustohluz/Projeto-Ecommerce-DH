<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $produtos = DB::table('products')->paginate(50);
        
        if ($produtos) {
            return view('produtos')->with([
                'produtos' => $produtos
            ]);
        }
    }

    public function delete($id)
    {
        $produtos = Produtos::find($id);

        if ($produtos->delete()) {
            return redirect()->route('produtos', [
                'success' => true
            ]);
        }
    }
    
    public function edit($id){
        $produtos = Produtos::find($id);

        if($produtos){
            return view('editarProdutos')->with('produtos', $produtos);
        }
    }

    public function update(Request $request, $id){

        $produtos = Produtos::find($id);

        $produtos->nome = $request->nome;
        $produtos->modelo = $request->modelo;
        $produtos->velocidade = $request->velocidade;
        $produtos->preco = $request->preco;
        $produtos->categoria = $request->categoria;

        $produtos->update();

        if($produtos){
            return view('editarProdutos')->with([
                'produtos' => $produtos,
                'success' => 'Produto atualizado com sucesso'                
            ]);
        }
    }

}
