<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //sintak laravel dibawah untuk membuat table produk
        Schema::create('table_pelajaran_nabilla', function (Blueprint $table) {
            $table->id('id_pelajaran');
            $table->string('No');
            $table->string('Kode');
            $table->string('Nama_Pelajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pelajaran_nabilla');
    }
};
