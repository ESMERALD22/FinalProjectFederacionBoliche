<?php

namespace App\Http\Controllers;

use App\Models\EtapaDeportiva;
use Illuminate\Http\Request;

/**
 * Class EtapaDeportivaController
 * @package App\Http\Controllers
 */
class EtapaDeportivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etapaDeportivas = EtapaDeportiva::paginate();

        return view('etapa-deportiva.index', compact('etapaDeportivas'))
            ->with('i', (request()->input('page', 1) - 1) * $etapaDeportivas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etapaDeportiva = new EtapaDeportiva();
        return view('etapa-deportiva.create', compact('etapaDeportiva'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EtapaDeportiva::$rules);

        $etapaDeportiva = EtapaDeportiva::create($request->all());

        return redirect()->route('etapa-deportivas.index')
            ->with('success', 'Etapa Deportiva creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etapaDeportiva = EtapaDeportiva::find($id);

        return view('etapa-deportiva.show', compact('etapaDeportiva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etapaDeportiva = EtapaDeportiva::find($id);

        return view('etapa-deportiva.edit', compact('etapaDeportiva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EtapaDeportiva $etapaDeportiva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EtapaDeportiva $etapaDeportiva)
    {
        request()->validate(EtapaDeportiva::$rules);

        $etapaDeportiva->update($request->all());

        return redirect()->route('etapa-deportivas.index')
            ->with('success', 'Etapa Deportiva actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $etapaDeportiva = EtapaDeportiva::find($id)->delete();

        return redirect()->route('etapa-deportivas.index')
            ->with('success', 'Etapa Deportiva eliminada');
    }
}
