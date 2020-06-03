@extends('layouts.app')

@section('content')
    <h1>Incluir Categoria</h1>
    <form action="{{route('categorias.store')}}" method="post">
        @csrf

        <div class="form-group" style="display:none">
            <label for="">Código</label>
            <input type="text" name="IDCategoria" value={{$codigo[0]->codigo}} class="form-control">
        </div>

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeCategoria" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="Descricao" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
