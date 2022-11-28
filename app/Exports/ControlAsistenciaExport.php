<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;

class ControlAsistenciaExport implements FromCollection
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

}
