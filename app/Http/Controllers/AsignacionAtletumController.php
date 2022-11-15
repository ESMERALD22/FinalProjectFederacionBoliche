<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAtletum;
use Illuminate\Http\Request;

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
        return view('asignacion-atletum.create', compact('asignacionAtletum'));
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
            ->with('success', 'AsignacionAtletum created successfully.');
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

        return view('asignacion-atletum.edit', compact('asignacionAtletum'));
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

        return redirect()->route('asignacion-atleta.index')
            ->with('success', 'AsignacionAtletum updated successfully');
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
            ->with('success', 'AsignacionAtletum deleted successfully');
    }
}
