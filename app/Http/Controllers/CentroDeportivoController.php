<?php

namespace App\Http\Controllers;

use App\Models\CentroDeportivo;
use App\Models\Fadn;
use App\Models\Institucion;
use App\Models\Municipio;
use Illuminate\Http\Request;

/**
 * Class CentroDeportivoController
 * @package App\Http\Controllers
 */
class CentroDeportivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centroDeportivos = CentroDeportivo::paginate();

        return view('centro-deportivo.index', compact('centroDeportivos'))
            ->with('i', (request()->input('page', 1) - 1) * $centroDeportivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centroDeportivo = new CentroDeportivo();
        $fadns = Fadn::pluck('nombreFADN','id');
        $instituciones = Institucion::pluck('tipoInstitucion','id');
        $municipios = Municipio::pluck('municipio','id');
        return view('centro-deportivo.create', compact('centroDeportivo','fadns','instituciones','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CentroDeportivo::$rules);

        $centroDeportivo = CentroDeportivo::create($request->all());

        return redirect()->route('centro-deportivos.index')
            ->with('success', 'CentroDeportivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centroDeportivo = CentroDeportivo::find($id);

        return view('centro-deportivo.show', compact('centroDeportivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centroDeportivo = CentroDeportivo::find($id);
        $fadns = Fadn::pluck('nombreFADN','id');
        $instituciones = Institucion::pluck('tipoInstitucion','id');
        $municipios = Municipio::pluck('municipio','id');
        return view('centro-deportivo.edit', compact('centroDeportivo','fadns','instituciones','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CentroDeportivo $centroDeportivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroDeportivo $centroDeportivo)
    {
        request()->validate(CentroDeportivo::$rules);

        $centroDeportivo->update($request->all());

        return redirect()->route('centro-deportivos.index')
            ->with('success', 'CentroDeportivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $centroDeportivo = CentroDeportivo::find($id)->delete();

        return redirect()->route('centro-deportivos.index')
            ->with('success', 'CentroDeportivo deleted successfully');
    }
}
