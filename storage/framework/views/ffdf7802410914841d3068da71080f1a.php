<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('getValue')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="FirstName">
        <input type="text" name="LastName">
        <input type="submit" value="Submit">
    </form>
    <?php echo e($stSample); ?>

</body>
</html><?php /**PATH C:\Users\Gibidex\Desktop\laravel-session\resources\views/home.blade.php ENDPATH**/ ?>