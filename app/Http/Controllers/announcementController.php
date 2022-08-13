<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class announcementController extends Controller
{
    public function index(){
        $ann = DB::select('select * from announcement');
        return view('announcement',['ann'=>$ann]);
    }
}
