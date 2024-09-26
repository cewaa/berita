@extends('layout')

@section('content')
    <div class="container my-5">
        <h1 class="text-center text-purple mb-4">Dashboard Berita</h1>
        <p class="text-center mb-5">Berikut adalah berita yang telah dipublikasikan:</p>

        <div class="row">
            @foreach ($beritas as $berita)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('userberita.show', $berita->id) }}" style="text-decoration: none; color: inherit;">
                        <div class="card h-100 shadow border border-light">
                            <div class="card-body" style="background-color: #f8f9fa;">
                                <h5 class="card-title text-purple">{{ $berita->judul }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted" style="font-style: italic;">Ditulis oleh: {{ $berita->penulis }}</h6>
                                <p class="card-text" style="line-height: 1.5;">{{ Str::limit($berita->konten, 100) }}</p>
                            </div>
                            <div class="card-footer text-muted" style="background-color: #eaeaea; border-top: 2px solid #6f42c1;">
                                <small>Diterbitkan pada: {{ $berita->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .text-purple {
            color: #6f42c1; /* Warna ungu untuk teks */
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px; /* Sudut yang lebih halus pada kartu */
        }
        .card:hover {
            transform: translateY(-5px); /* Efek mengangkat saat hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih dalam pada hover */
        }
        .card-title {
            font-weight: bold; /* Menebalkan judul */
            font-size: 1.2rem; /* Ukuran font judul */
        }
        .card-subtitle {
            font-size: 0.9rem; /* Ukuran font subtitle */
        }
        .card-text {
            font-size: 0.95rem; /* Ukuran font konten */
            line-height: 1.5; /* Jarak antar baris yang lebih baik */
        }
    </style>
@endsection
