

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, <?php echo e(auth()->user()->name); ?></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Manpro\Palettopia\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>