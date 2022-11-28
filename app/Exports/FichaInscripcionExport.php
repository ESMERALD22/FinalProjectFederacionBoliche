<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class FichaInscripcionExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $idFicha;
    public $m;
    public $d;
    public function __construct($idFicha)
    {
        $this->idFicha = $idFicha;
    }

    public function collection()
    {
        $idFicha1 = $this->idFicha;
        $fichaImprimir = DB::table('ficha1')
            ->where('id', '=', $idFicha1)
            ->get();

        return $fichaImprimir;
    }

    public function map($fichaImprimir): array
    {

        return [
            [
                " ",
                "AÑO 2022",
            ],
            [
                " ",
                "ASOCIACION DEPORTIVA DEPARTAMENTAL DE QUETZALTENANGO",
            ],
            [
                " ",
                "FICHA DE INSCRIPCION",
            ],
            [
                "______________________________________",
                "______________________________________",
                "______________________________________",
                "______________________________________",
            ],
            [
                "DATOS DEL ATLETA",
            ],
            [
                "______________________________________",
                "______________________________________",
                "______________________________________",
                "______________________________________",
            ],
            [
                "CUI:",
                $fichaImprimir->cuiAtleta,
            ],
            [
                "PASAPORTE:",
                $fichaImprimir->pasaporte,
            ],
            [
                "NIT:",
                $fichaImprimir->NIT,
            ],
            [
                "NOMBRES:",
                $fichaImprimir->nombre1A . " " . $fichaImprimir->nombre2A . " " . $fichaImprimir->apellido1A . " " . $fichaImprimir->apellido2A,
            ],
            [
                "APELLIDO DE CASADA:",
                $fichaImprimir->apellidoDeCasadaA,
            ],
            [
                "FECHA DE NACIMIENTO :",
                $fichaImprimir->fechaNaciemientoA,
            ],
            [
                "CELULAR:",
                $fichaImprimir->celularA,
            ],
            [
                "TELEFONO DE CASA:",
                $fichaImprimir->telefonodecasaA,
            ],
            [
                "GENERO:",
                $fichaImprimir->generoA,
            ],
            [
                "DEPARTAMENTO --- MUNICIPIO :",
                $fichaImprimir->idMunicipioA,

            ],
            [
                "DIRECCION: ",
                $fichaImprimir->direccionA,
            ],
            [
                "CORRERO: ",
                $fichaImprimir->correoA,
            ],
            [
                "ESTADO CIVIL: ",
                $fichaImprimir->estadoCivilA,

            ],
            [
                "ETNIA: ",
                $fichaImprimir->etniaA,
            ],
            [
                "ESCOLARIDAD: ",
                $fichaImprimir->escolaridadA,
            ],
            [
                "PESO",
                $fichaImprimir->pesoA,
            ],
            [
                "ALTURA",
                $fichaImprimir->alturaA,
            ],
            [
                "______________________________________",
                "______________________________________",
                "______________________________________",
                "______________________________________",
            ],
            [
                "DATOS DEL ENCARGADO",
            ],
            [
                "______________________________________",
                "______________________________________",
                "______________________________________",
                "______________________________________",
            ],
            [
                "CUI:",
                $fichaImprimir->cuiEncargado,
            ],
            [
                "NOMBRES",
                $fichaImprimir->nombre1E . " " . $fichaImprimir->nombre2E . " " . $fichaImprimir->apellido1E . " " . $fichaImprimir->apellido2E
            ],
            [
                "APELLIDO DE CASADA",
                $fichaImprimir->apellidoDeCasadaE,
            ],
            [
                "FECHA DE NACIMIENTO",
                $fichaImprimir->fechaNaciemientoE,
            ],
            [
                "TELEFONO DE CASA",
                $fichaImprimir->telefonodecasaE,
            ],
            [
                "CELULAR",
                $fichaImprimir->celularE,
            ],
            [
                "GENERO",
                $fichaImprimir->generoE,
            ],
            [
                "DIRECCION",
                $fichaImprimir->direccionE,
            ],
            [
                "______________________________________",
                "______________________________________",
                "______________________________________",
                "______________________________________",
            ],
            [
                "Declaración de la participación en las prácticas de Boliche en cualquiera de sus eventos:",
            ],    [

                " Estoy consciente que es un deporte en donde existen riesgos de accidentes y lesiones como en cualquier otro,",
            ],
            [
                " situación por la cual eximo a la Federación Nacional de Boliche de Guatemala y ",
            ],
            [
                "a la Asociación Deportiva Departamental de Boliche de Quetzaltenango, ",
            ],
            [
                "por aquellas circunstancias antes mencionas que puedan ocurrir, y que se presente antes",
            ],
            [
                "durante o después de las sesiones de práctica y/o competencias organizadas por la Federación ",
            ],
            [
                "o por la Asociación.						
                ",
            ],

            [
                "   ",
            ],

            [
                "______________________________________",
                "   ",
                "______________________________________",
            ],
            [
                "Firma del Atleta",
                " ",
                "Firma de la Asociacion",
            ],

        ];
    }

    public function headings(): array
    {
        return [
            "FEDERACION DE BOLICHE, SEDE QUETZALTENANGO",
        ];
    }
}
