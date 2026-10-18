<?php $__env->startSection('title', 'Quản lý phòng chiếu'); ?>
<?php $__env->startSection('content'); ?>
<section class="admin-page">
<?php echo $__env->make('admin.m3-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="section-heading"><div><span class="eyebrow">KHÔNG GIAN TRẢI NGHIỆM</span><h1>Phòng chiếu & ghế</h1><p class="muted"><?php echo e($phongs->total()); ?> phòng phù hợp</p></div><a class="btn" href="<?php echo e(route('admin.phong-chieu.create')); ?>">+ Thêm phòng</a></div>
<form class="filter-bar" method="GET">
<label class="sr-only" for="q">Tên phòng</label><input id="q" name="q" value="<?php echo e(request('q')); ?>" placeholder="Tìm tên phòng" maxlength="100">
<label class="sr-only" for="dia_diem_id">Rạp</label><select id="dia_diem_id" name="dia_diem_id"><option value="">Tất cả rạp</option><?php $__currentLoopData = $raps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($rap->id); ?>" <?php if(request('dia_diem_id') == $rap->id): echo 'selected'; endif; ?>><?php echo e($rap->ten_dia_diem); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
<label class="sr-only" for="trang_thai">Trạng thái</label><select id="trang_thai" name="trang_thai"><option value="">Tất cả trạng thái</option><option value="hoat_dong" <?php if(request('trang_thai') === 'hoat_dong'): echo 'selected'; endif; ?>>Hoạt động</option><option value="bao_tri" <?php if(request('trang_thai') === 'bao_tri'): echo 'selected'; endif; ?>>Bảo trì</option></select>
<button class="btn">Lọc</button><a href="<?php echo e(route('admin.phong-chieu.index')); ?>">Đặt lại</a>
</form>
<div class="table-wrap"><table class="m3-table"><thead><tr><th>Phòng</th><th>Rạp</th><th>Loại</th><th>Số ghế</th><th>Số suất</th><th>Trạng thái</th><th>Thao tác</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $phongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><a href="<?php echo e(route('admin.phong-chieu.show', $phong)); ?>"><?php echo e($phong->ten_phong); ?></a></td><td><?php echo e($phong->diaDiem->ten_dia_diem); ?></td><td><?php echo e($phong->loai_phong === 'san_khau' ? 'Sân khấu' : $phong->loai_phong); ?></td><td><?php echo e($phong->ghe_ngois_count); ?></td><td><?php echo e($phong->suats_count); ?></td><td><?php echo e($phong->trang_thai === 'hoat_dong' ? 'Hoạt động' : 'Bảo trì'); ?></td><td><div class="m3-actions"><a href="<?php echo e(route('admin.phong-chieu.show', $phong)); ?>">Sơ đồ ghế</a><a href="<?php echo e(route('admin.phong-chieu.edit', $phong)); ?>">Sửa</a><form method="POST" action="<?php echo e(route('admin.phong-chieu.destroy', $phong)); ?>" onsubmit="return confirm('Xóa phòng và toàn bộ ghế chưa sử dụng?')"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button class="btn btn-small btn-outline">Xóa</button></form></div></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="7">Chưa có phòng phù hợp.</td></tr><?php endif; ?>
</tbody></table></div>
<?php echo $__env->make('partials.pagination', ['paginator' => $phongs], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/admin/phong_chieu/index.blade.php ENDPATH**/ ?>