<h1>Listagem de Dentistas</h1>


<ul>
    
    <?php $__currentLoopData = $dentistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dentista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($dentista->name); ?>

            <?php echo e($dentista->email); ?>

            <?php echo e($dentista->cro); ?>

            <?php echo e($dentista->cro_uf); ?>

        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\xampp\htdocs\crudDentistas1\resources\views/dentistas/index.blade.php ENDPATH**/ ?>