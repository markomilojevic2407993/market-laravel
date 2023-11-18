

<?php $__env->startSection('body'); ?>
<form class="container" action="/sendRegistration" method="post">
    <?php echo csrf_field(); ?>
    <?php if($errors->any()): ?>
    <p><?php echo e($errors->first()); ?></p>
    <?php endif; ?>
    <input  type="text" name="name" placeholder="Adam Maric"><br>
    <input  type="text" name="email" placeholder="jokan@koric"><br>
    <input  type="text" name="pass" placeholder="*******"><br>
    <input type="hidden" name="price" placeholder="12000" value="0">
    <button class="btn btn-lg btn-primary" type="submit">Registration</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views/registration.blade.php ENDPATH**/ ?>