@extends('layouts.app')

@section('content')
    <h1>Incluir Fornecedor</h1>
    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf

        <div class="form-group" style="display:none">
            <label for="">Código</label>
            <input type="hidden" name="IDFornecedor" value={{$codigo[0]->codigo}} class="form-control">
        </div>

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeCompanhia" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Contato</label>
            <input type="text" name="NomeContato" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Endereço</label>
            <input type="text" name="Endereco" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            <input type="text" name="Cidade" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="Telefone" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
