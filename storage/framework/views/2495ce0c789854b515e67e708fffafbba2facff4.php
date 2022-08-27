
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/addMembers.css')); ?>">
<?php $__env->stopPush(); ?>
<div class="row">
<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br><br>
        <h3>Add New Members</h3>
        <form action="<?php echo e(route('addMembers')); ?>" method="POST" enctype="multipart/form-data" >
           <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text-success" class="form-control" id="Name" name="name">                
            </div>
            <div class="form-group">
                    <label for="image">Images:</label>
                    <input type="file" class="form-control" id="image" name="image">                
                </div>
            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input type="text" class="form-control" id="studentID" name="studentID">                
            </div>
            <div class="form-group">
                <label for="batch">Batch:</label>
                <input type="text" class="form-control" id="batch" name="batch">                
            </div>
            <div class="form-group">
                <label for="telephoneNumber">H/P:</label>
                <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber">                
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">                
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location">                
            </div>
            <div class="form-group">
                <label for="addtionalInformation">Additional Information:</label>
                <Textarea class="form-control" id="addtionalInformation" name="addtionalInformation" rows="5"> </textarea>               
            </div><br>
             <button type="submit" class="btn btn-primary">Add New Member</button>
                <br><br>
                </form>
    <div class="col-sm-3"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/addMembers.blade.php ENDPATH**/ ?>