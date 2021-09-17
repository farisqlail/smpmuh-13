<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeskripsiBeasiswa extends Model
{
    protected $fillable = [
        'image',
        'keterangan'
    ];
}
