
<title>M&M | Edit Passowrd</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/editPassword.css')); ?>">
<?php $__env->stopPush(); ?>
<div class="container">
    <div class="row">

        <div class="col-md-11 offset-2">
            <div class="panel panel-default">
                <h2 class="title">Change password</h2>
                <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <!-- <?php if($errors): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger">
                                <?php echo e($error); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?> -->
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('updatePassword')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <hr>
                        <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                            <label for="new-password" class="col-md-4 control-label">Current Password:</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Please enter your old password" required>

                                <?php if($errors->has('current-password')): ?>
                                    <span class="help-block">
                                        <strong class="errors"><?php echo e($errors->first('current-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
                            <label for="new-password" class="col-md-4 control-label">New Password:</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" placeholder="Please enter your new password" required>

                                <?php if($errors->has('new-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-6 control-label">Confirmed New Password:</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" placeholder="Please enter again your new password" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/editPassword.blade.php ENDPATH**/ ?>