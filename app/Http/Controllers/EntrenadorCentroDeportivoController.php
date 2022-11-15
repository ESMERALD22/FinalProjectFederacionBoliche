<?php

namespace App\Http\Controllers;

use App\Models\EntrenadorCentroDeportivo;
use Illuminate\Http\Request;

/**
 * Class EntrenadorCentroDeportivoController
 * @package App\Http\Controllers
 */
class EntrenadorCentroDeportivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadorCentroDeportivos = EntrenadorCentroDeportivo::paginate();

        return view('entrenador-centro-deportivo.index', compact('entrenadorCentroDeportivos'))
            ->with('i', (request()->input('page', 1) - 1) * $entrenadorCentroDeportivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadorCentroDeportivo = new EntrenadorCentroDeportivo();
        return view('entrenador-centro-deportivo.create', compact('entrenadorCentroDeportivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EntrenadorCentroDeportivo::$rules);

        $entrenadorCentroDeportivo = EntrenadorCentroDeportivo::create($request->all());

        return redirect()->route('entrenador-centro-deportivos.index')
            ->with('success', 'EntrenadorCentroDeportivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrenadorCentroDeportivo = EntrenadorCentroDeportivo::find($id);

        return view('entrenador-centro-deportivo.show', compact('entrenadorCentroDeportivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrenadorCentroDeportivo = EntrenadorCentroDeportivo::find($id);

        return view('entrenador-centro-deportivo.edit', compact('entrenadorCentroDeportivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EntrenadorCentroDeportivo $entrenadorCentroDeportivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntrenadorCentroDeportivo $entrenadorCentroDeportivo)
    {
        request()->validate(EntrenadorCentroDeportivo::$rules);

        $entrenadorCentroDeportivo->update($request->all());

        return redirect()->route('entrenador-centro-deportivos.index')
            ->with('success', 'EntrenadorCentroDeportivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrenadorCentroDeportivo = EntrenadorCentroDeportivo::find($id)->delete();

        return redirect()->route('entrenador-centro-deportivos.index')
            ->with('success', 'EntrenadorCentroDeportivo deleted successfully');
    }
}
