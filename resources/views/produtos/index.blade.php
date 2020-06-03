@extends('layouts.app')

@section('content')
<a href="{{route('produtos.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Quantidade por Unidade</th>
            <th>Preço</th>
            <th>Unidades em Estoque</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->IDProduto}}</td>
                <td>{{$produto->NomeProduto}}</td>
                <td>{{$produto->QuantidadePorUnidade}}</td>
                <td>{{number_format($produto->PrecoUnitario, 2, ',', '.')}}</td>
                <td>{{$produto->UnidadesEmEstoque}}</td>
                <td>{{$produto->IDCategoria}}</td>
                <td>{{$produto->IDFornecedor}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('produtos.edit', ['produto' => $produto->IDProduto])}}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{route('produtos.destroy', ['produto' => $produto->IDProduto])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$produtos->links()}}
@endsection
