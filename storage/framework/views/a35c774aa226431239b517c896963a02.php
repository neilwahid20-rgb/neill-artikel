

<?php $__env->startSection('title', 'Edit Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Edit Artikel</h2>

    <form action="<?php echo e(route('posts.update', $post)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('posts._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon1\www\neill-artikel\resources\views/posts/edit.blade.php ENDPATH**/ ?>