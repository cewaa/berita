<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class UserBeritaController extends Controller
{
    // Metode untuk menampilkan berita berdasarkan ID
    public function show($id)
    {
        // Mencari berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Mengembalikan view dengan data berita
        return view('userberita', compact('berita'));
    }
}
