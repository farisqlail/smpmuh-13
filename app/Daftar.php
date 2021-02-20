<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
        'name',
        'address',
        'birth',
        'from',
        'father',
        'number-father',
        'mother',
        'number-mother'
    ];
}