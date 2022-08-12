<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class viewEmployeeController extends Controller
{

    public function index(){
        $employee = DB::select('select * from employee');
        return view('viewEmployee',['employee'=>$employee]);
    }
}
