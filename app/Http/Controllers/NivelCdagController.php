<?php

namespace App\Http\Controllers;

use App\Models\NivelCdag;
use Illuminate\Http\Request;

/**
 * Class NivelCdagController
 * @package App\Http\Controllers
 */
class NivelCdagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivelCdags = NivelCdag::paginate();

        return view('nivel-cdag.index', compact('nivelCdags'))
            ->with('i', (request()->input('page', 1) - 1) * $nivelCdags->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivelCdag = new NivelCdag();
        return view('nivel-cdag.create', compact('nivelCdag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(NivelCdag::$rules);

        $nivelCdag = NivelCdag::create($request->all());

        return redirect()->route('nivel-cdags.index')
            ->with('success', 'NivelCdag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivelCdag = NivelCdag::find($id);

        return view('nivel-cdag.show', compact('nivelCdag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nivelCdag = NivelCdag::find($id);

        return view('nivel-cdag.edit', compact('nivelCdag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NivelCdag $nivelCdag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NivelCdag $nivelCdag)
    {
        request()->validate(NivelCdag::$rules);

        $nivelCdag->update($request->all());

        return redirect()->route('nivel-cdags.index')
            ->with('success', 'NivelCdag updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nivelCdag = NivelCdag::find($id)->delete();

        return redirect()->route('nivel-cdags.index')
            ->with('success', 'NivelCdag deleted successfully');
    }
}
