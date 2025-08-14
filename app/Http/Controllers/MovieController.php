<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Category; 
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
{
    $filmes = Filme::all();
    return view('admin.movies.index', compact('filmes'));
}

public function create()
{
    $categories = Category::all();
    return view('admin.movies.create', compact('categories'));
}

public function store(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'sinopse' => 'required',
        'ano' => 'required|integer',
        'imagem_capa' => 'required|url',
        'link_trailer' => 'required|url',
        'category_id' => 'required|exists:categories,id',
    ]);

    Filme::create($request->all());
    return redirect()->route('admin.movies.index')->with('success', 'Filme adicionado com sucesso.');
}

public function edit(Filme $filme)
{
    $categories = Category::all();
    return view('admin.movies.edit', compact('filme', 'categories'));
}

public function update(Request $request, Filme $filme)
{
    $request->validate([
        'nome' => 'required',
        'sinopse' => 'required',
        'ano' => 'required|integer',
        'imagem_capa' => 'required|url',
        'link_trailer' => 'required|url',
        'category_id' => 'required|exists:categories,id',
    ]);

    $filme->update($request->all());
    return redirect()->route('admin.movies.index')->with('success', 'Filme atualizado com sucesso.');
}

public function destroy(Filme $filme)
{
    $filme->delete();
    return redirect()->route('admin.movies.index')->with('success', 'Filme excluído com sucesso.');
}
}