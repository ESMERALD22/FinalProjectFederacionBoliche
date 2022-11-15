<?php

namespace App\Http\Controllers;

use App\Models\ReportePsicologico;
use Illuminate\Http\Request;

/**
 * Class ReportePsicologicoController
 * @package App\Http\Controllers
 */
class ReportePsicologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportePsicologicos = ReportePsicologico::paginate();

        return view('reporte-psicologico.index', compact('reportePsicologicos'))
            ->with('i', (request()->input('page', 1) - 1) * $reportePsicologicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reportePsicologico = new ReportePsicologico();
        return view('reporte-psicologico.create', compact('reportePsicologico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ReportePsicologico::$rules);

        $reportePsicologico = ReportePsicologico::create($request->all());

        return redirect()->route('reporte-psicologicos.index')
            ->with('success', 'ReportePsicologico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reportePsicologico = ReportePsicologico::find($id);

        return view('reporte-psicologico.show', compact('reportePsicologico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reportePsicologico = ReportePsicologico::find($id);

        return view('reporte-psicologico.edit', compact('reportePsicologico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ReportePsicologico $reportePsicologico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportePsicologico $reportePsicologico)
    {
        request()->validate(ReportePsicologico::$rules);

        $reportePsicologico->update($request->all());

        return redirect()->route('reporte-psicologicos.index')
            ->with('success', 'ReportePsicologico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reportePsicologico = ReportePsicologico::find($id)->delete();

        return redirect()->route('reporte-psicologicos.index')
            ->with('success', 'ReportePsicologico deleted successfully');
    }
}
