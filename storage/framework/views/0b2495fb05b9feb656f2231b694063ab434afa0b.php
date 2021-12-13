<?php $__env->startSection('title', 'inicio'); ?>
<?php $__env->startSection('content'); ?>


    <h1>Home</h1> 
    
    
    <form action="<?php echo e(route('m.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>
    <input name="name" placeholder="Nombre ... "><br>
    
    <button>Enviar</button>
</form>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\7.-SEpTIMO\web\example-app\resources\views/inicio.blade.php ENDPATH**/ ?>