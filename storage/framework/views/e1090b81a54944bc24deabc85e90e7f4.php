

<?php $__env->startSection('body'); ?>

<style>
        table {
            width: 100%; 
            table-layout: fixed; 
        }

        th, td {
            width: 16%; 
            overflow: hidden; 
            white-space: nowrap; 
            text-overflow: ellipsis; 
        }
    </style>
    <h2 class=" container text-center bg-primary">ALL PRODUCTS</h2>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($product->id); ?></th>
      <td><?php echo e($product->name); ?></td>
      <td><?php echo e($product->description); ?></td>
      <td><?php echo e($product->amount); ?></td>
      <td><?php echo e($product->price); ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-sm btn-outline-danger" href="<?php echo e(route('obrisiProizvod',['product'=>$product->id])); ?>" >Delete</a>
          <a href="" class="btn btn-sm btn-outline-success">Update</a>
        </div> 
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views//admin/products.blade.php ENDPATH**/ ?>