<?php

namespace App\Http\Controllers;

use App\Models\NivelFadn;
use Illuminate\Http\Request;

/**
 * Class NivelFadnController
 * @package App\Http\Controllers
 */
class NivelFadnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivelFadns = NivelFadn::paginate();

        return view('nivel-fadn.index', compact('nivelFadns'))
            ->with('i', (request()->input('page', 1) - 1) * $nivelFadns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivelFadn = new NivelFadn();
        return view('nivel-fadn.create', compact('nivelFadn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(NivelFadn::$rules);

        $nivelFadn = NivelFadn::create($request->all());

        return redirect()->route('nivel-fadns.index')
            ->with('success', 'NivelFadn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivelFadn = NivelFadn::find($id);

        return view('nivel-fadn.show', compact('nivelFadn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nivelFadn = NivelFadn::find($id);

        return view('nivel-fadn.edit', compact('nivelFadn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  NivelFadn $nivelFadn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NivelFadn $nivelFadn)
    {
        request()->validate(NivelFadn::$rules);

        $nivelFadn->update($request->all());

        return redirect()->route('nivel-fadns.index')
            ->with('success', 'NivelFadn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nivelFadn = NivelFadn::find($id)->delete();

        return redirect()->route('nivel-fadns.index')
            ->with('success', 'NivelFadn deleted successfully');
    }
}
