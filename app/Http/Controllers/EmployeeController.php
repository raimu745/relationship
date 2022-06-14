<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function one(){
        $data = Company::with('getemp')->get();
        dd($data);
        // return $data;
       
    }
}
