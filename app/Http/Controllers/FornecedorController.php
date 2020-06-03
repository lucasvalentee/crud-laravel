<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;
use DB;

class FornecedorController extends Controller
{
    private $fornecedor;

    public function __construct(Fornecedor $oFornecedor)
    {
        $this->fornecedor = $oFornecedor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = \App\Fornecedor::paginate(10);

        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codigo = \DB::select('select max(IDFornecedor) + 1 as codigo from fornecedores');

        return view('fornecedores.create', compact('codigo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fornecedor $oFornecedor)
    {
        $oFornecedor->create($request->all());

        flash('Fornecedor inserido(a) com sucesso.')->success();

        return redirect()->route('fornecedores.index');
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
        $fornecedor = $this->fornecedor->find($id);
        return view('fornecedores.edit', compact('fornecedor'));
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

        $fornecedor = $this->fornecedor->find($id);
        $fornecedor->update($data);

        flash('Fornecedor atualizado com sucesso.');
        return redirect()->route('fornecedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = $this->fornecedor->find($id);
        $fornecedor->delete();

        flash('Fornecedor excluído(a) com sucesso.');
        return redirect()->route('fornecedores.index');
    }
}
