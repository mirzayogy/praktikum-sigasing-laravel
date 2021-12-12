<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokasi::truncate();

        Lokasi::create([
            'nama_lokasi' => 'Kabupaten Banjar'
        ]);
        Lokasi::create([
            'nama_lokasi' => 'Kota Banjarbaru'
        ]);
        Lokasi::create([
            'nama_lokasi' => 'Kota Banjarmasin'
        ]);
    }
}
