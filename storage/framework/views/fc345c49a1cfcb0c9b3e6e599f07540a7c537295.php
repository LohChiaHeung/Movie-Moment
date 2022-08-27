
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>">
<?php $__env->stopPush(); ?>
<body><br>
<main>
<div class="container-fluid">
<h2 class="my-2">Contact Us</h2>
<hr class="orangeline">
<section id="teammembers" class="text-center text-black">
<br>
<h3 class="feature-title">Team Members</h3> <br>
<div class="col-sm-4"> 
<div class="card">
      <div class="card-body">
      <?php $__currentLoopData = $ProjectMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ProjectMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('images/')); ?>/<?php echo e($ProjectMember->image); ?>" width="100" height="100" class="img-fluids" alt="">
        <h5 class="card-title"> Project Member 1</h5>
        <p class="card-text">     
        <br>
        Name      : <?php echo e($ProjectMember->name); ?><br>
        Student ID:<?php echo e($ProjectMember->studentID); ?><br>
        Batch     :<?php echo e($ProjectMember->batch); ?><br>
        TelephoneNum:<?php echo e($ProjectMember->telephoneNumber); ?><br>
        Email:<?php echo e($ProjectMember->email); ?><br>
        Location:<?php echo e($ProjectMember->location); ?><<br>
        Additional Information:<?php echo e($ProjectMember->addtionalInformation); ?><br>
       </p>
    </div>
  </div> 
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/contactUs.blade.php ENDPATH**/ ?>