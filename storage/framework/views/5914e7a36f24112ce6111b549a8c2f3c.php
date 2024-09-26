

<?php $__env->startSection('content'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:wght@400&display=swap" rel="stylesheet">
    
    <div class="container my-5">
        <h1 class="text-center text-purple mb-4" style="font-family: 'Poppins', sans-serif;">Dashboard Berita</h1>
        <p class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">Berikut adalah berita yang telah dipublikasikan:</p>

        <div class="row">
            <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <a href="<?php echo e(route('userberita.show', $berita->id)); ?>" style="text-decoration: none; color: inherit;">
                        <div class="card h-100 shadow-lg border-0" style="border-radius: 12px;">
                            <div class="card-body" style="background: linear-gradient(to bottom, #ffffff, #f9f9f9);">
                                <h5 class="card-title text-purple" style="font-family: 'Poppins', sans-serif;"><?php echo e($berita->judul); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted" style="font-family: 'Roboto', sans-serif; font-style: italic;">Ditulis oleh: <?php echo e($berita->penulis); ?></h6>
                                <p class="card-text" style="font-family: 'Roboto', sans-serif; line-height: 1.6;"><?php echo e(Str::limit($berita->konten, 100)); ?></p>
                            </div>
                            <div class="card-footer text-muted" style="background-color: #f1f1f1; border-top: 2px solid #6f42c1;">
                                <small style="font-family: 'Roboto', sans-serif;">Diterbitkan pada: <?php echo e($berita->created_at->format('d M Y')); ?></small>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <style>
        body {
            background-color: #ffffff; /* Latar belakang putih */
            font-family: 'Roboto', sans-serif; /* Font umum untuk body */
        }
        .text-purple {
            color: #4b3b80; /* Warna ungu yang lebih gelap */
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s; /* Transisi lebih halus */
            overflow: hidden; /* Menghindari overflow pada sudut kartu */
        }
        .card:hover {
            transform: translateY(-5px); /* Efek mengangkat saat hover */
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3); /* Bayangan lebih dalam pada hover */
        }
        .card-title {
            font-weight: bold; /* Menebalkan judul */
            font-size: 1.25rem; /* Ukuran font judul lebih besar */
        }
        .card-subtitle {
            font-size: 0.95rem; /* Ukuran font subtitle */
        }
        .card-text {
            font-size: 1rem; /* Ukuran font konten lebih besar */
            line-height: 1.6; /* Jarak antar baris yang lebih baik */
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectSela\resources\views/dashboard.blade.php ENDPATH**/ ?>