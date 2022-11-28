<?php

namespace App\Http\Controllers;

use App\Models\Prt;
use Illuminate\Http\Request;

/**
 * Class PrtController
 * @package App\Http\Controllers
 */
class PrtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prts = Prt::paginate();

        return view('prt.index', compact('prts'))
            ->with('i', (request()->input('page', 1) - 1) * $prts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prt = new Prt();
        return view('prt.create', compact('prt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prt::$rules);

        $prt = Prt::create($request->all());

        return redirect()->route('prt.index')
            ->with('success', 'PRT Creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prt = Prt::find($id);

        return view('prt.show', compact('prt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prt = Prt::find($id);

        return view('prt.edit', compact('prt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prt $prt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prt $prt)
    {
        request()->validate(Prt::$rules);

        $prt->update($request->all());

        return redirect()->route('prt.index')
            ->with('success', 'PRT Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prt = Prt::find($id)->delete();

        return redirect()->route('prt.index')
            ->with('success', 'PRT Eliminada');
    }
}
