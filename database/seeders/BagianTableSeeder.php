<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Seeder;

class BagianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Bagian::truncate();

        Bagian::create([
            'nama_bagian' => 'Autentikasi',
            'karyawan_id' => 5,
            'lokasi_id' => 1,
        ]);

        Bagian::create([
            'nama_bagian' => 'Data Science',
            'karyawan_id' => 3,
            'lokasi_id' => 1,
        ]);

        Bagian::create([
            'nama_bagian' => 'Backend Developer',
            'karyawan_id' => 6,
            'lokasi_id' => 2,
        ]);
    }
}
