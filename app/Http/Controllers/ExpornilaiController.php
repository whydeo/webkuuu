<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\nilaiExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportnilaiController extends Controller
{
    function export()
    {
        return Excel::download(new nilaisExport, 'nilais.xlsx');
    }
}