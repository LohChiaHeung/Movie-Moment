<title>M&M | Contact Us</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contactus.css')); ?>">
<?php $__env->stopPush(); ?>
<body><br><br><br>
   <div class="container">
      <div class="content">
         <div class="row">
            <div class="col-md-12">
            <div class="card card-user">
               <div class="rowleftright">
                  <div class="card-body left-body">
                     <div class="title">
                        <h2>Contact Us</h2>
                     </div>
                     <div class="contactInfo">
                        <div class="icon">
                        <span class="fa fa-map-marker"></span><span class="label">Address:</span>
                        </div>
                        <div class="text">
                           <p>PTD 64888, Jalan Selatan Utama, KM 15, Off, Skudai Lbh, 81300 Skudai, Johor</p>
                        </div>
                        
                        <div class="icon">
                           <span class="fa fa-phone"></span><span class="label">Phone:</span>
                        </div>
                        <div class="text">
                           <p> +60 12 345 6789 </p>
                        </div>
                        
                        <div class="icon">
                        <span class="fa fa-globe"></span><span class="label">Website:</span>
                        </div>
                        <div class="text url">
                           <p><a href="https://chiaheung.github.io/MovieMoment/" style="color:white;" target="blank"><span>Movie Moment</span></a></p>
                        </div>

                     </div>
                  </div>
                  <div class="card-body right-body">
                     <?php if(Session::has('success')): ?>
                     <div class="alert alert-success">
                     <?php echo e(Session::get('success')); ?>

                     </div>
                     <?php endif; ?>
                     <div class="forms">
                        <form method="post" action="<?php echo e(route('contact.store')); ?>">
                           <?php echo e(csrf_field()); ?> 
                        <div class="row right">
                           <div class="col-md-12">
                              <h2>Send us Feedback</h2>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Name:</label> -->
                                 <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="NAME" name="name">
                                 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                 <strong><?php echo e($message); ?></strong>
                                 </span>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Email:</label> -->
                                 <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="EMAIL" name="email">
                                 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                 <strong><?php echo e($message); ?></strong>
                                 </span>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                           </div> 
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label> Phone Number: </label> -->
                                 <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="PHONE NUMBER" name="phone">
                                 <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="invalid-feedback" role="alert">
                                 <strong><?php echo e($message); ?></strong>
                                 </span>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <!-- <label>Message:</label> -->
                                 <textarea class="form-control textarea <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Your Feedback" name="message" rows="5"></textarea>
                                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="update ml-auto mr-auto">
                              <button type="submit" class="sendbtn send">Send</button>
                              <div class="text-center follow">
                                 <h1>Follow us on:</h1>
                                 <button type="button" class="btn btn-secondary btn-floating mx-1 fb">
                                    <a href="https://www.facebook.com/Movie-Moment-MM-109810318198221"><i class="fab fa-facebook-f"></i></a>
                                 </button>
                                 <button type="button" class="btn btn-secondary btn-floating mx-1 insta" >
                                    <a href="https://www.instagram.com/moviemoment_2021/"><i class="fab fa-instagram"></i></a>
                                 </button>
                              </div>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</body>

<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/ContactUs.blade.php ENDPATH**/ ?>