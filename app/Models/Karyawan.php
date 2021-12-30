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

    public function scopeMasa($query)
    {
        return $query->addSelect(DB::raw('*, TIMESTAMPDIFF(YEAR, tanggal_masuk, CURDATE()) masa_kerja_tahun'));
    }
}
