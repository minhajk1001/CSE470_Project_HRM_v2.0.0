<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AddEmployeeController extends Controller
{
    public function aa(){
        return view('addEmployee');
    }
    public function insert(Request $req){
        //form into variable
        $ID = $req->input('ID');
        $fullName = $req->input('fullName');
        $email = $req->input('email');
        $designation = $req->input('designation');
        $bankAccountNo = $req->input('bankAccountNo');
        $salary = $req->input('salary');
        $salaryStatus = $req->input('salaryStatus');

        //data insert into db
        $sql=array('ID'=>$ID,"fullName"=>$fullName,"email"=>$email,"designation"=>$designation,"bankAccountNo"=>$bankAccountNo,"salary"=>$salary,"salary"=>$salary,"salaryStatus"=>$salaryStatus);
        DB::table('employee')->insert($sql);

        return redirect('dashboard')->with('status', 'Profile updated!');
    }
}
