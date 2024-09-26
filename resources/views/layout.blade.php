<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #c58ff3; /* Latar belakang gelap */
        }
        .navbar {
            background-color: #6f42c1; /* Warna ungu untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* Teks putih untuk navbar */
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #e0c1e7 !important; /* Teks saat hover */
        }
        .alert {
            margin-top: 20px; /* Jarak antara alert dan navbar */
        }
        .container {
            margin-top: 50px; /* Jarak antara navbar dan konten */
        }
        @media (max-width: 576px) {
            .navbar {
                text-align: center; /* Rata tengah pada navbar untuk layar kecil */
            }
            .container {
                margin-top: 30px; /* Mengurangi margin untuk layar kecil */
            }
        }
    </style>
    <title>Your App Title</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- Tambahkan ml-auto untuk mengatur posisi link -->
                <!-- Link ke Laman Admin (hanya untuk admin) -->
                @if(Auth::check() && Auth::user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berita.index') }}">Laman Admin</a>
                    </li>
                @endif

                <!-- Link ke halaman login (hanya jika user belum login) -->
                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
                
                <!-- Link ke logout (jika user sudah login) -->
                @if(Auth::check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-danger">Logout</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
