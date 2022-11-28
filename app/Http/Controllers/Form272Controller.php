<?php

namespace App\Http\Controllers;

use App\Exports\Form272Export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Form272Controller extends Controller
{
    public function index()
    {
        return Excel::download(new Form272Export(), 'FORM272.xlsx');
    }
}
