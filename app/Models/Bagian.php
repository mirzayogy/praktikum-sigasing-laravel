<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;

    protected $table = 'bagian';
    protected $fillable = [
        'nama_bagian',
        'karyawan_id',
        'lokasi_id',
    ];

    public function karyawan(){
        return $this->belongsTo(Karyawan::class);
    }

    public function lokasi(){
        return $this->belongsTo(Lokasi::class);
    }
}
