
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Movie's Category</h3>
        <form method="post" actions="<?php echo e(route('storeCategory')); ?>">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="categoryName">Movie's Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName">
                
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/addCategory.blade.php ENDPATH**/ ?>