<?php

namespace App\Http\Controllers;

use App\Models\Fadn;
use Illuminate\Http\Request;

/**
 * Class FadnController
 * @package App\Http\Controllers
 */
class FadnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fadns = Fadn::paginate();

        return view('fadn.index', compact('fadns'))
            ->with('i', (request()->input('page', 1) - 1) * $fadns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fadn = new Fadn();
        return view('fadn.create', compact('fadn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fadn::$rules);

        $fadn = Fadn::create($request->all());

        return redirect()->route('fadns.index')
            ->with('success', 'Fadn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fadn = Fadn::find($id);

        return view('fadn.show', compact('fadn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fadn = Fadn::find($id);

        return view('fadn.edit', compact('fadn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fadn $fadn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fadn $fadn)
    {
        request()->validate(Fadn::$rules);

        $fadn->update($request->all());

        return redirect()->route('fadns.index')
            ->with('success', 'Fadn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fadn = Fadn::find($id)->delete();

        return redirect()->route('fadns.index')
            ->with('success', 'Fadn deleted successfully');
    }
}
