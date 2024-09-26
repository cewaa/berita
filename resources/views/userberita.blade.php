@extends('layout')

@section('content')
    <div class="container my-5">
        <h1 class="text-center text-purple mb-4">{{ $berita->judul }}</h1>

        <div class="card shadow-sm border-light">
            <div class="card-header bg-light">
                <h6 class="text-muted">Ditulis oleh: {{ $berita->penulis }}</h6>
                <p class="mb-0"><strong>Tanggal: </strong>{{ $berita->created_at->format('d M Y') }}</p>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $berita->konten }}</p> <!-- Menampilkan konten berita penuh -->
            </div>
        </div>

        <!-- Tombol kembali ke Dashboard -->
        <div class="text-center mt-4">
            <a class="btn btn-secondary" href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
        </div>
    </div>

    <style>
        body {
            background-color: #f5f5f5; /* Latar belakang halaman yang lebih lembut */
        }
        .text-purple {
            color: #6f42c1; /* Warna ungu untuk teks */
        }
        .card {
            border-radius: 10px; /* Sudut yang lebih halus pada kartu */
            transition: box-shadow 0.2s;
        }
        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* Bayangan lebih dalam pada hover */
        }
        .btn-secondary {
            background-color: #6c757d; /* Warna tombol */
            border: none; /* Menghilangkan border default */
            border-radius: 5px; /* Sudut tombol yang lebih halus */
            transition: background-color 0.2s;
        }
        .btn-secondary:hover {
            background-color: #5a6268; /* Warna tombol saat hover */
        }
    </style>
@endsection
