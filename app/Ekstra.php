<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstra extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_ekstra',
        'slug',
        'deskripsi'
    ];

    public function kategori(){

        return $this->belongsTo(KategoriEkstra::class, 'kategori_id');
    }
}
