<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::truncate();

        Jabatan::create([
            'nama_jabatan' => 'System Analyst',
            'gapok_jabatan' => 2400000,
            'tunjangan_jabatan' => 500000,
            'uang_makan_perhari' => 40000
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Project Manager',
            'gapok_jabatan' => 2300000,
            'tunjangan_jabatan' => 450000,
            'uang_makan_perhari' => 38000
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Senior Programmer',
            'gapok_jabatan' => 2200000,
            'tunjangan_jabatan' => 400000,
            'uang_makan_perhari' => 36000
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Junior Programmer',
            'gapok_jabatan' => 2100000,
            'tunjangan_jabatan' => 350000,
            'uang_makan_perhari' => 34000
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Intern',
            'gapok_jabatan' => 1000000,
            'tunjangan_jabatan' => 100000,
            'uang_makan_perhari' => 20000
        ]);

    }
}
