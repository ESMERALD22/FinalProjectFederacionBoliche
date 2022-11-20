<?php

namespace App\Http\Controllers;

use App\Models\AtletaDatosPersonale;
use App\Models\ControlAsistencium;
use App\Models\TipoAsistencium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ControlAsistenciumController
 * @package App\Http\Controllers
 */
class ControlAsistenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controlAsistencia = ControlAsistencium::paginate();

        return view('control-asistencium.index', compact('controlAsistencia'))
            ->with('i', (request()->input('page', 1) - 1) * $controlAsistencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $valor1 = $request->input("selectC");
        //buscamos todos los atletas con esa categoria 
        $atletas = AtletaDatosPersonale::join("asignacion_atleta", "atleta_datos_personales.id", "=", "asignacion_atleta.idAtleta")
            ->join("categoria", "categoria.id", "=", "asignacion_atleta.idCategoria")
            ->where("categoria.id", "=", $valor1)
            ->get();

        $controlAsistencium = new ControlAsistencium();
        $tiposA = TipoAsistencium::all();

        return view('control-asistencium.asistencia', compact('controlAsistencium', 'atletas', 'tiposA','valor1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valor1 = $request->input("select");
        $valor2 = $request->input("fechaA");
        $valor3 = $request->input("idA");

        $controlAsistencium = ControlAsistencium::create(
            [
                'idAtleta' => $valor3,
                'fecha' => $valor2,
                'idTipoAsistencia' => $valor1
            ]
        );
        return redirect()->route('control-asistencia.create')
            ->with('success', 'ControlAsistencium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $controlAsistencium = ControlAsistencium::find($id);

        return view('control-asistencium.show', compact('controlAsistencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $controlAsistencium = ControlAsistencium::find($id);

        return view('control-asistencium.edit', compact('controlAsistencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ControlAsistencium $controlAsistencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlAsistencium $controlAsistencium)
    {
        request()->validate(ControlAsistencium::$rules);

        $controlAsistencium->update($request->all());

        return redirect()->route('control-asistencia.index')
            ->with('success', 'ControlAsistencium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $controlAsistencium = ControlAsistencium::find($id)->delete();

        return redirect()->route('control-asistencia.index')
            ->with('success', 'ControlAsistencium deleted successfully');
    }
}
