<?php

namespace App\Http\Controllers;

use App\Models\AlergiasAtletum;
use Illuminate\Http\Request;

/**
 * Class AlergiasAtletumController
 * @package App\Http\Controllers
 */
class AlergiasAtletumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alergiasAtleta = AlergiasAtletum::paginate();

        return view('alergias-atletum.index', compact('alergiasAtleta'))
            ->with('i', (request()->input('page', 1) - 1) * $alergiasAtleta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alergiasAtletum = new AlergiasAtletum();
        return view('alergias-atletum.create', compact('alergiasAtletum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AlergiasAtletum::$rules);

        $alergiasAtletum = AlergiasAtletum::create($request->all());

        return redirect()->route('alergias-atleta.index')
            ->with('success', 'AlergiasAtletum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alergiasAtletum = AlergiasAtletum::find($id);

        return view('alergias-atletum.show', compact('alergiasAtletum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alergiasAtletum = AlergiasAtletum::find($id);

        return view('alergias-atletum.edit', compact('alergiasAtletum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AlergiasAtletum $alergiasAtletum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlergiasAtletum $alergiasAtletum)
    {
        request()->validate(AlergiasAtletum::$rules);

        $alergiasAtletum->update($request->all());

        return redirect()->route('alergias-atleta.index')
            ->with('success', 'AlergiasAtletum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alergiasAtletum = AlergiasAtletum::find($id)->delete();

        return redirect()->route('alergias-atleta.index')
            ->with('success', 'AlergiasAtletum deleted successfully');
    }
}
