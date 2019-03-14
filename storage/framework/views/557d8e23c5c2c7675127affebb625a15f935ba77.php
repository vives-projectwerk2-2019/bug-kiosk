<?php /* C:\Users\jensv\OneDrive\Documenten\School\Tweede jaar\Projectwerk\bug-kiosk\resources\views/pages/logger.blade.php */ ?>
<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div id="app">
    <app></app>
</div>
<script src="<?php echo e(mix('js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>