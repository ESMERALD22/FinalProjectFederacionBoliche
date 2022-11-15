<?php

namespace App\Http\Controllers;

use App\Models\LineaDesarrollo;
use Illuminate\Http\Request;

/**
 * Class LineaDesarrolloController
 * @package App\Http\Controllers
 */
class LineaDesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineaDesarrollos = LineaDesarrollo::paginate();

        return view('linea-desarrollo.index', compact('lineaDesarrollos'))
            ->with('i', (request()->input('page', 1) - 1) * $lineaDesarrollos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineaDesarrollo = new LineaDesarrollo();
        return view('linea-desarrollo.create', compact('lineaDesarrollo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LineaDesarrollo::$rules);

        $lineaDesarrollo = LineaDesarrollo::create($request->all());

        return redirect()->route('linea-desarrollos.index')
            ->with('success', 'LineaDesarrollo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lineaDesarrollo = LineaDesarrollo::find($id);

        return view('linea-desarrollo.show', compact('lineaDesarrollo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lineaDesarrollo = LineaDesarrollo::find($id);

        return view('linea-desarrollo.edit', compact('lineaDesarrollo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LineaDesarrollo $lineaDesarrollo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineaDesarrollo $lineaDesarrollo)
    {
        request()->validate(LineaDesarrollo::$rules);

        $lineaDesarrollo->update($request->all());

        return redirect()->route('linea-desarrollos.index')
            ->with('success', 'LineaDesarrollo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lineaDesarrollo = LineaDesarrollo::find($id)->delete();

        return redirect()->route('linea-desarrollos.index')
            ->with('success', 'LineaDesarrollo deleted successfully');
    }
}
