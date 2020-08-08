<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use Illuminate\Support\Facades\DB;

class NavegacaoController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
              
        if ($produtos) {
            return view('index')->with([
                'produtos' => $produtos
        
            ]);
        }
    }

    public function listarBicicletas()
    {
        $listaBicicleta = DB::table('products')->where('categoria','bicicleta')->get();
        
        if ($listaBicicleta) {
            return view('bicicletas')->with('listaBicicleta', $listaBicicleta);
        }
    }

    public function listarPatinetes()
    {
        $listaPatinete = DB::table('products')->where('categoria','patinete')->get();

        if ($listaPatinete) {
            return view('patinetes')->with('listaPatinete', $listaPatinete);
        }
    }

    public function listarMonociclos()
    {
        $listaMonociclo = DB::table('products')->where('categoria','monociclo')->get();

        if ($listaMonociclo) {
            return view('monociclos')->with('listaMonociclo', $listaMonociclo);
        }
    }

    public function listarMotos()
    {
        $listaMoto = DB::table('products')->where('categoria','moto')->get();

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

    
}
