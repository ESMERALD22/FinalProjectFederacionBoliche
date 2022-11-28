<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;

/**
 * Class AnuncioController
 * @package App\Http\Controllers
 */
class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = Anuncio::paginate();

        return view('anuncio.index', compact('anuncios'))
            ->with('i', (request()->input('page', 1) - 1) * $anuncios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anuncio = new Anuncio();
        return view('anuncio.create', compact('anuncio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Anuncio::$rules);

        $anuncio = Anuncio::create($request->all());

        return redirect()->route('anuncio.index')
            ->with('success', 'Anuncio creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anuncio = Anuncio::find($id);

        return view('anuncio.show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncio = Anuncio::find($id);

        return view('anuncio.edit', compact('anuncio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        request()->validate(Anuncio::$rules);

        $anuncio->update($request->all());

        return redirect()->route('anuncio.index')
            ->with('success', 'Anuncio actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $anuncio = Anuncio::find($id)->delete();

        return redirect()->route('anuncio.index')
            ->with('success', 'Anuncio eliminado');
    }
}
