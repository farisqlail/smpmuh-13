<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'nama',
        'kelas',
        'namaAcara',
        'deskripsi',
        'jenis',
        'image'
    ];
}
