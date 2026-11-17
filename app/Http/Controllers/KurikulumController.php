<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    function Kurikulum(){
        $data = DB::connection()->table("table_kurikulum")->get();
        return view("kurikulum",["kurikulum"=>$data]);
    }
}
