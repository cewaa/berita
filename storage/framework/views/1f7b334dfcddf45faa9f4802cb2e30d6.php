<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <h1 class="text-center text-purple mb-4"><?php echo e($berita->judul); ?></h1>

        <div class="card shadow-lg border-0 rounded">
            <div class="card-header bg-purple text-white">
                <h6 class="mb-0">Ditulis oleh: <?php echo e($berita->penulis); ?></h6>
                <p class="mb-0"><strong>Tanggal: </strong><?php echo e($berita->created_at->format('d M Y')); ?></p>
            </div>
            <div class="card-body">
                <p><?php echo e($berita->konten); ?></p> <!-- Menampilkan konten berita penuh -->
            </div>
        </div>

        <!-- Tombol kembali ke Dashboard -->
        <div class="text-center mt-4">
            <a class="btn btn-primary shadow" href="<?php echo e(route('dashboard')); ?>">Kembali ke Dashboard</a>
        </div>
    </div>

    <style>
        .bg-purple {
            background-color: #6f42c1; /* Warna ungu untuk header kartu */
        }
        .text-purple {
            color: #6f42c1; /* Warna ungu untuk judul */
        }
        .card {
            transition: transform 0.2s, box-shadow 0.2s;
            border-radius: 15px; /* Sudut yang lebih halus pada kartu */
        }
        .card:hover {
            transform: translateY(-5px); /* Efek mengangkat saat hover */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Bayangan lebih dalam pada hover */
        }
        .btn-primary {
            background-color: #6f42c1; /* Warna ungu untuk tombol */
            border: none; /* Menghilangkan border tombol */
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background-color: #5a2b9c; /* Warna gelap saat hover */
            transform: translateY(-3px); /* Efek mengangkat saat hover pada tombol */
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekSela-38d6e138fb6cba085db8a9a0d7955aa465c4a9b6\resources\views/userberita.blade.php ENDPATH**/ ?>