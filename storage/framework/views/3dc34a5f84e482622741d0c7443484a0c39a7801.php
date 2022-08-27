
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contactus.css')); ?>">
<?php $__env->stopPush(); ?>
<div class="row">
<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br><br>
        <h3>Contact Us</h3>
        <form action="<?php echo e(route('contact.store')); ?>" method="POST" enctype="multipart/form-data" >
           <?php echo csrf_field(); ?>
           <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control <?php echo e($errors->has('name') ? 'error' : ''); ?>" name="name" id="name" placeholder="Your Name">
        <!-- Error -->
        <?php if($errors->has('name')): ?>
        <div class="error">
            <?php echo e($errors->first('name')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control <?php echo e($errors->has('email') ? 'error' : ''); ?>" name="email" id="email" placeholder="Your Email">
        <?php if($errors->has('email')): ?>
        <div class="error">
            <?php echo e($errors->first('email')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Phone:</label>
        <input type="text" class="form-control <?php echo e($errors->has('phone') ? 'error' : ''); ?>" name="phone" id="phone" placeholder="Your Phone Number">
        <?php if($errors->has('phone')): ?>
        <div class="error">
            <?php echo e($errors->first('phone')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Message:</label>
        <textarea class="form-control <?php echo e($errors->has('message') ? 'error' : ''); ?>" name="message" id="message"
        rows="10" placeholder="Your Feedback/Message"></textarea>
        <?php if($errors->has('message')): ?>
        <div class="error">
            <?php echo e($errors->first('message')); ?>

        </div>
        <?php endif; ?>
    </div>
    <br>
    <input type="submit" name="send" value="Submit" class="btn btn-success btn-block"> 
    <br>
    <div class="text-center follow">
                 <h1>Follow us on:</h1>
                 <button type="button" class="btn btn-primary btn-floating mx-1 fb">
                     <a href="https://www.facebook.com/Movie-Moment-MM-109810318198221"><i class="fab fa-facebook-f"></i></a>
                 </button>
               
                  <button type="button" class="btn btn-primary btn-floating mx-1 insta" >
                     <a href="https://www.instagram.com/moviemoment_2021/"><i class="fab fa-instagram"></i></a>
                  </button>
               </div>
</form>
<br>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/contact.blade.php ENDPATH**/ ?>