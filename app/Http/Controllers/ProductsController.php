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

    public function add()
    {
        return view('cadastroProduto');
    }

    public function create(Request $request)
    {
        $produto = new Produtos;

        $produto->nome = $request->nome;
        $produto->modelo = $request->modelo;
        $produto->velocidade = $request->velocidade;
        $produto->preco = $request->preco;
        $produto->categoria = $request->categoria;

        $produto->save();

        if ($produto) {
            return view('cadastroProduto')->with('success', 'Cartão inserido com sucesso');
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

    public function edit($id)
    {
        $produtos = Produtos::find($id);

        if ($produtos) {
            return view('editarProdutos')->with('produtos', $produtos);
        }
    }

    public function update(Request $request, $id)
    {

        $produtos = Produtos::find($id);

        $produtos->nome = $request->nome;
        $produtos->modelo = $request->modelo;
        $produtos->velocidade = $request->velocidade;
        $produtos->preco = $request->preco;
        $produtos->categoria = $request->categoria;

        $produtos->update();

        if ($produtos) {
            return view('editarProdutos')->with([
                'produtos' => $produtos,
                'success' => 'Produto atualizado com sucesso'
            ]);
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $produtos = Produtos::where('nome', 'like', '%' . $search . '%')
            ->orWhere('categoria', 'like', '%' . $search . '%')
            ->paginate(50);
        
        return view('produtos')->with([
            'search' => $search,
            'produtos' => $produtos
        ]);
    }
}
