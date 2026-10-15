

<?php $__env->startSection('title', 'Daftar Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <p><a class="btn" href="<?php echo e(route('posts.create')); ?>">+ Artikel Baru</a></p>

    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article>
            <h2><a href="<?php echo e(route('posts.show', $post)); ?>"><?php echo e($post->title); ?></a></h2>
            <small>Kategori: <?php echo e($post->category?->name ?? 'Tanpa kategori'); ?></small>
            <p><?php echo e(Str::limit($post->content, 120)); ?></p>
            <small><?php echo e($post->created_at->format('d M Y')); ?></small> |
            <a href="<?php echo e(route('posts.edit', $post)); ?>">Edit</a>
            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus artikel ini?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Hapus</button>
            </form>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Belum ada artikel.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon1\www\neill-artikel\resources\views/posts/index.blade.php ENDPATH**/ ?>