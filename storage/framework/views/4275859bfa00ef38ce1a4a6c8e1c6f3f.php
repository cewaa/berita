

<?php $__env->startSection('content'); ?>
    <h1>Buat Berita Baru</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('berita.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita">
        </div>

        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" name="konten" placeholder="Masukkan konten berita"></textarea>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" class="form-control" placeholder="Masukkan nama penulis">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a class="btn btn-secondary" href="<?php echo e(route('berita.index')); ?>">Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectSela\resources\views/berita/create.blade.php ENDPATH**/ ?>