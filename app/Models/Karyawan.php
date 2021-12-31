<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable =[
        'nik',
        'nama_lengkap',
        'handpone',
        'email',
        'tanggal_masuk',
        'pengguna_id'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function bagian()
    {
        return $this->hasMany(Bagian::class);
    }

    public function jabatan_karyawan()
    {
        return $this->hasMany(JabatanKaryawan::class);
    }

    public function scopeMasa($query)
    {
        return $query->addSelect(DB::raw('*,
        TIMESTAMPDIFF(YEAR, tanggal_masuk, CURDATE()) masa_kerja_tahun,
        (SELECT J.nama_jabatan FROM jabatan_karyawan JK INNER JOIN jabatan J ON JK.jabatan_id = J.id WHERE JK.karyawan_id = karyawan.id ORDER BY JK.tanggal_mulai DESC LIMIT 1) AS jabatan_terakhir,
        (SELECT tanggal_mulai FROM jabatan_karyawan JK WHERE karyawan_id = karyawan.id ORDER BY JK.tanggal_mulai DESC LIMIT 1) tanggal_mulai_terakhir
        '));
    }
}
