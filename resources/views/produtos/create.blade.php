@extends('layouts.app')

@section('content')
    <h1>Incluir Produto</h1>
    <form action="{{route('produtos.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeProduto" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Quantidade por Unidade</label>
            <input type="text" name="QuantidadePorUnidade" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="PrecoUnitario" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Unidades Em Estoque</label>
            <input type="text" name="UnidadesEmEstoque" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Unidades Em Ordem</label>
            <input type="text" name="UnidadesEmOrdem" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Nivel de Reposição</label>
            <input type="text" name="NivelDeReposicao" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Fornecedores</label>
            <select name="fornecedor" class="form-control">
                @foreach($fornecedores as $fornecedor)
                    <option value="{{$fornecedor->IDFornecedor}}">{{$fornecedor->NomeCompanhia}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Categorias</label>
            <select name="categoria" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->IDCategoria}}">{{$categoria->NomeCategoria}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
