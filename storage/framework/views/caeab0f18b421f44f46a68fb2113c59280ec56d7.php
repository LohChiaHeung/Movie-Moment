
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/ForgetPassword.css')); ?>">
<?php $__env->stopPush(); ?>
<body>
<section class="login">
<div class="login_box">
<div class="left">
<div class="top_link"><a href="<?php echo e(route('login')); ?>"><i class="fas fa-arrow-circle-left"></i> Return</a></div>
<br><br><br><br><br>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="contact">
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <h3>Reset Password</h3>
                        <div class="row mb-3">
                        <label for="email" class="col-md-12"><?php echo e(__('Please enter your email address:')); ?></label>
                        <div class="col-md-12">
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email Address">
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
                        <button type="submit" class="submit">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                    </form>
                </div>
            </div>
              </div>
            <div class="right">
            <img src="/images/logoOnly.png" alt="logo" class="img">
				<div class="right-text">
					<h2>Movie Moment</h2>
				</div>
			</div>
    </div>
</div>
</div>
</div>
</section>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>