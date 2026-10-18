<?php $__env->startSection('content'); ?>
<section class="hero">
    <div class="hero-copy"><span class="eyebrow">MỖI TẤM VÉ, MỘT TRẢI NGHIỆM</span>
        <h1>Hẹn bạn ở<br><em>những khoảnh khắc hay.</em></h1>
        <p>Khám phá phim và sự kiện, tìm lịch phù hợp và lên kế hoạch cho buổi hẹn tiếp theo.</p>
        <a class="btn" href="#kham-pha">Khám phá ngay <span aria-hidden="true">↗</span></a>
    </div>
    <div class="hero-art" aria-hidden="true"><div class="orbit"></div><div class="ticket-art"><span>CINEVIET</span><strong>LET'S<br>GO OUT.</strong><div class="ticket-rule"></div><small>MOVIES & EVENTS</small><div class="barcode"></div></div><span class="art-label">MỘT BUỔI TỐI THẬT KHÁC.</span></div>
</section>
<section id="kham-pha" class="catalog">
    <div class="section-heading"><div><span class="eyebrow">LÊN LỊCH HẸN</span><h2>Phim & sự kiện nổi bật</h2></div><span class="muted"><?php echo e($contents->total()); ?> nội dung</span></div>
    <form method="GET" action="<?php echo e(route('home')); ?>" class="filter-bar">
        <label class="sr-only" for="q">Tìm theo tên</label><input id="q" name="q" value="<?php echo e(request('q')); ?>" placeholder="Tìm phim, sự kiện..." maxlength="100">
        <label class="sr-only" for="loai">Loại nội dung</label><select id="loai" name="loai"><option value="">Tất cả nội dung</option value="phim" <?php if(request('loai') === 'phim'): echo 'selected'; endif; ?>>Phim</option><option value="su_kien" <?php if(request('loai') === 'su_kien'): echo 'selected'; endif; ?>>Sự kiện</option></select>
        <button class="btn">Tìm kiếm</button><a class="muted" href="<?php echo e(route('home')); ?>">Đặt lại</a>
    </form>
    <div class="card-grid">
    <?php $__empty_1 = true; $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="content-card">
            <div class="poster <?php echo e($content->loai_noi_dung === 'phim' ? 'poster-film' : 'poster-event'); ?>">
                <span class="badge"><?php echo e($content->loai_noi_dung === 'phim' ? 'ĐIỆN ẢNH' : 'SỰ KIỆN'); ?></span>
                <span class="poster-number">0<?php echo e($loop->iteration); ?></span>
                <h3><?php echo e($content->tieu_de); ?></h3><span class="poster-caption">CINEVIET SELECTION</span>
            </div>
            <div class="card-body">
                <div class="metadata"><?php if($content->phim): ?><?php echo e($content->phim->thoi_luong_phut); ?> phút · <?php echo e($content->phim->ngon_ngu); ?><?php else: ?><?php echo e($content->suKien?->the_loai ?? 'Sự kiện'); ?> · <?php echo e($content->suKien?->don_vi_to_chuc); ?><?php endif; ?></div>
                <p><?php echo e($content->mo_ta); ?></p>
                <?php $__empty_2 = true; $__currentLoopData = $content->suats->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <div class="showtime"><strong><?php echo e($session->bat_dau_luc->format('d/m · H:i')); ?></strong><span><?php echo e($session->phongChieu->ten_phong); ?></span><small><?php echo e($session->phongChieu->diaDiem->ten_dia_diem); ?></small></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                    <div class="showtime muted">Lịch diễn đang được cập nhật.</div>
                <?php endif; ?>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="empty-state"><h3>Chưa tìm thấy nội dung phù hợp</h3><p>Thử từ khóa khác hoặc xem tất cả phim và sự kiện.</p><a href="<?php echo e(route('home')); ?>" class="btn btn-outline">Xem tất cả</a></div>
    <?php endif; ?>
    </div>
    <?php echo $__env->make('partials.pagination', ['paginator' => $contents], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/home.blade.php ENDPATH**/ ?>