<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Form27Export implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        $form27 = DB::table('procesosisitematico')
            ->get();
        return $form27;
    }


    public function headings(): array
    {
        return [
            "TIPO DE ATLETA",
            "PRIMER NOMBRE",
            "SEGUNDO NOMBRE",
            "PRIMER APELLIDO",
            "SEGUNDO APELLIDO",
            "FECHA DE NACIMIENTO",
            "GENERO",
            "MODALIDAD",
            "CATEGORIA",
            "ETAPA DEPORTIVA",
            "EXPERIENCIA DEPORTIVA EN AÑOS",
            "EXPERIENCIA DEPORTIVA EN MESES",
        ];
    }
}
