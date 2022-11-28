<?php

namespace App\Http\Controllers;

use App\Exports\AsistenciaExport;
use App\Exports\FichaInscripcionExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportAsistenciaController extends Controller
{
    public function index()
    {
        $unaVariable = "3";
        return Excel::download(new FichaInscripcionExport($unaVariable), 'form27.xlsx');
    }
}
