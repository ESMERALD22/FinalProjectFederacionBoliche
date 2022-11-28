<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AtletaExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $form27 = DB::table('atletadatos')
            ->get();
        return $form27;
    }


    public function headings(): array
    {
        return [
            "NOMBRE DEL ATLETA",
            "FADN ",
            "FECHA DE INGRESO",
            "ENTRENADOR",
            "CENTRO DEPORTIVO",
            "ADAPTADO",
            "MODALIDAD",
            "CATEGORIA",
            "LINEA DE DESARROLLO",
            "PRT",
            "CUI",
            "PASAPORTE",
            "MUNICIPIO",
            "DEPARTAMENTO",
            "CORREO",
            "ESTADO CIVIL",
            "ETNIA",
            "ESCOLARIDAD",
            "DIRECCION",
            "CELULAR",
            "TELEFONO DE CASA",
            "FOTOGRAFIA",
            




        ];
    }

}
