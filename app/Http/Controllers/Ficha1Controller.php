<?php

namespace App\Http\Controllers;

use App\Exports\FichaInscripcionExport;
use App\Models\Ficha1;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class Ficha1Controller
 * @package App\Http\Controllers
 */
class Ficha1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ficha1s = Ficha1::paginate();

        return view('ficha1.index', compact('ficha1s'))
            ->with('i', (request()->input('page', 1) - 1) * $ficha1s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $valor1 = $request->input("id");
        $municipios = DB::table('municipio')->where('idDepartamento', $valor1)->pluck('municipio', 'id');
        $genero = array("Masculino", "Femenino");
        $estadoCivil = array("Soltero", "Casado", "Divorciado", "Viudo");
        $estadoF = array("0");

        $ficha1 = new Ficha1();
        return view('ficha1.create', compact('ficha1', 'municipios', 'genero', 'estadoCivil', 'estadoF'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ficha1::$rules);
        $ficha1 = Ficha1::create($request->all());
        if ($request->hasfile('fotografiaA')) {
            $file = $request->file('fotografiaA');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/atletas/', $filename);
            $ficha1->fotografiaA = $filename;
            $ficha1->save();
        }
        $unaVariable = $ficha1->id;

        //creamos archivo excel ;)
        return Excel::download(new FichaInscripcionExport($unaVariable), 'FICHA_INSCRIPCION.xlsx');


        /*        return redirect()->route('ficha1s.index')
            ->with('success', 'Ficha1 created successfully.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ficha1 = Ficha1::find($id);
        $idMun = $ficha1->idMunicipioA;
        $muni = Municipio::find($idMun);

        return view('ficha1.show', compact('ficha1', 'muni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ficha1 = Ficha1::find($id);

        return view('ficha1.edit', compact('ficha1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ficha1 $ficha1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha1 $ficha1)
    {
        request()->validate(Ficha1::$rules);

        $ficha1->update($request->all());

        return redirect()->route('ficha1s.index')
            ->with('success', 'Ficha1 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ficha1 = Ficha1::find($id)->delete();

        return redirect()->route('ficha1s.index')
            ->with('success', 'Ficha1 deleted successfully');
    }
}
