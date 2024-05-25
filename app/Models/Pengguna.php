<?php

namespace App\Models;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'tb_pengguna';

    protected $fillable = [
        'Nama',
        'No_HP',
        'Jenis_Kelamin',
        'Email',
        'Kota',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}

