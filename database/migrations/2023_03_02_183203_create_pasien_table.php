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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->integer('usia_ibu');
            $table->integer('usia_kehamilan');
            $table->string('gender_bayi');
            $table->integer('panjang_bayi');
            $table->integer('berat_bayi');
            $table->date('tanggal_persalinan');
            $table->time('jam_persalinan');
            $table->enum('proses_partus', ['normal', 'dibantu alat', 'caesar', 'waterbirth']);
            $table->enum('kondisi_bayi', ['sehat', 'cacat', 'meninggal']);
            $table->longText('alamat');
            $table->string('nama_ayah');
            $table->char('no_telefon_darurat', 20);
            $table->integer('anak_ke_berapa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
