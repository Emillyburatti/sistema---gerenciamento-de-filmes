@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Filme</h1>
    <form action="{{ route('admin.movies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse</label>
            <textarea class="form-control" name="sinopse" required></textarea>
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" class="form-control" name="ano" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="imagem_capa">Imagem da Capa (URL)</label>
            <input type="url" class="form-control" name="imagem_capa" required>
        </div>
        <div class="form-group">
            <label for="link_trailer">Link do Trailer (URL)</label>
            <input type="url" class="form-control" name="link_trailer" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection