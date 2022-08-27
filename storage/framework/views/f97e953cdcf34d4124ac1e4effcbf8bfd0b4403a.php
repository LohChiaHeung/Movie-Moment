
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/addMembers.css')); ?>">
<?php $__env->stopPush(); ?>
<div class="row">
<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br><br>
        <h3>Add New Members</h3>
        <form action="<?php echo e(route('updateMembers')); ?>" method="POST" enctype="multipart/form-data" >
           <?php echo csrf_field(); ?>
           <?php $__currentLoopData = $projectmembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectmember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text-success" class="form-control" id="Name" name="name" value="<?php echo e($projectmember->name); ?>"> 
                <input type="hidden" name="id" id="id" value="<?php echo e($projectmember->id); ?>">                        
            </div> 
            <div class="form-group">
                    <label for="images">Images:</label><br>
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($projectmember->image); ?>" alt="" class="img-fluid" width="230"> <br>
                    <input type="file" class="form-control" id="image" name="image" value="">                
                </div>

            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo e($projectmember->studentID); ?>">                
            </div>
            <div class="form-group">
                <label for="batch">Batch:</label>
                <input type="text" class="form-control" id="batch" name="batch" value="<?php echo e($projectmember->batch); ?>">                
            </div>
            <div class="form-group">
                <label for="telephoneNumber">H/P:</label>
                <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" value="<?php echo e($projectmember->telephoneNumber); ?>">                
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($projectmember->email); ?>">                
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo e($projectmember->location); ?>" >                
            </div>
            <div class="form-group">
                <label for="addtionalInformation">Additional Information:</label>
                <Textarea class="form-control" id="addtionalInformation" name="addtionalInformation" rows="5"><?php echo e($projectmember->addtionalInformation); ?></textarea>               
            </div><br>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <button type="submit" class="btn btn-primary">Add New Member</button>
                <br><br>
                </form>
    <div class="col-sm-3"></div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/editMembers.blade.php ENDPATH**/ ?>