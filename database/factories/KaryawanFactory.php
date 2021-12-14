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
            'handphone' => $this->faker->phoneNumber(),
            'tanggal_masuk' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'user_id' => \App\Models\User::factory()->create()->id
        ];
    }
}
