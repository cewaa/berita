@extends('layout')

@section('content')
    <h1>Daftar Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary">Buat Berita Baru</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th width="280px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ $berita->penulis }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('berita.show', $berita->id) }}">Lihat</a>
                        <a class="btn btn-primary" href="{{ route('berita.edit', $berita->id) }}">Edit</a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
