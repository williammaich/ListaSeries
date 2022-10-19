<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>

<h1>Séries</h1>
<ul>

<?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($serie); ?> </li>
|<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


</body>
</html>
<?php /**PATH C:\Users\willi\Desktop\Alura\controle-series\resources\views/listar-series.blade.php ENDPATH**/ ?>