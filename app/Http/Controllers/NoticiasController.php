<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{

    public function index()
    {
        $noticias = Noticia::paginate(3);
        return json_encode($noticias);
    }

    public function find($id)
    {
        $noticia = Noticia::find($id);
        return view('noticia', compact('noticia'));
        // return json_encode($noticia);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $noticia = $request->all();
        Noticia::create($noticia);
        return response()->json(['resultado' => 'Notícia criada com sucesso!'], 201);
    }

    public function show($id)
    {
        return Noticia::find($id);
    }

    public function edit($id)
    {
        //
    }

     public function update(Request $request, $id)
    {
        $noticia  = Noticia::findOrFail($id);
        $noticia->update($request->all());
        return response()->json(['noticia' => $noticia, 200]);
    }

    public function destroy($id)
    {
        Noticia::find($id)->delete();
    }
}
