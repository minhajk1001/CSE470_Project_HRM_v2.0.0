<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobCircularController extends Controller
{
    public function index(){
        return view('jobCircular');
    }

    public function downloadCirculars(){
        $path = public_path('uploads/1660404055.pdf');
        return response()->download($path);
        return back();
    }
}
