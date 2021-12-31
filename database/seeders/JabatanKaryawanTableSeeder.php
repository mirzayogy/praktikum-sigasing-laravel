<?php

namespace Database\Seeders;

use App\Models\JabatanKaryawan;
use Illuminate\Database\Seeder;

class JabatanKaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JabatanKaryawan::truncate();





        JabatanKaryawan::insert([
            ['karyawan_id' => 3, 'jabatan_id' => 5, 'tanggal_mulai' => '2013-03-03', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 3, 'jabatan_id' => 4, 'tanggal_mulai' => '2014-04-01', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 3, 'jabatan_id' => 4, 'tanggal_mulai' => '2014-04-01', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 4, 'jabatan_id' => 5, 'tanggal_mulai' => '2014-04-04', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 3, 'jabatan_id' => 3, 'tanggal_mulai' => '2015-05-04', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 4, 'jabatan_id' => 4, 'tanggal_mulai' => '2015-05-05', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 5, 'jabatan_id' => 5, 'tanggal_mulai' => '2015-05-05', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 3, 'jabatan_id' => 2, 'tanggal_mulai' => '2015-06-01', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 4, 'jabatan_id' => 3, 'tanggal_mulai' => '2015-06-02', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 5, 'jabatan_id' => 4, 'tanggal_mulai' => '2015-06-03', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 6, 'jabatan_id' => 5, 'tanggal_mulai' => '2015-06-06', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 3, 'jabatan_id' => 1, 'tanggal_mulai' => '2017-07-01', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 4, 'jabatan_id' => 2, 'tanggal_mulai' => '2017-07-02', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 5, 'jabatan_id' => 3, 'tanggal_mulai' => '2017-07-02', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 6, 'jabatan_id' => 4, 'tanggal_mulai' => '2017-07-02', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 7, 'jabatan_id' => 5, 'tanggal_mulai' => '2017-07-07', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 7, 'jabatan_id' => 4, 'tanggal_mulai' => '2018-08-02', 'created_at' => now(), 'updated_at' => now()],
            ['karyawan_id' => 8, 'jabatan_id' => 5, 'tanggal_mulai' => '2018-08-08', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
