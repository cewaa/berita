<?php $__env->startSection('content'); ?>
    <h1><?php echo e($berita->judul); ?></h1>

    <div class="card">
        <div class="card-header">
            <h2>Ditulis oleh: <?php echo e($berita->penulis); ?></h2>
            <p><strong>Tanggal:</strong> <?php echo e($berita->created_at->format('d-m-Y')); ?></p>
        </div>
        <div class="card-body">
            <p><?php echo e($berita->konten); ?></p> <!-- Pastikan konten berita tampil di sini -->
        </div>
    </div>

    <a class="btn btn-secondary" href="<?php echo e(route('berita.index')); ?>">Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekSela-38d6e138fb6cba085db8a9a0d7955aa465c4a9b6\resources\views/berita/show.blade.php ENDPATH**/ ?>