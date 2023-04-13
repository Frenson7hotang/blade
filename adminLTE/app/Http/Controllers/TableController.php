<?php

namespace App\Http\Controllers;
//Frenson7hotang
use Illuminate\Http\Request;

class TableController extends Controller
{
    
    public function table()
    {
        return view('table');
    }

    public function dataTable()
    {
        return view('datatable');
    }
}
    //

