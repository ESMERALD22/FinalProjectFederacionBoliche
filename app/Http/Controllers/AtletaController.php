<?php

namespace App\Http\Controllers;

use App\Exports\AtletaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AtletaController extends Controller
{
    public function index()
    {
        return Excel::download(new AtletaExport(), 'INFORMACIONATLETAS.xlsx');
    }

}
