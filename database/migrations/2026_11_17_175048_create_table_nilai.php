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
        Schema::create('table_nilai', function (Blueprint $table) {
            $table->id('id_mk');
            $table->string('No');
            $table->string('Kode_MK');
            $table->string('Mata_Kuliah',150);
            $table->string('SKS');
            $table->string('Nilai_Huruf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_nilai');
    }
};
