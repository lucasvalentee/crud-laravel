@extends('layouts.app')

@section('content')
<a href="{{route('categorias.create')}}" class="btn btn-lg btn-success">Criar categoria</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição   </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->IDCategoria}}</td>
                <td>{{$categoria->NomeCategoria}}</td>
                <td>{{$categoria->Descricao}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('categorias.edit', ['categoria' => $categoria->IDCategoria])}}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{route('categorias.destroy', ['categoria' => $categoria->IDCategoria])}}" method="post">
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
{{$categorias->links()}}
@endsection
