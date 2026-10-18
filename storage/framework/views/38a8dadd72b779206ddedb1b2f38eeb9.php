<?php $__env->startSection('title', 'Quản lý rạp'); ?>

<?php $__env->startSection('content'); ?>
<section class="admin-page">
<?php echo $__env->make('admin.m3-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="section-heading">
        <div>
            <span class="eyebrow">QUẢN TRỊ HỆ THỐNG</span>
            <h1>Quản lý rạp</h1>
            <p class="muted"><?php echo e($raps->total()); ?> rạp phù hợp</p>
        </div>

        <a class="btn" href="<?php echo e(route('admin.dia-diem.create')); ?>">
            + Thêm rạp
        </a>
    </div>

    <form class="filter-bar"
          method="GET"
          action="<?php echo e(route('admin.dia-diem.index')); ?>">
        <label class="sr-only" for="q">Tìm rạp</label>
        <input id="q" name="q"
               value="<?php echo e(request('q')); ?>"
               placeholder="Tên rạp, địa chỉ, tỉnh/thành"
               maxlength="100">

        <label class="sr-only" for="trang_thai">Trạng thái</label>
        <select id="trang_thai" name="trang_thai">
            <option value="">Tất cả trạng thái</option>
            <option value="hoat_dong"
                <?php if(request('trang_thai') === 'hoat_dong'): echo 'selected'; endif; ?>>
                Hoạt động
            </option>
            <option value="tam_dung"
                <?php if(request('trang_thai') === 'tam_dung'): echo 'selected'; endif; ?>>
                Tạm dừng
            </option>
        </select>

        <button class="btn" type="submit">Tìm kiếm</button>
        <a href="<?php echo e(route('admin.dia-diem.index')); ?>">Đặt lại</a>
    </form>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Tên rạp</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Số phòng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $raps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($rap->ten_dia_diem); ?></td>
                        <td>
                            <?php echo e($rap->dia_chi); ?>,
                            <?php echo e($rap->tinh_thanh); ?>

                        </td>
                        <td><?php echo e($rap->so_dien_thoai ?: '—'); ?></td>
                        <td><?php echo e($rap->phong_chieus_count); ?></td>
                        <td>
                            <?php echo e($rap->trang_thai === 'hoat_dong'
                                ? 'Hoạt động' : 'Tạm dừng'); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(route('admin.dia-diem.edit', $rap)); ?>">
                                Sửa
                            </a>

                            <a href="<?php echo e(route('admin.dia-diem.map', $rap)); ?>">Bản đồ</a>
                            <a href="<?php echo e(route('admin.phong-chieu.index', ['dia_diem_id' => $rap->id])); ?>">Phòng</a>

                            <form method="POST"
                                  action="<?php echo e(route('admin.dia-diem.destroy', $rap)); ?>"
                                  onsubmit="return confirm('Bạn có chắc muốn xóa rạp này?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button class="btn btn-small btn-outline"
                                        type="submit">
                                    Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="empty-state">
                            Không tìm thấy rạp.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $__env->make('partials.pagination', ['paginator' => $raps], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/admin/dia_diem/index.blade.php ENDPATH**/ ?>