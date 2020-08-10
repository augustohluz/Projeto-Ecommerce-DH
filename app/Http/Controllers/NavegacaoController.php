<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use App\Carrinho;

class NavegacaoController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();

        if ($produtos) {
            return view('index')->with([
                'produtos' => $produtos

            ]);
        }
    }

    public function listarBicicletas()
    {
        $listaBicicleta = DB::table('products')->where('categoria', 'bicicleta')->get();

        if ($listaBicicleta) {
            return view('bicicletas')->with('listaBicicleta', $listaBicicleta);
        }
    }

    public function listarPatinetes()
    {
        $listaPatinete = DB::table('products')->where('categoria', 'patinete')->get();

        if ($listaPatinete) {
            return view('patinetes')->with('listaPatinete', $listaPatinete);
        }
    }

    public function listarMonociclos()
    {
        $listaMonociclo = DB::table('products')->where('categoria', 'monociclo')->get();

        if ($listaMonociclo) {
            return view('monociclos')->with('listaMonociclo', $listaMonociclo);
        }
    }

    public function listarMotos()
    {
        $listaMoto = DB::table('products')->where('categoria', 'moto')->get();

        if ($listaMoto) {
            return view('motos')->with('listaMoto', $listaMoto);
        }
    }

    public function listarDetalhe($nome)
    {

        $produto = Produtos::where('nome', '=', $nome)->first();

        if ($produto) {
            return view('detalhes')->with([
                'produto' => $produto
            ]);
        }
    }

    

    public function criarCarrinho(Request $request)
    {
        // instanciando objeto card
        $produto = new Carrinho;

        // atribuindo valores recebidos no corpo da requisicao
        // as respectivas colunas
        $produto->nome = $request->nome;
        $produto->modelo = $request->modelo;
        $produto->preco = $request->preco;

        // efetuando o insert do registro na base de dados
        $produto->save();

        // verificando se obteve registros para listar
        if ($produto) {
            // retornando resposta de que card criado
            return view('detalhesCarrinho')->with('success', 'Produto adicionado ao carrinho');
        }
    }


    public function adicionarCarrinho($nome) {
        $produto = Produtos::where('nome', '=', $nome)->first();

        if ($produto) {
            return view('detalhesCarrinho')->with([
                'produto' => $produto
            ]);
        }
    }

    public function testeAddCarrinho(request $nome){
        //dd($nome->all());
        $produto = Produtos::where('nome', '=', $nome)->get();
        
        $carrinho = new Carrinho;
        //dd($produto);

        $carrinho->nome = $nome->nome;
        $carrinho->modelo = $nome->modelo;
        $carrinho->preco = $nome->preco;

        $carrinho->save();

        if ($produto) {
            // retornando resposta de que card criado
            return view('detalhes');
        }
    }
}
