@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $filme->nome }}</h1>
    <p><strong>Sinopse:</strong> {{ $filme->sinopse }}</p>
    <p><strong>Ano:</strong> {{ $filme->ano }}</p>
    <p><strong>Categoria:</strong> {{ $filme->category->name }}</p>
    <img src="{{ $filme->imagem_capa }}" alt="Capa do Filme" style="width:200px;">
    <p><a href="{{ $filme->link_trailer }}" target="_blank">Assistir Trailer</a></p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection