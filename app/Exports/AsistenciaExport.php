<?php

namespace App\Exports;

use App\Models\AtletaDatosPersonale;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AsistenciaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $unaVariable;
    public $matriz;

    public function __construct($unaVariable)
    {
        $this->unaVariable = $unaVariable;
    }

    public function collection()
    {
        $valor = $this->unaVariable;
        $id = 6;
        $Atletas = DB::table('atleta_datos_personales')->get();

        foreach ($Atletas as $Atleta) {
            $idAtleta = $Atleta->id;
            $atleta = DB::select('exec infoAtleta ?', array($id));
            $asistencia = DB::select('exec listaA ? ? ?', array($id, '2022/11/01', '2022/11/30'));
            $matriz = [$atleta][$asistencia];
        }
        return $matriz;
    }

 /*   public function map($matriz): array
    {

        $tamaño = sizeof($matriz);
        for ($i = 1; $i <= $tamaño; $i++) {
            echo $i;
            for ($j = 1; $j <= $tamaño; $j++) {
                    $matriz[$i][$j];
            }    
        }
        return [
            [
            
            ],
        ];
    }*/

    public function headings(): array
    {
        return [
            'PRUEBA',
        ];
    }
}
