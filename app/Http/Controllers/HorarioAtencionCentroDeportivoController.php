<?php

namespace App\Http\Controllers;

use App\Models\HorarioAtencionCentroDeportivo;
use Illuminate\Http\Request;

/**
 * Class HorarioAtencionCentroDeportivoController
 * @package App\Http\Controllers
 */
class HorarioAtencionCentroDeportivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioAtencionCentroDeportivos = HorarioAtencionCentroDeportivo::paginate();

        return view('horario-atencion-centro-deportivo.index', compact('horarioAtencionCentroDeportivos'))
            ->with('i', (request()->input('page', 1) - 1) * $horarioAtencionCentroDeportivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horarioAtencionCentroDeportivo = new HorarioAtencionCentroDeportivo();
        return view('horario-atencion-centro-deportivo.create', compact('horarioAtencionCentroDeportivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HorarioAtencionCentroDeportivo::$rules);

        $horarioAtencionCentroDeportivo = HorarioAtencionCentroDeportivo::create($request->all());

        return redirect()->route('horario-atencion-centro-deportivos.index')
            ->with('success', 'HorarioAtencionCentroDeportivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horarioAtencionCentroDeportivo = HorarioAtencionCentroDeportivo::find($id);

        return view('horario-atencion-centro-deportivo.show', compact('horarioAtencionCentroDeportivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarioAtencionCentroDeportivo = HorarioAtencionCentroDeportivo::find($id);

        return view('horario-atencion-centro-deportivo.edit', compact('horarioAtencionCentroDeportivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HorarioAtencionCentroDeportivo $horarioAtencionCentroDeportivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HorarioAtencionCentroDeportivo $horarioAtencionCentroDeportivo)
    {
        request()->validate(HorarioAtencionCentroDeportivo::$rules);

        $horarioAtencionCentroDeportivo->update($request->all());

        return redirect()->route('horario-atencion-centro-deportivos.index')
            ->with('success', 'HorarioAtencionCentroDeportivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horarioAtencionCentroDeportivo = HorarioAtencionCentroDeportivo::find($id)->delete();

        return redirect()->route('horario-atencion-centro-deportivos.index')
            ->with('success', 'HorarioAtencionCentroDeportivo deleted successfully');
    }
}
