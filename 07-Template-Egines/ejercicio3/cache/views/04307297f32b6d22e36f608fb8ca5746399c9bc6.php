<!doctype html>
<html>
<head>
    <title>Ejercicio 3</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>

        </tr>
        <?php $__currentLoopData = $listado_zapatillas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapatilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($zapatilla->getMarca()); ?></td>
            <td><?php echo e($zapatilla->getModelo()); ?></td>
            <td><?php echo e($zapatilla->getTipo()); ?></td>
            <td><?php echo e($zapatilla->getPrecio()); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>


<?php /**PATH /vagrant/07-Template-Egines/ejercicio3/views/listado.blade.php ENDPATH**/ ?>