<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EntrenadorExport implements FromCollection  , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $form27 = DB::table('entrenadordatos')
            ->get();
        return $form27;
    }


    public function headings(): array
    {
        return [
            "CUI",
            "PRIMER NOMBRE ",
            "SEGUNDO NOMBRE",
            "PRIMER APELLIDO ",
            "SEGUNDO APELLIDO",
            "APELLIDO DE CASADA",
            "FECHA DE NACIMIENTO",
            "CELULAR",
            "GENERO",
            "FOTO",
            "CONTRATO",
            "NIVEL FADN",
            "NIVEL CDAG",
            "NIVEL ACADEMICO",
            "AÑOS EXPERIENCIA",
            "CENTRO DEPORTIVO",            




        ];
    }


}
