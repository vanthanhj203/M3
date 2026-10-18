<?php $__env->startSection('title', 'Quản lý tài khoản'); ?>
<?php $__env->startSection('content'); ?>
<section class="admin-page">
<div class="section-heading"><div><span class="eyebrow">QUẢN TRỊ HỆ THỐNG</span><h1>Quản lý tài khoản</h1><p class="muted"><?php echo e($users->total()); ?> tài khoản phù hợp</p></div><a class="btn" href="<?php echo e(route('admin.users.create')); ?>">+ Thêm tài khoản</a></div>
<form class="filter-bar" method="GET">
<label class="sr-only" for="q">Tìm tài khoản</label><input id="q" name="q" value="<?php echo e(request('q')); ?>" placeholder="Tìm theo tên hoặc email" maxlength="100">
<label class="sr-only" for="vai_tro">Vai trò</label><select id="vai_tro" name="vai_tro"><option value="">Tất cả vai trò</option><option value="admin" <?php if(request('vai_tro') === 'admin'): echo 'selected'; endif; ?>>Admin</option><option value="user" <?php if(request('vai_tro') === 'user'): echo 'selected'; endif; ?>>User</option></select>
<button class="btn">Lọc</button><a href="<?php echo e(route('admin.users.index')); ?>">Đặt lại</a></form>
<div class="table-wrap"><table><thead><tr><th>Họ tên</th><th>Email</th><th>Điện thoại</th><th>Vai trò</th><th>Ngày tạo</th><th>Thao tác</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><a href="<?php echo e(route('admin.users.show', $user)); ?>"><?php echo e($user->ho_ten); ?></a><?php if($user->is(auth()->user())): ?> <small class="muted">(bạn)</small><?php endif; ?></td><td><?php echo e($user->email); ?></td><td><?php echo e($user->so_dien_thoai ?? '—'); ?></td><td><span class="role-badge <?php echo e($user->isAdmin() ? 'role-admin' : ''); ?>"><?php echo e($user->isAdmin() ? 'Admin' : 'User'); ?></span></td><td><?php echo e($user->created_at?->format('d/m/Y')); ?></td><td class="actions"><a href="<?php echo e(route('admin.users.show', $user)); ?>">Xem</a><a href="<?php echo e(route('admin.users.edit', $user)); ?>">Sửa</a></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="6" class="empty-state">Không có tài khoản phù hợp.</td></tr><?php endif; ?>
</tbody></table></div>
<?php echo $__env->make('partials.pagination', ['paginator' => $users], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/admin/users/index.blade.php ENDPATH**/ ?>