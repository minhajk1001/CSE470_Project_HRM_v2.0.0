<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobApplicantsController extends Controller
{
    public function index(){
        return view('/jobApplicants');
    }
}
