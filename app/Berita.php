<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul', 'slug', 'image', 'deskripsi'];  
    
    public function comment(){

        return $this->hasMany(Comment::class);
    }
}
