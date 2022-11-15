<?php

namespace App\Http\Controllers;

use App\Models\AtletaDatosPersonale;
use Illuminate\Http\Request;

/**
 * Class AtletaDatosPersonaleController
 * @package App\Http\Controllers
 */
class AtletaDatosPersonaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atletaDatosPersonales = AtletaDatosPersonale::paginate();

        return view('atleta-datos-personale.index', compact('atletaDatosPersonales'))
            ->with('i', (request()->input('page', 1) - 1) * $atletaDatosPersonales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atletaDatosPersonale = new AtletaDatosPersonale();
        return view('atleta-datos-personale.create', compact('atletaDatosPersonale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AtletaDatosPersonale::$rules);

        $atletaDatosPersonale = AtletaDatosPersonale::create($request->all());

        return redirect()->route('atleta-datos-personales.index')
            ->with('success', 'AtletaDatosPersonale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atletaDatosPersonale = AtletaDatosPersonale::find($id);

        return view('atleta-datos-personale.show', compact('atletaDatosPersonale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atletaDatosPersonale = AtletaDatosPersonale::find($id);

        return view('atleta-datos-personale.edit', compact('atletaDatosPersonale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AtletaDatosPersonale $atletaDatosPersonale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtletaDatosPersonale $atletaDatosPersonale)
    {
        request()->validate(AtletaDatosPersonale::$rules);

        $atletaDatosPersonale->update($request->all());

        return redirect()->route('atleta-datos-personales.index')
            ->with('success', 'AtletaDatosPersonale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $atletaDatosPersonale = AtletaDatosPersonale::find($id)->delete();

        return redirect()->route('atleta-datos-personales.index')
            ->with('success', 'AtletaDatosPersonale deleted successfully');
    }
}
