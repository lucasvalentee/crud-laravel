<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $oProduto) {
        $this->produto = $oProduto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = \App\Produto::paginate(10);

        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias   = \App\Categoria::all(['IDCategoria',   'NomeCategoria']);
        $fornecedores = \App\Fornecedor::all(['IDFornecedor', 'NomeCompanhia']);

        return view('produtos.create', compact('fornecedores'), compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $oProduto)
    {
        $data = $request->all();
        $data['IDProduto'] = \DB::select('select max(IDProduto) + 1 as codigo from produtos')[0]->codigo;

        $oProduto->create($data);

        flash('Produto inserido(a) com sucesso.')->success();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->produto->find($id);
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $produto = $this->produto->find($id);
        $produto->update($data);

        flash('Produto atualizado(a) com sucesso.');
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        $produto->delete();

        flash('Produto excluído(a) com sucesso.');
        return redirect()->route('produtos.index');
    }
}
