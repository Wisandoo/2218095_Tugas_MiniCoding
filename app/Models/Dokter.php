<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'tb_dokter'; // Nama tabel dalam basis data

    protected $fillable = ['nama', 'spesialisasi', 'no_str', 'email', 'alamat', 'password']; // Kolom yang dapat diisi
}
