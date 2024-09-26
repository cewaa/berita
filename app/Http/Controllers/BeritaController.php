<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }
    public function dashboard()
{
    $beritas = Berita::all(); // Mengambil semua berita
    return view('dashboard', compact('beritas')); // Menampilkan ke view 'dashboard'
}
public function userShow($id)
{
    $berita = Berita::findOrFail($id); // Ambil berita berdasarkan ID
    return view('userberita', compact('berita')); // Tampilkan ke view 'userberita'
}


    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'penulis' => 'required',
        ]);

        // Simpan ke database
        Berita::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil dibuat.');
    }

    // Menampilkan satu berita berdasarkan id
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    // Menampilkan form untuk edit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    // Mengupdate berita di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'penulis' => 'required',
        ]);

        // Temukan berita yang akan diupdate
        $berita = Berita::findOrFail($id);

        // Update data
        $berita->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil diupdate.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        // Temukan berita yang akan dihapus
        $berita = Berita::findOrFail($id);

        // Hapus berita
        $berita->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('berita.index')
                         ->with('success', 'Berita berhasil dihapus.');
    }
}
