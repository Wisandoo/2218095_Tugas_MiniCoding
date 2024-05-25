<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenyakit extends Model
{
    protected $table = 'data_penyakit'; // Nama tabel dalam basis data

    protected $fillable = ['nama_penyakit', 'deskripsi', 'gejala']; // Kolom yang dapat diisi
}
