@extends('layouts.app')

@section('content')
<a href="{{route('fornecedores.create')}}" class="btn btn-lg btn-success">Criar Fornecedor</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Contato</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{$fornecedor->IDFornecedor}}</td>
                <td>{{$fornecedor->NomeCompanhia}}</td>
                <td>{{$fornecedor->NomeContato}}</td>
                <td>{{$fornecedor->Endereco}}</td>
                <td>{{$fornecedor->Cidade}}</td>
                <td>{{$fornecedor->Telefone}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('fornecedores.edit', ['fornecedore' => $fornecedor->IDFornecedor])}}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{route('fornecedores.destroy', ['fornecedore' => $fornecedor->IDFornecedor])}}" method="post">
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
{{$fornecedores->links()}}
@endsection
