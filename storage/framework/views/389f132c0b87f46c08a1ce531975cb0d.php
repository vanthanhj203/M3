<header class="site-header">
    <div class="container header-inner">
        <a href="<?php echo e(route('home')); ?>" class="brand"><span class="brand-icon">V</span><span>VePhim</span><span>SuKien</span></a>
        <nav aria-label="Điều hướng chính">
            <a href="<?php echo e(route('home')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('home') && !request('loai')]); ?>">Khám phá</a>
            <a href="<?php echo e(route('home', ['loai' => 'phim'])); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request('loai') === 'phim']); ?>">Phim</a>
            <a href="<?php echo e(route('home', ['loai' => 'su_kien'])); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request('loai') === 'su_kien']); ?>">Sự kiện</a>
           <?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->isAdmin()): ?>
        <a href="<?php echo e(route('admin.users.index')); ?>"
           class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.users.*')]); ?>">
            Quản lý tài khoản
        </a>

        <a href="<?php echo e(route('admin.dia-diem.index')); ?>"
           class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.dia-diem.*')]); ?>">
            Quản lý rạp
        </a>
        <a href="<?php echo e(route('admin.phong-chieu.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.phong-chieu.*') || request()->routeIs('admin.ghe.*')]); ?>">Phòng & ghế</a>
        <a href="<?php echo e(route('admin.suat.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.suat.*')]); ?>">Suất chiếu</a>
    <?php endif; ?>
<?php endif; ?>
        </nav>
        <div class="account-nav">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('account')); ?>" class="account-name"><?php echo e(auth()->user()->ho_ten); ?></a>
                <form method="POST" action="<?php echo e(route('logout')); ?>"><?php echo csrf_field(); ?><button class="btn btn-small btn-outline">Đăng xuất</button></form>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Đăng nhập</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-small">Đăng ký</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/partials/header.blade.php ENDPATH**/ ?>