<?php /* C:\Users\jensv\OneDrive\Documenten\School\Tweede jaar\Projectwerk\bug-kiosk\resources\views/pages/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="index">
    <h1>Bug kiosk</h1>
   <a  href="/register" class="waves-effect waves-light btn-large"><i class="material-icons right">person_add</i>Register</a>
    <a  href="/login" class="waves-effect waves-light btn-large"><i class="material-icons right">lock_open</i>Login</a>

    <br>
    <br>
    <br>
    <h4>Or continue with:</h4>
    <br>
    <a  href="/login/facebook" class="waves-effect waves-light btn-large">Facebook</a>
    <a  href="/login/github" class="waves-effect waves-light btn-large">Github</a>
    <a  href="/login/google" class="waves-effect waves-light btn-large">Google</a>
    <a  href="/login/twitter" class="waves-effect waves-light btn-large">Twitter</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>