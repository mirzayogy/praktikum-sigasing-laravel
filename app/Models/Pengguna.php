<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pengguna';

    protected $fillable = [
        'username',
        'password',
        'peran',
        'login_terakhir',
    ];

    protected $hidden = [
        'password',
    ];


    public function karyawan()
    {
        return $this->hasOne(Karyawan::class);
    }
}
