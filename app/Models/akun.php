<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $table = 'tb_akun';

    protected $fillable = [
        'email',
        'password',
        // tambahkan field lain yang sesuai dengan tabel tb_akun
    ];

    // Jika password di-hash menggunakan bcrypt
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
