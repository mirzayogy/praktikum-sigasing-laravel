<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\Pengguna;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengguna::truncate();

        $pengguna_id = Pengguna::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'peran' => 'ADMIN',
            'login_terakhir' => null
        ])->id;

        Karyawan::create([
            'nik' => '0001',
            'nama_lengkap' => 'Nama Admin',
            'handphone' => '0801',
            'email' => 'admin@mail.com',
            'tanggal_masuk' => now(),
            'pengguna_id' => $pengguna_id
        ]);

        $pengguna_id = Pengguna::create([
            'username' => 'user',
            'password' => bcrypt('user'),
            'peran' => 'USER',
            'login_terakhir' => null
        ])->id;

        Karyawan::create([
            'nik' => '0002',
            'nama_lengkap' => 'Nama User',
            'handphone' => '0802',
            'email' => 'user@mail.com',
            'tanggal_masuk' => now(),
            'pengguna_id' => $pengguna_id
        ]);
    }
}
