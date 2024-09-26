<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Izinkan mass assignment untuk kolom ini
    protected $fillable = ['judul', 'konten', 'penulis'];
}
