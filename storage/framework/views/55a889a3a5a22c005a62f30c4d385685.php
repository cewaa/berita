

<?php $__env->startSection('content'); ?>
    <h1>Edit Berita</h1>

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

    <form action="<?php echo e(route('berita.update', $berita->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="<?php echo e($berita->judul); ?>" class="form-control" placeholder="Masukkan judul berita">
        </div>

        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" name="konten" placeholder="Masukkan konten berita"><?php echo e($berita->konten); ?></textarea>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="<?php echo e($berita->penulis); ?>" class="form-control" placeholder="Masukkan nama penulis">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a class="btn btn-secondary" href="<?php echo e(route('berita.index')); ?>">Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectSela\resources\views/berita/edit.blade.php ENDPATH**/ ?>