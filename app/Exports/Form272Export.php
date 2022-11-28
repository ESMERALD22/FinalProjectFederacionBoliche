<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Form272Export implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $form27 = DB::table('practicante')
            ->get();
        return $form27;
    }


    public function headings(): array
    {
        return [
            "NOMBRE DEL ATLETA",
            "FECHA DE NACIMIENTO ",
            "EDAD",
            "GENERO",
            "CATEGORIA",
        ];
    }
}
