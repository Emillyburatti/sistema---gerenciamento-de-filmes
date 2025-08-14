@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Filme</h1>
    <form action="{{ route('admin.movies.update', $filme) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $filme->nome }}" required>
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse</label>
            <textarea class="form-control" name="sinopse" required>{{ $filme->sinopse }}</textarea>
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" class="form-control" name="ano" value="{{ $filme->ano }}" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $filme->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="imagem_capa">Imagem da Capa (URL)</label>
            <input type="url" class="form-control" name="imagem_capa" value="{{ $filme->imagem_capa }}" required>
        </div>
        <div class="form-group">
            <label for="link_trailer">Link do Trailer (URL)</label>
            <input type="url" class="form-control" name="link_trailer" value="{{ $filme->link_trailer }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection