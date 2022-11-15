<?php

namespace App\Http\Controllers;

use App\Models\FactoresReporte;
use Illuminate\Http\Request;

/**
 * Class FactoresReporteController
 * @package App\Http\Controllers
 */
class FactoresReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factoresReportes = FactoresReporte::paginate();

        return view('factores-reporte.index', compact('factoresReportes'))
            ->with('i', (request()->input('page', 1) - 1) * $factoresReportes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factoresReporte = new FactoresReporte();
        return view('factores-reporte.create', compact('factoresReporte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FactoresReporte::$rules);

        $factoresReporte = FactoresReporte::create($request->all());

        return redirect()->route('factores-reportes.index')
            ->with('success', 'FactoresReporte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factoresReporte = FactoresReporte::find($id);

        return view('factores-reporte.show', compact('factoresReporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factoresReporte = FactoresReporte::find($id);

        return view('factores-reporte.edit', compact('factoresReporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FactoresReporte $factoresReporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactoresReporte $factoresReporte)
    {
        request()->validate(FactoresReporte::$rules);

        $factoresReporte->update($request->all());

        return redirect()->route('factores-reportes.index')
            ->with('success', 'FactoresReporte updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $factoresReporte = FactoresReporte::find($id)->delete();

        return redirect()->route('factores-reportes.index')
            ->with('success', 'FactoresReporte deleted successfully');
    }
}
