<?php

namespace App\Http\Controllers;

use App\Models\TipoAsistencium;
use Illuminate\Http\Request;

/**
 * Class TipoAsistenciumController
 * @package App\Http\Controllers
 */
class TipoAsistenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAsistencia = TipoAsistencium::paginate();

        return view('tipo-asistencium.index', compact('tipoAsistencia'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoAsistencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoAsistencium = new TipoAsistencium();
        return view('tipo-asistencium.create', compact('tipoAsistencium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoAsistencium::$rules);

        $tipoAsistencium = TipoAsistencium::create($request->all());

        return redirect()->route('tipo-asistencia.index')
            ->with('success', 'TipoAsistencium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoAsistencium = TipoAsistencium::find($id);

        return view('tipo-asistencium.show', compact('tipoAsistencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoAsistencium = TipoAsistencium::find($id);

        return view('tipo-asistencium.edit', compact('tipoAsistencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoAsistencium $tipoAsistencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAsistencium $tipoAsistencium)
    {
        request()->validate(TipoAsistencium::$rules);

        $tipoAsistencium->update($request->all());

        return redirect()->route('tipo-asistencia.index')
            ->with('success', 'TipoAsistencium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoAsistencium = TipoAsistencium::find($id)->delete();

        return redirect()->route('tipo-asistencia.index')
            ->with('success', 'TipoAsistencium deleted successfully');
    }
}
