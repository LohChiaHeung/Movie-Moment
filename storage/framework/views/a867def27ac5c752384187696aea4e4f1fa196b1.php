
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/showMembers.css')); ?>">
<?php $__env->stopPush(); ?>
<!-- Show Members for Admin Page -->
<p class="Title">Project Member Lists</p>
<div class="container">
    <div class="row">
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Student ID</td>
                            <td>Batch</td>
                            <td>TelephoneNumber</td>
                            <td>Email</td>
                            <td>Location</td>
                            <td>Additional Information</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ProjectMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ProjectMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bodytr">
                            <td> <?php echo e($ProjectMember->id); ?> </td>
                            <td><img src="<?php echo e(asset('images/')); ?>/<?php echo e($ProjectMember->image); ?>" width="100" height="110" class="img-fluids" alt=""></td>
                            <td class="abc" ><?php echo e($ProjectMember->name); ?></td>
                            <td ><?php echo e($ProjectMember->studentID); ?></td>
                            <td ><?php echo e($ProjectMember->batch); ?></td>
                            <td ><?php echo e($ProjectMember->telephoneNumber); ?></td>
                            <td ><?php echo e($ProjectMember->email); ?></td>
                            <td ><?php echo e($ProjectMember->location); ?></td>
                            <td ><?php echo e($ProjectMember->addtionalInformation); ?></td>
                            <td>
                            <a href="<?php echo e(route('editMembers',['id'=>$ProjectMember->id])); ?>" class="btn btn-warning btn-sm" style="margin-bottom:5px;">Edit</a> <br> 
                            <a href="<?php echo e(route('deleteMembers',['id'=>$ProjectMember->id])); ?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <br><br>
        </div>
    </div>
    <div class="col-sm-3"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/showMembers.blade.php ENDPATH**/ ?>