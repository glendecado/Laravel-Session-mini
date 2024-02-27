<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo e($fname); ?><br>
    <?php echo e($lname); ?>

    <form action="<?php echo e(route('deleteValue')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
        <button type="submit">Delete</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Gibidex\Desktop\laravel-session\resources\views/hometwo.blade.php ENDPATH**/ ?>