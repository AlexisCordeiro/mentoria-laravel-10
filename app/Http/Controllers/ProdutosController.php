<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produto;

    public function __construct(Produtos $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {

        $pesquisar = $request->pesquisar;

        $findProduto = Produtos::all();
        $findProduto = $this->produto->getProdutoPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request)
    {
    }
}
