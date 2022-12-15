<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAtletum;
use Illuminate\Http\Request;
use App\Models\AtletaDatosPersonale;
use App\Models\Categorium;
use App\Models\Prt;
use App\Models\LineaDesarrollo;
use App\Models\CentroDeportivo;
use App\Models\Fadn;
use App\Models\EtapaDeportiva;
use App\Models\EntrenadorDatosPersonale;
use App\Models\TipoAtletum;

/**
 * Class AsignacionAtletumController
 * @package App\Http\Controllers
 */
class AsignacionAtletumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacionAtleta = AsignacionAtletum::paginate();

        return view('asignacion-atletum.index', compact('asignacionAtleta'))
            ->with('i', (request()->input('page', 1) - 1) * $asignacionAtleta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignacionAtletum = new AsignacionAtletum();
        $AtletaDatosPersonale = AtletaDatosPersonale::pluck('nombre1','id');
        $Categorium = Categorium::pluck('nombreCategoria','id');
        $PRT = prt::pluck('nombrePRT','id');
        $LD = LineaDesarrollo::pluck('tipoLineaDesarrollo','id');
        $CD = CentroDeportivo::pluck('nombreCentroDeportivo','id');
        $FADN = Fadn::pluck('nombreFADN','id');
        $ET = EtapaDeportiva::pluck('tipoEtapaDeportiva','id');
        $Entrenador = EntrenadorDatosPersonale::pluck('nombre1','id');
        $tipo = TipoAtletum::pluck('tipoAtleta','id');
        return view('asignacion-atletum.create', compact('asignacionAtletum','AtletaDatosPersonale','Categorium','PRT','LD','CD','FADN','ET','Entrenador','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AsignacionAtletum::$rules);

        $asignacionAtletum = AsignacionAtletum::create($request->all());

        return redirect()->route('asignacion-atleta.index')
            ->with('success', 'Asignacion Atleta creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacionAtletum = AsignacionAtletum::find($id);

        return view('asignacion-atletum.show', compact('asignacionAtletum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignacionAtletum = AsignacionAtletum::find($id);
        $AtletaDatosPersonale = AtletaDatosPersonale::pluck('nombre1','id');
        $Categorium = Categorium::pluck('nombreCategoria','id');
        $PRT = prt::pluck('nombrePRT','id');
        $LD = LineaDesarrollo::pluck('tipoLineaDesarrollo','id');
        $CD = CentroDeportivo::pluck('nombreCentroDeportivo','id');
        $FADN = Fadn::pluck('nombreFADN','id');
        $ET = EtapaDeportiva::pluck('tipoEtapaDeportiva','id');
        $Entrenador = EntrenadorDatosPersonale::pluck('nombre1','id');
        $tipo = TipoAtletum::pluck('tipoAtleta','id');
        return view('asignacion-atletum.edit', compact('asignacionAtletum','AtletaDatosPersonale','Categorium','PRT','LD','CD','FADN','ET','Entrenador','tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AsignacionAtletum $asignacionAtletum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignacionAtletum $asignacionAtletum)
    {
        request()->validate(AsignacionAtletum::$rules);

        $asignacionAtletum->update($request->all());

        return redirect()->route('asignacionAtletum.index')
            ->with('success', 'Asignacion Atleta actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignacionAtletum = AsignacionAtletum::find($id)->delete();

        return redirect()->route('asignacion-atleta.index')
            ->with('success', 'Asignacion Atleta Eliminar');
    }
}
