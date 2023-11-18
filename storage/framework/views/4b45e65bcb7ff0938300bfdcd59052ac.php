
<?php $__env->startSection('title'); ?>
Shop
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
  <div class="row">
    <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 mb-4">
        <div class="card bg-info" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo e($product->name); ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo e($product->amount); ?>-Kg</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo e($product->price); ?>.00rsd</h6>
            <p class="card-text"><?php echo e($product->description); ?></p>
            <a href="#" class="card-link btn btn-success">info</a>
            <a href="#" class="card-link btn btn-success">buy</a>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views/shop.blade.php ENDPATH**/ ?>