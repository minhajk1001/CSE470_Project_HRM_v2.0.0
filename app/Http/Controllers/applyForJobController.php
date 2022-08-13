<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applyForJobController extends Controller
{
    public function index(){
        return view('applyForJob');
    }

    public function store(Request $request){
        $request->validate(['file' => 'required|mimes:pdf,csv|max:5120',]);
        $fileName = time().'.'.$request->file->extension();  
        
        //into public folder
        $request->file->move(public_path('jobApplicants'), $fileName);
        return back();
    }
}
