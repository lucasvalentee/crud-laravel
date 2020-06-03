@extends('layouts.app')

@section('content')
    <h1>Alterar Fornecedor</h1>
    <form action="{{route('fornecedores.update', ['fornecedore' => $fornecedor->IDFornecedor])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeCompanhia" class="form-control" value={{$fornecedor->NomeCompanhia}}>
        </div>

        <div class="form-group">
            <label for="">Contato</label>
            <input type="text" name="NomeContato" class="form-control" value={{$fornecedor->NomeContato}}>
        </div>

        <div class="form-group">
            <label for="">Endereço</label>
            <input type="text" name="Endereco" class="form-control" value={{$fornecedor->Endereco}}>
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            <input type="text" name="Cidade" class="form-control" value={{$fornecedor->Cidade}}>
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="Telefone" class="form-control" value={{$fornecedor->Telefone}}>
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
