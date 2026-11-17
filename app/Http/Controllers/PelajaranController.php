<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelajaranController extends Controller
{
    function pelajaran(){
        $data = DB::connection()->table('table_pelajaran_nabilla')->get();
    return view("pelajaran", ["pelajaran"=> $data]);
    }
}
