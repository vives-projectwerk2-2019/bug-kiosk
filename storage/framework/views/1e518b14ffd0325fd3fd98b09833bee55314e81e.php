<?php /* C:\Users\jensv\OneDrive\Documenten\School\Tweede jaar\Projectwerk\bug-kiosk\resources\views/layouts/bug-kiosk.blade.php */ ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title><?php echo e(config('app.name', 'Bug-kiosk')); ?></title>
    </head>

    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>

</html> 