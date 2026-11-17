<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
     function siswa(){
        $data = DB::connection()->table("table_siswa")->get();
        return view("siswa",["siswa"=>$data]);
     }
}
