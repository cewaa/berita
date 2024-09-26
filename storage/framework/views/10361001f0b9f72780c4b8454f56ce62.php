<?php $__env->startSection('content'); ?>
    <h1>Daftar Berita</h1>
    <a href="<?php echo e(route('berita.create')); ?>" class="btn btn-primary">Buat Berita Baru</a>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

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
            <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($berita->judul); ?></td>
                    <td><?php echo e($berita->penulis); ?></td>
                    <td>
                        <a class="btn btn-info" href="<?php echo e(route('berita.show', $berita->id)); ?>">Lihat</a>
                        <a class="btn btn-primary" href="<?php echo e(route('berita.edit', $berita->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('berita.destroy', $berita->id)); ?>" method="POST" style="display:inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjekSela-38d6e138fb6cba085db8a9a0d7955aa465c4a9b6\resources\views/berita/index.blade.php ENDPATH**/ ?>