<?php if($paginator->hasPages()): ?>
<nav class="pagination" aria-label="Phân trang">
    <?php if($paginator->onFirstPage()): ?><span class="muted">← Trước</span><?php else: ?><a class="btn btn-outline btn-small" href="<?php echo e($paginator->previousPageUrl()); ?>">← Trước</a><?php endif; ?>
    <span>Trang <?php echo e($paginator->currentPage()); ?> / <?php echo e($paginator->lastPage()); ?></span>
    <?php if($paginator->hasMorePages()): ?><a class="btn btn-outline btn-small" href="<?php echo e($paginator->nextPageUrl()); ?>">Sau →</a><?php else: ?><span class="muted">Sau →</span><?php endif; ?>
</nav>
<?php endif; ?>

<?php /**PATH C:\Users\SongKang\Documents\VePhim-M3-HoanThien\VePhim-M3\resources\views/partials/pagination.blade.php ENDPATH**/ ?>