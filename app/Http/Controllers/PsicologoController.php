<?php

namespace App\Http\Controllers;

use App\Models\Psicologo;
use Illuminate\Http\Request;

/**
 * Class PsicologoController
 * @package App\Http\Controllers
 */
class PsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psicologos = Psicologo::paginate();

        return view('psicologo.index', compact('psicologos'))
            ->with('i', (request()->input('page', 1) - 1) * $psicologos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $psicologo = new Psicologo();
        return view('psicologo.create', compact('psicologo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Psicologo::$rules);

        $psicologo = Psicologo::create($request->all());

        return redirect()->route('psicologos.index')
            ->with('success', 'Psicologo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $psicologo = Psicologo::find($id);

        return view('psicologo.show', compact('psicologo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psicologo = Psicologo::find($id);

        return view('psicologo.edit', compact('psicologo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Psicologo $psicologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psicologo $psicologo)
    {
        request()->validate(Psicologo::$rules);

        $psicologo->update($request->all());

        return redirect()->route('psicologos.index')
            ->with('success', 'Psicologo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $psicologo = Psicologo::find($id)->delete();

        return redirect()->route('psicologos.index')
            ->with('success', 'Psicologo deleted successfully');
    }
}
