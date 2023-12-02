<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ClassroomExport;
use Maatwebsite\Excel\Facades\Excel;
class ExportController extends Controller
{
    public function index()
    {
        //
        return view('export');
        
    }
    public function export()
    {
        return Excel::download(new ClassroomExport,'classroom.xlsx' );

    }
}
