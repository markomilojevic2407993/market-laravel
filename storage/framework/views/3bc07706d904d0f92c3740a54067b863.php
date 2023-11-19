

<?php $__env->startSection('body'); ?>
<div class="container">
    <nav class="text-center">
        <a class="m-4" href="/admin/home">HomeAdmin</a>
        <a class="m-4" href="/admin/products">Products List</a>
        <a class="m-4" href="/admin/customer">Customer List</a>
        <a class="m-4" href="/admin/contact">Contact List</a>
    </nav>
</div>
<form class="container" action="/admin/addProducts" method="post">
    <?php if($errors->any()): ?>
    <p class="text-danger"><?php echo e($errors->first()); ?></p>
    <?php endif; ?>
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="name" value="<?php echo e(old('name')); ?>"><br>
    <input type="text" name="description" placeholder="description"><br>
    <input type="number" name="amount" placeholder="amount"><br>
    <input type="number" name="price" placeholder="price"><br>
    <button class="btn btn-light" type="submit">add product</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views//admin/home.blade.php ENDPATH**/ ?>