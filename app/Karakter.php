<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karakter extends Model
{
    protected $fillable = [
        'namaKarakter',
        'deskripsiKarakter'
    ];
}
