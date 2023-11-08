<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index (){
        $findProduto = Produto::all();
        return view('page.produtos.paginacao', compact('findProduto'));
    }
}
