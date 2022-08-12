<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payRoll extends Controller
{
    public function index(){
        return view('payRoll');
    }

    public function paySalary(Request $req1){
        $ID = $req1->input('ID');
        echo $ID;
        return view('payRoll');
    }
}
