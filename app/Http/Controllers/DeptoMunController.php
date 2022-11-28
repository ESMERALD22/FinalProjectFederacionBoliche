<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeptoMunController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::pluck('departamento','id');
        $departamento = new Departamento(); 
        return view('ficha1.deptoAtleta', compact('departamento', 'departamentos'));
    }

    public function show($id)
    {
        $municipios = DB::table('municipio')->where('idDepartamento', $id)->value('municipio','id');
        foreach ($municipios as $mun ) 
        echo $mun->municipio;
        echo $mun->idDepartamento;

    }
}
