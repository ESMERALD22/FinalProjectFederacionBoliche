<?php

namespace App\Http\Controllers;

use App\Models\HorarioAtencionCd;
use Illuminate\Http\Request;

/**
 * Class HorarioAtencionCdController
 * @package App\Http\Controllers
 */
class HorarioAtencionCdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioAtencionCds = HorarioAtencionCd::paginate();

        return view('horario-atencion-cd.index', compact('horarioAtencionCds'))
            ->with('i', (request()->input('page', 1) - 1) * $horarioAtencionCds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horarioAtencionCd = new HorarioAtencionCd();
        return view('horario-atencion-cd.create', compact('horarioAtencionCd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HorarioAtencionCd::$rules);

        $horarioAtencionCd = HorarioAtencionCd::create($request->all());

        return redirect()->route('horario-atencion-cds.index')
            ->with('success', 'HorarioAtencionCd created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horarioAtencionCd = HorarioAtencionCd::find($id);

        return view('horario-atencion-cd.show', compact('horarioAtencionCd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarioAtencionCd = HorarioAtencionCd::find($id);

        return view('horario-atencion-cd.edit', compact('horarioAtencionCd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HorarioAtencionCd $horarioAtencionCd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HorarioAtencionCd $horarioAtencionCd)
    {
        request()->validate(HorarioAtencionCd::$rules);

        $horarioAtencionCd->update($request->all());

        return redirect()->route('horario-atencion-cds.index')
            ->with('success', 'HorarioAtencionCd updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horarioAtencionCd = HorarioAtencionCd::find($id)->delete();

        return redirect()->route('horario-atencion-cds.index')
            ->with('success', 'HorarioAtencionCd deleted successfully');
    }
}
