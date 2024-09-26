@extends('layout')

@section('content')
    <h1>Dashboard Berita</h1>
    <p>Berikut adalah berita yang telah dipublikasikan:</p>

    <div class="row">
        @foreach ($beritas as $berita)
            <div class="col-md-4 mb-4">
                <a href="{{ route('userberita.show', $berita->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Ditulis oleh: {{ $berita->penulis }}</h6>
                            <p class="card-text">{{ Str::limit($berita->konten, 100) }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Diterbitkan pada: {{ $berita->created_at->format('d M Y') }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
