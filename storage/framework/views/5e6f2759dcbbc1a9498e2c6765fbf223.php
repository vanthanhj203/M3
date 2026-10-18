<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Khám phá phim & sự kiện'); ?> ·VePhim/SuKien</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/m3.css')); ?>">
</head>
<body>
<a class="skip-link" href="#main">Đến nội dung chính</a>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<main id="main" class="container">
    <?php if(session('success')): ?><div class="alert success" role="status"><?php echo e(session('success')); ?></div><?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert error" role="alert"><strong>Vui lòng kiểm tra lại:</strong><ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>

<?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/layouts/app.blade.php ENDPATH**/ ?>