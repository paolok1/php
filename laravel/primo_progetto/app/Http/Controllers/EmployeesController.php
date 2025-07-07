<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function dettaglio($name){
        @dd($name);
        return view('employees.dettaglioEmployee');
    }
}
