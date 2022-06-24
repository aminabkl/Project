<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h4>USERS</h4>
    <?php echo e($data->Utilisateur); ?> - <?php echo e($data->MotDePasse); ?> - <?php echo e($data->Administrateur); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\Users\lenovo\Desktop\Projet\laravelproject\resources\views/Login.blade.php ENDPATH**/ ?>