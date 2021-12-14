<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable =[
        'nik',
        'handpone',
        'tanggal_masuk',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
