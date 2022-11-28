<?php

namespace App\Http\Controllers;

use App\Exports\EntrenadorExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EntrenadorController extends Controller
{
    public function index()
    {
        return Excel::download(new EntrenadorExport(), 'INFORMACIONENTRENADORES.xlsx');
    }
}
