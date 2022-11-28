<?php

namespace App\Http\Controllers;

use App\Exports\CentroExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CentroController extends Controller
{
    public function index()
    {
        return Excel::download(new CentroExport(), 'CENTRO.xlsx');
    }

}
