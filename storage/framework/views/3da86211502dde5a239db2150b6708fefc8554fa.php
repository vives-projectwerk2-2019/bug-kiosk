<?php /* C:\Users\jensv\OneDrive\Documenten\School\Tweede jaar\Projectwerk\bug-kiosk\resources\views/pages/dongles.blade.php */ ?>
<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <h1 id="under-navbar">All Dongles</h1>
    <div class="row">
        <div id="dongle">Dongle 1
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 2
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 3
                <p>Name</p>
                <p>Info</p>
        </div>
    </div>
    <div class="row">
        <div id="dongle">Dongle 4
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 5
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 6
                <p>Name</p>
                <p>Info</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>