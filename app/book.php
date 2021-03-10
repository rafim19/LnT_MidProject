<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable=[
        'judul_buku',
        'penulis',
        'halaman',
        'tahun_terbit'
    ];
}
