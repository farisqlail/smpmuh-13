<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriEkstra extends Model
{
    protected $fillable = [
        'nama_kategori'
    ];

    public function ekstra(){

        return $this->hasMany(Ekstra::class, 'kategori_id', 'id');
    }
}
