<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

/**
 * Class InscripcionController
 * @package App\Http\Controllers
 */
class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcions = Inscripcion::paginate();

        return view('inscripcion.index', compact('inscripcions'))
            ->with('i', (request()->input('page', 1) - 1) * $inscripcions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscripcion = new Inscripcion();
        return view('inscripcion.create', compact('inscripcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inscripcion::$rules);

        $inscripcion = Inscripcion::create($request->all());

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscripcion = Inscripcion::find($id);

        return view('inscripcion.show', compact('inscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscripcion = Inscripcion::find($id);

        return view('inscripcion.edit', compact('inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscripcion $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        request()->validate(Inscripcion::$rules);

        $inscripcion->update($request->all());

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id)->delete();

        return redirect()->route('inscripcions.index')
            ->with('success', 'Inscripcion deleted successfully');
    }
}
