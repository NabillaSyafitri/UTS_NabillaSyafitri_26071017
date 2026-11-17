<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('table_siswa')->insert([
        'No'=> '1',
        'NIS'=> '101',
        'Nama_Siswa'=>'Roni Satria'  
       ]);

       DB::table('table_siswa')->insert([
        'No'=> '2',
        'NIS'=> '102',
        'Nama_Siswa'=>'Budiman Halim'      
       ]);

       DB::table('table_siswa')->insert([
        'No'=> '3',
        'NIS'=> '103',
        'Nama_Siswa'=>'Syafrizal'         
       ]);

       DB::table('table_siswa')->insert([
        'No'=> '4',
        'NIS'=> '104',
        'Nama_Siswa'=>'Juniwong'         
       ]);
    }
}
