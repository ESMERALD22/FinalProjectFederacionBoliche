<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

/**
 * Class AdministradorController
 * @package App\Http\Controllers
 */
class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradors = Administrador::paginate();

        return view('administrador.index', compact('administradors'))
            ->with('i', (request()->input('page', 1) - 1) * $administradors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administrador = new Administrador();
        return view('administrador.create', compact('administrador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Administrador::$rules);

        $administrador = Administrador::create($request->all());

        return redirect()->route('administradors.index')
            ->with('success', 'Administrador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrador = Administrador::find($id);

        return view('administrador.show', compact('administrador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador = Administrador::find($id);

        return view('administrador.edit', compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Administrador $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador)
    {
        request()->validate(Administrador::$rules);

        $administrador->update($request->all());

        return redirect()->route('administradors.index')
            ->with('success', 'Administrador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $administrador = Administrador::find($id)->delete();

        return redirect()->route('administradors.index')
            ->with('success', 'Administrador deleted successfully');
    }
}
