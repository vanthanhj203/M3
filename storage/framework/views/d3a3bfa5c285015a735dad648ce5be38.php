<nav class="m3-nav" aria-label="Quản lý cơ sở và lịch">
    <a href="<?php echo e(route('admin.dia-diem.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.dia-diem.*')]); ?>">Rạp / địa điểm</a>
    <a href="<?php echo e(route('admin.phong-chieu.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.phong-chieu.*')]); ?>">Phòng & ghế</a>
    <a href="<?php echo e(route('admin.suat.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => request()->routeIs('admin.suat.*')]); ?>">Suất chiếu</a>
</nav>
<?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/admin/m3-nav.blade.php ENDPATH**/ ?>