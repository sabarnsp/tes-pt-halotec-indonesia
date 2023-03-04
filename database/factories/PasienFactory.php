<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_ibu' => $this->faker->unique()->name,
            'usia_ibu' => $this->faker->randomDigit() ,
            'usia_kehamilan' => $this->faker->randomDigit() ,
            'gender_bayi' => "Laki-laki",
            'panjang_bayi' => $this->faker->randomDigit() ,
            'berat_bayi' => $this->faker->randomDigit() ,
            'tanggal_persalinan' => $this->faker->date() ,
            'jam_persalinan' => $this->faker->time(),
            'proses_partus' => "Normal",
            'kondisi_bayi' => "Sehat",
            'alamat' => $this->faker->city() ,
            'nama_ayah' => $this->faker->name() ,
            'no_telefon_darurat' => $this->faker->phoneNumber() ,
            'anak_ke_berapa' => $this->faker->randomDigit() ,
        ];
    }
}