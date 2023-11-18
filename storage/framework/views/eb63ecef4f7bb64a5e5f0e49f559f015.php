
<?php $__env->startSection('title'); ?>
Contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<form action="/contactSend"  method="post"> 
<?php echo csrf_field(); ?>
<?php if($errors->any()): ?>
<p><?php echo e($errors->first()); ?></p>
<?php endif; ?>
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <button class="btn btn-danger" type="submit">Send your message</button>
</div>
</div>
</form>


<div class="container">
  <?php $__currentLoopData = $allContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p><?php echo e($message->email); ?></p>
  <p><?php echo e($message->message); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\pijaca\resources\views//contact.blade.php ENDPATH**/ ?>