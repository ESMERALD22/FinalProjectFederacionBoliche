<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AsistenciaExport;
use App\Exports\ControlAsistExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportCAController extends Controller
{
    public function index()
    {
        return Excel::download(new ControlAsistExport(), 'asistencia.xlsx');
    }
}
