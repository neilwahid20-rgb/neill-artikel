

<?php $__env->startSection('title', 'Tambah Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Tambah Artikel</h2>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo $__env->make('posts._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon1\www\neill-artikel\resources\views/posts/create.blade.php ENDPATH**/ ?>