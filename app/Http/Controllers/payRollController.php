<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class payRollController extends Controller
{

    public function index(Request $req1){
        $month = $req1->input('month');
        $bankAccountNo = $req1->input('bankAccountNo');

        $employee = DB::select("update employee SET salaryStatus = '$month' WHERE bankAccountNo = 456345");
        return view('payRoll',['employee'=>$employee]);
    }
}
