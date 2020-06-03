@extends('layouts.app')

@section('content')
    <h1>Alterar Produto</h1>
    <form action="{{route('produtos.update', ['produto' => $produto->IDProduto])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeProduto" class="form-control" value="{{$produto->NomeProduto}}">
        </div>

        <div class="form-group">
            <label for="">Quantidade por Unidade</label>
            <input type="text" name="QuantidadePorUnidade" class="form-control" value="{{$produto->QuantidadePorUnidade}}">
        </div>

        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="PrecoUnitario" class="form-control" value="{{$produto->PrecoUnitario}}">
        </div>

        <div class="form-group">
            <label for="">Unidades Em Estoque</label>
            <input type="text" name="UnidadesEmEstoque" class="form-control" value="{{$produto->UnidadesEmEstoque}}">
        </div>

        <div class="form-group">
            <label for="">Unidades Em Ordem</label>
            <input type="text" name="UnidadesEmOrdem" class="form-control" value="{{$produto->UnidadesEmOrdem}}">
        </div>

        <div class="form-group">
            <label for="">Nivel de Reposição</label>
            <input type="text" name="NivelDeReposicao" class="form-control" value="{{$produto->NivelDeReposicao}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
