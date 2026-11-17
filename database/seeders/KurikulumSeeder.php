<?php

namespace Database\Seeders;

use Dom\Node;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("table_kurikulum")->insert([
           'No'=>'1',
           'Kode_MK'=>'MK0001',
           'Nama_Matkul'=>'Pemograman Framework',
           'created_at'=>now()
        ]);
        DB::table("table_kurikulum")->insert([
           'No'=>'2',
           'Kode_MK'=>'MK0002',
           'Nama_Matkul'=>'Rekayasa Perangkat Lunak',
           'created_at'=>now()
        ]);
        DB::table("table_kurikulum")->insert([
           'No'=>'3',
           'Kode_MK'=>'MK0003',
           'Nama_Matkul'=>'Kerja Praktek',
           'created_at'=>now()
        ]);
        DB::table("table_kurikulum")->insert([
           'No'=>'4',
           'Kode_MK'=>'MK0004',
           'Nama_Matkul'=>'Sistem Informasi Geografis',
           'created_at'=>now()
        ]);
        DB::table("table_kurikulum")->insert([
           'No'=>'5',
           'Kode_MK'=>'MK0005',
           'Nama_Matkul'=>'Pemograman Mobile',
           'created_at'=>now()
        ]);
    }
}
