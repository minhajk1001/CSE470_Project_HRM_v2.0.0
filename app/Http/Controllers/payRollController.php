<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class payRollController extends Controller
{
    public function aa(){
        return view('payRoll');
    }

    public function index(Request $req1){
        $var = $req1->input('ID');

        $employee = DB::select("SELECT * FROM employee WHERE ID = '$var'");
        return view('payRoll',['employee'=>$employee]);

    }
}
