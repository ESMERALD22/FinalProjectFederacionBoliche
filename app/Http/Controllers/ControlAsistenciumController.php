<?php

namespace App\Http\Controllers;

use App\Models\ControlAsistencium;
use Illuminate\Http\Request;

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
    public function create()
    {
        $controlAsistencium = new ControlAsistencium();
        return view('control-asistencium.create', compact('controlAsistencium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ControlAsistencium::$rules);

        $controlAsistencium = ControlAsistencium::create($request->all());

        return redirect()->route('control-asistencia.index')
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
