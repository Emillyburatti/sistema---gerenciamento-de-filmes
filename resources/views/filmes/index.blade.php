@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Filmes</h1>
    <a href="{{ route('filmes.create') }}" class="btn btn-primary">Adicionar Filme</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ano</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filmes as $filme)
            <tr>
                <td>{{ $filme->nome }}</td>
                <td>{{ $filme->ano }}</td>
                <td>{{ $filme->categoria }}</td>
                <td>
                    <a href="{{ route('filmes.edit', $filme) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('filmes.destroy', $filme) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection