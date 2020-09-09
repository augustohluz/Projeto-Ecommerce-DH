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
        $image = $request->file('image');

        if(empty($image)){
            $pathRelative = null;
        } else {
            $image->storePublicly('uploads');

            $absolutePath = public_path()."/storage/uploads";

            $name = $image->getClientOriginalName();

            $image->move($absolutePath, $name);

            $pathRelative = "storage/uploads/$name";
        }


        $produto = new Produtos;

        /*$produto->image = $pathRelative;*/
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
