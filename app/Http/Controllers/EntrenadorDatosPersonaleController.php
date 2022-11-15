<?php

namespace App\Http\Controllers;

use App\Models\EntrenadorDatosPersonale;
use App\Models\Municipio;
use Illuminate\Http\Request;

/**
 * Class EntrenadorDatosPersonaleController
 * @package App\Http\Controllers
 */
class EntrenadorDatosPersonaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadorDatosPersonales = EntrenadorDatosPersonale::paginate();

        return view('entrenador-datos-personale.index', compact('entrenadorDatosPersonales'))
            ->with('i', (request()->input('page', 1) - 1) * $entrenadorDatosPersonales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadorDatosPersonale = new EntrenadorDatosPersonale();
        $municipios = Municipio::pluck('municipio','id');
        return view('entrenador-datos-personale.create', compact('entrenadorDatosPersonale','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EntrenadorDatosPersonale::$rules);

        $entrenadorDatosPersonale = EntrenadorDatosPersonale::create($request->all());

        return redirect()->route('entrenador-datos-personales.index')
            ->with('success', 'EntrenadorDatosPersonale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrenadorDatosPersonale = EntrenadorDatosPersonale::find($id);

        return view('entrenador-datos-personale.show', compact('entrenadorDatosPersonale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrenadorDatosPersonale = EntrenadorDatosPersonale::find($id);
        $municipios = Municipio::pluck('municipio','id');
        return view('entrenador-datos-personale.edit', compact('entrenadorDatosPersonale','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EntrenadorDatosPersonale $entrenadorDatosPersonale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntrenadorDatosPersonale $entrenadorDatosPersonale)
    {
        request()->validate(EntrenadorDatosPersonale::$rules);

        $entrenadorDatosPersonale->update($request->all());

        return redirect()->route('entrenador-datos-personales.index')
            ->with('success', 'EntrenadorDatosPersonale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrenadorDatosPersonale = EntrenadorDatosPersonale::find($id)->delete();

        return redirect()->route('entrenador-datos-personales.index')
            ->with('success', 'EntrenadorDatosPersonale deleted successfully');
    }
}
