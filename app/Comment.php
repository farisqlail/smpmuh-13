<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'berita_id',
        'name',
        'content',
        'email'
    ];

    public function berita(){

        return $this->belongsTo(Berita::class);
    }
}
