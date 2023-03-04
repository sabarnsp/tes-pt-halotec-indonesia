<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    
    protected $table = 'pasien';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array[]
     */
    protected $fillable = [
        'nama_ibu','usia_ibu', 'usia_kehamilan', 'gender_bayi', 'panjang_bayi', 'berat_bayi', 'tanggal_persalinan', 'jam_persalinan', 'proses_partus', 'alamat', 'nama_ayah', 'no_telefon_darurat', 'anak_ke_berapa'
    ];

    protected $guards = ['id'];
}
