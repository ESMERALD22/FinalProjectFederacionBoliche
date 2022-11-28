<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ControlAsistExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */


    public function collection()
    {
        $fichaImprimir = DB::table('controlasist')
            ->get();

        return $fichaImprimir;
    }
    public function headings(): array
    {
        return [
            "ATLETA",
            "NOMBRES",
            "FECHA",
            "TIPO DE ASISTENCIA",
            "SEMANA",
            "DIA",
            "DIA DE LA SEMANA",
        ];
    }
    public function map($fichaImprimir): array
    {

        return [
            
            [
                $fichaImprimir->idAtleta,
                $fichaImprimir->nombre1 . " " . $fichaImprimir->nombre2 ,
                $fichaImprimir->fecha,
                $fichaImprimir->tipoAsistencia,
                $fichaImprimir->semana,
            ],
 
        ];
    }
}
