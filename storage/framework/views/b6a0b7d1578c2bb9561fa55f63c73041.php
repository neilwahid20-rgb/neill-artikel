<?php echo csrf_field(); ?>

<label for="category_id">Kategori</label>
<select id="category_id" name="category_id">
    <option value="">- Tanpa kategori -</option>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>" <?php if(old('category_id', $post->category_id ?? '') == $category->id): echo 'selected'; endif; ?>>
            <?php echo e($category->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small class="error"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<label for="title">Judul</label>
<input type="text" id="title" name="title" value="<?php echo e(old('title', $post->title ?? '')); ?>">
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small class="error"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<label for="content">Isi Artikel</label>
<textarea id="content" name="content" rows="8"><?php echo e(old('content', $post->content ?? '')); ?></textarea>
<?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small class="error"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<p>
    <button type="submit">Simpan</button>
    <a href="<?php echo e(route('posts.index')); ?>">Batal</a>
</p><?php /**PATH C:\laragon1\www\neill-artikel\resources\views/posts/_form.blade.php ENDPATH**/ ?>