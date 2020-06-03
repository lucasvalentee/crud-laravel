@extends('layouts.app')

@section('content')
    <h1>Alterar Categoria</h1>
    <form action="{{route('categorias.update', ['categoria' => $categoria->IDCategoria])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeCategoria" class="form-control" value="{{$categoria->NomeCategoria}}">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="Descricao" class="form-control" value="{{$categoria->Descricao}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
