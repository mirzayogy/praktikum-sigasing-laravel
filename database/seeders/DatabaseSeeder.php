<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LokasiTableSeeder::class);
        $this->call(JabatanTableSeeder::class);
        $this->call(PenggunaSeeder::class);
        $this->call(KaryawanTableSeeder::class);
        $this->call(BagianTableSeeder::class);
        $this->call(JabatanKaryawanTableSeeder::class);
    }
}
