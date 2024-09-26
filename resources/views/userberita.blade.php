@extends('layout')

@section('content')
    <h1>{{ $berita->judul }}</h1>

    <div class="card">
        <div class="card-header">
            <h6>Ditulis oleh: {{ $berita->penulis }}</h6>
            <p><strong>Tanggal: </strong>{{ $berita->created_at->format('d M Y') }}</p>
        </div>
        <div class="card-body">
            <p>{{ $berita->konten }}</p> <!-- Menampilkan konten berita penuh -->
        </div>
    </div>

    <!-- Tombol kembali ke Dashboard -->
    <a class="btn btn-secondary mt-3" href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
@endsection
