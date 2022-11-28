<?php

namespace App\Http\Controllers;

use App\Exports\Form27Export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Form27Controller extends Controller
{
    public function index()
    {
        return Excel::download(new Form27Export(), 'FORM27.xlsx');
    }
}
