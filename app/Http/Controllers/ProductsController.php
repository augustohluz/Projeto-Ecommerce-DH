<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Details;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $produtos = DB::table('products')->paginate(10);
        
        if ($produtos) {
            return view('produtos')->with([
                'produtos' => $produtos
            ]);
        }
    }


}
