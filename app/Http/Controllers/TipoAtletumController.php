<?php

namespace App\Http\Controllers;

use App\Models\TipoAtletum;
use Illuminate\Http\Request;

/**
 * Class TipoAtletumController
 * @package App\Http\Controllers
 */
class TipoAtletumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAtleta = TipoAtletum::paginate();

        return view('tipo-atletum.index', compact('tipoAtleta'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoAtleta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoAtletum = new TipoAtletum();
        return view('tipo-atletum.create', compact('tipoAtletum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoAtletum::$rules);

        $tipoAtletum = TipoAtletum::create($request->all());

        return redirect()->route('tipoAtleta.index')
            ->with('success', 'Tipo atleta creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoAtletum = TipoAtletum::find($id);

        return view('tipo-atletum.show', compact('tipoAtletum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoAtletum = TipoAtletum::find($id);

        return view('tipo-atletum.edit', compact('tipoAtletum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoAtletum $tipoAtletum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAtletum $tipoAtletum)
    {
        request()->validate(TipoAtletum::$rules);

        $tipoAtletum->update($request->all());

        return redirect()->route('tipoAtleta.index')
            ->with('success', 'Tipo atleta actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoAtletum = TipoAtletum::find($id)->delete();

        return redirect()->route('tipoAtleta.index')
            ->with('success', 'Tipo atleta eliminado');
    }
}
