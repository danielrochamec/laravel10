<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class ProdutosController extends Controller
{
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('page.produtos.paginacao', compact('findProduto'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = Produto::find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }
    public function cadastrarProduto(Request $request){
        if($request->method()== "POST"){ //cria dados
            dd($request);
        }
        return view('page.produtos.create');
    }
}
