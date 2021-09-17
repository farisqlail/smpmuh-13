<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstra extends Model
{
    protected $fillable = [
        'nama_ekstra',
        'slug',
        'deskripsi'
    ];

}
