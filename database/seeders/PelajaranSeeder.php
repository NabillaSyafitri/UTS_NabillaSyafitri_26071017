<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query untuk menambahkan data
        DB::table('table_pelajaran_nabilla')->insert([
'no'=>'1',
'kode'=> 'PL-1',
'nama_pelajaran'=> 'Matematika',
'created_at'=> now(),
        ]);
         DB::table('table_pelajaran_nabilla')->insert([
'no'=>'2',
'kode'=> 'PL-2',
'nama_pelajaran'=> 'Bahasa Inggris',
'created_at'=> now(),
        ]);
        DB::table('table_pelajaran_nabilla')->insert([
'no'=>'3',
'kode'=> 'PL-3',
'nama_pelajaran'=> 'Bahasa Indonesia',
'created_at'=> now(),
        ]);
        DB::table('table_pelajaran_nabilla')->insert([
'no'=>'4',
'kode'=> 'PL-4',
'nama_pelajaran'=> 'Pancasila',
'created_at'=> now(),
        ]);
        DB::table('table_pelajaran_nabilla')->insert([
'no'=>'5',
'kode'=> 'PL-2',
'nama_pelajaran'=> 'Fisika',
'created_at'=> now(),
        ]);
    }
}
