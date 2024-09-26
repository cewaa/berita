@extends('layout')

@section('navbar')
<nav class="navbar navbar-expand-lg" style="background-color: #6f42c1;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">berita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/register') }}">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-white">Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Terjadi beberapa masalah:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="background-color: #6f42c1; border: none;">
                <div class="card-body">
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" name="password" required placeholder="Masukkan password Anda">
                        </div>
                        <button type="submit" class="btn btn-light w-100">Login</button>
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #6f42c1; /* Warna latar belakang ungu */
    }
</style>
@endsection
