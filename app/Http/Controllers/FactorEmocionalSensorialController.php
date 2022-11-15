<?php

namespace App\Http\Controllers;

use App\Models\FactorEmocionalSensorial;
use Illuminate\Http\Request;

/**
 * Class FactorEmocionalSensorialController
 * @package App\Http\Controllers
 */
class FactorEmocionalSensorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factorEmocionalSensorials = FactorEmocionalSensorial::paginate();

        return view('factor-emocional-sensorial.index', compact('factorEmocionalSensorials'))
            ->with('i', (request()->input('page', 1) - 1) * $factorEmocionalSensorials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factorEmocionalSensorial = new FactorEmocionalSensorial();
        return view('factor-emocional-sensorial.create', compact('factorEmocionalSensorial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FactorEmocionalSensorial::$rules);

        $factorEmocionalSensorial = FactorEmocionalSensorial::create($request->all());

        return redirect()->route('factor-emocional-sensorials.index')
            ->with('success', 'FactorEmocionalSensorial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factorEmocionalSensorial = FactorEmocionalSensorial::find($id);

        return view('factor-emocional-sensorial.show', compact('factorEmocionalSensorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factorEmocionalSensorial = FactorEmocionalSensorial::find($id);

        return view('factor-emocional-sensorial.edit', compact('factorEmocionalSensorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FactorEmocionalSensorial $factorEmocionalSensorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactorEmocionalSensorial $factorEmocionalSensorial)
    {
        request()->validate(FactorEmocionalSensorial::$rules);

        $factorEmocionalSensorial->update($request->all());

        return redirect()->route('factor-emocional-sensorials.index')
            ->with('success', 'FactorEmocionalSensorial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $factorEmocionalSensorial = FactorEmocionalSensorial::find($id)->delete();

        return redirect()->route('factor-emocional-sensorials.index')
            ->with('success', 'FactorEmocionalSensorial deleted successfully');
    }
}
