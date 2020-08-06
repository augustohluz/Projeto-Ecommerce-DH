<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;

class CarrinhoController extends Controller
{
    public function index()
    {
        // obtendo todos registros da tabela cards
        // $cards = Card::all();

        // obtendo todos registros e aplicando paginacao
        // para exibir apenas 10 registros por pagina
        $listaCarrinho = Carrinho::paginate(10);

        // obtendo apenas registros com id menor que 50
        // sempre que for utilizar metodos diferentes do all() e paginate()
        // lembre-se de utilizar o metodo get() no final da sua query
        // $cards = Card::where('id', '<=', '50')->get();

        // verificando se obteve registros para listar
        if ($listaCarrinho) {
            // retornando resposta JSON com todos cards encontrados
            return view('carrinhoz.index')->with('listaCarrinho', $listaCarrinho);
        }
    }

    public function delete($id)
    {
        // encontrando registro pelo id atraves do metodo find
        $listaCarrinho = Carrinho::find($id);

        // efetuando sof delete para nao excluri registro efetivamente
        // e sim popular a coluna deleted_at com a data atual passando
        // apenas a impressao para o usuario que aquele registro deixou de existir
        // mas ainda esta em nossa base de dados
        if ($listaCarrinho->delete()) {
            // apos excluir o registro precisamos retornar para a listagem de cartoes em index.blade.php
            // portanto iremos utilizar o nome que atribuimos a nossa rota e consequentemente a view
            // para retornar com sucesso e contendo o parametro success na URL
            return redirect()->route('carrinho', [
                'success' => true
            ]);
        }
    }
}
