<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeskripsiKegiatan extends Model
{
    protected $fillable = [
        'deskripsi',
        'image'
    ];
}
