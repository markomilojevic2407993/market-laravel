
<?php $__env->startSection('body'); ?>

<style>
        table {
            width: 100%; /* 100% širina tabele */
            table-layout: fixed; /* Fiksirana širina tabele */
        }

        th, td {
            width: 16%; 
            overflow: hidden; 
            white-space: nowrap; 
            text-overflow: ellipsis; 
        }
    </style>
    </table>
<h3 class="container text-center bg-warning">ALL CUSTOMER</h3>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Price</th>
      <th scope="col">Crud</th>
    </tr>
  </thead>
  <tbody>
<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($customer->id); ?></td>
    <td><?php echo e($customer->name); ?></td>
    <td><?php echo e($customer->email); ?></td>
    <td><?php echo e($customer->price); ?></td>
    <td><a class="btn btn-sm btn-danger" href="<?php echo e(route('obrisiKorisnika',['customer'=>$customer->id])); ?>" >Delete<?php echo e($customer->id); ?></a></p>
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views//admin/customer.blade.php ENDPATH**/ ?>