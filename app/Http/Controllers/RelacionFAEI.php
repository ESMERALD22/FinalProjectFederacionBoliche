<?php

namespace App\Http\Controllers;

use App\Models\AtletaDatosPersonale;
use App\Models\Encargado;
use App\Models\Ficha1;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RelacionFAEI extends Controller
{
    //almacenamos atleta, encargado, e inscripcio
    public function index()
    {
        
    }
    public function create(Request $request)
    {
        $valor1 = $request->input("idFicha");
///        echo $valor1;
        
        //buscamos solicitud
        $ficha1 = Ficha1::find($valor1);
        
        //asignar datos de atleta
        $atleta = AtletaDatosPersonale::create([
            'cui' => $ficha1->cuiAtleta,
            'pasaporte' => $ficha1->pasaporte,
            'NIT' => $ficha1->NIT,
            'nombre1' => $ficha1->nombre1A,
            'nombre2'  => $ficha1->nombre2A,
            'apellido1' => $ficha1->apellido1A,
            'apellido2' => $ficha1->apellido2A,
            'apellidoDeCasada' => $ficha1->apellidoDeCasadaA,
            'fechaNaciemiento'=> $ficha1->fechaNaciemientoA,
            'celular' => $ficha1->celularA,
            'telefonodecasa' => $ficha1->telefonodecasaA,
            'genero' => $ficha1->generoA,
            'idMunicipio' => $ficha1->idMunicipioA,
            'direccion' => $ficha1->direccionA,
            'correo' => $ficha1->correoA,
            'estadoCivil' => $ficha1->estadoCivilA,
            'etnia' => $ficha1->etniaA,
            'escolaridad' => $ficha1->escolaridadA            
        ]);
        
        //asignar datos de encargado
        $encargado = Encargado::create([
            'cui' => $ficha1->cuiEncargado,
            'nombre1' => $ficha1->nombre1E,
            'nombre2'  => $ficha1->nombre2E,
            'apellido1' => $ficha1->apellido1E,
            'apellido2' => $ficha1->apellido2E,
            'apellidoDeCasada' => $ficha1->apellidoDeCasadaE,
            'fechaNaciemiento'=> $ficha1->fechaNaciemientoE,
            'celular' => $ficha1->celularE,
            'telefonodecasa' => $ficha1->telefonodecasaE,
            'genero' => $ficha1->generoE,
            'direccion' => $ficha1->direccionE
        ]);


        //asignar datos de inscripcion
        $inscripcion = Inscripcion::create([
            'idAtleta' => $atleta->id,
            'peso' => $ficha1->pesoA,
            'altura'  => $ficha1->alturaA,
            'idEncargado' => $encargado->id,
            'fotografia' => $ficha1->fotografiaA,
            'fechaInscripcion' => today(),
            'direccion'=> $ficha1->direccionA,
            'idMunicipioReside' => $ficha1->idMunicipioA,
        ]);

        //actualizar solicitud
        $ficha1->estado = true;
        $ficha1->save();

        //mostrar lista de solicitudes 
        return redirect()->route('ficha1s.index')
        ->with('success', 'Ficha updated successfully');
    }
}
