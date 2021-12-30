<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Karyawan;
use Faker\Generator as Faker;


class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->numberBetween(1000, 2000),
            'nama_lengkap' => $this->faker->name(),
            'handphone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'tanggal_masuk' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'pengguna_id' => \App\Models\Pengguna::factory()->create()->id
        ];
    }
}
