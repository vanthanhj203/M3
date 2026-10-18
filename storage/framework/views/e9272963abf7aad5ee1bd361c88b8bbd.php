<?php $__env->startSection('title', 'Đăng nhập'); ?>
<?php $__env->startSection('content'); ?>
<div class="auth-wrap"><section class="form-card">
    <span class="eyebrow">CHÀO MỪNG TRỞ LẠI</span><h1>Đăng nhập</h1><p class="muted">Một tài khoản cho mọi trải nghiệm.</p>
    <form method="POST" action="<?php echo e(route('login.store')); ?>"><?php echo csrf_field(); ?>
        <label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" value="<?php echo e(old('email')); ?>" required autofocus maxlength="255">
        <label for="password">Mật khẩu</label><input id="password" name="password" type="password" autocomplete="current-password" required>
        <label class="checkbox"><input name="remember" type="checkbox" value="1">Ghi nhớ đăng nhập</label>
        <button class="btn btn-block">Đăng nhập</button>
    </form>
    <p class="form-foot">Chưa có tài khoản? <a href="<?php echo e(route('register')); ?>">Đăng ký ngay</a></p>
</section></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/auth/login.blade.php ENDPATH**/ ?>