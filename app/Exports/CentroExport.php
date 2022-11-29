<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CentroExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $form27 = DB::table('centro_deportivo')
            ->get();
        return $form27;
    }


    public function headings(): array
    {
        return [
            "DESCRIPCION ",
            "FADN ",
            "INSTITUCION",
            "DIRECCION",
            "IMPLEMENTACION",
            "ACCESIBILIDAD",
            "DIA APERTURA",
            "HORA APERTURA",
            "HORA CIERRE",            




        ];
    }

}
