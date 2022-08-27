
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('js/dataTable.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

    <!-- Content -->
    <div class="container-fluid">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb" style="background-color: #FFF8DC;">
    <li class="breadcrumb-item">
      <a href="<?php echo e(route('admin.home')); ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Post-Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Post List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="99%" cellspacing="0" style="border-color:black;">
          <thead style="background-color:Aqua;color: ;border-color:black;">
            <tr style="border-color:black;">
              <th style="border-right-color:black;" width="50px">ID</th>
              <th style="border-right-color:black;">User Name</th>
              <th style="border-right-color:black;" width="800px">Content Detail</th>
              <th style="border-right-color:black;">Created Time</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if(count($posts)): ?>
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr style="background-color:#ccffff;">
              <td  style="border-right-color:black;  border-bottom-color:black;"><?php echo e($post->id); ?></td>
                <td  style="border-right-color:black;  border-bottom-color:black;"><?php echo e($post->userName); ?></td>
                <td  style="border-right-color:black;  border-bottom-color:black;"><?php echo e($post->ctDetail); ?></td>
                <td  style="border-right-color:black;  border-bottom-color:black;">Date: <?php echo e($post->ctDate); ?>  <br> Time: <?php echo e($post->ctTime); ?></td>
                <td  style="border-bottom-color:black;">
                  <a class="btn btn-danger btn-sm" href="<?php echo e(route('admin.deletePost',['id'=>$post->id])); ?>" onClick="return confirm('Are you sure to delete?')" onClick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i> Delete</a>
              </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
            <tr>
              <th>--</th>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
            </tr>
        <?php endif; ?>
  
          </tbody>
        </table>
      </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<style>
table.dataTable thead .sorting {
  background-image: url("/images/unfold_19.png")
}

table.dataTable thead .sorting_desc {
    background-image: url("/images/downOnly.png")
}

table.dataTable thead .sorting_asc {
    background-image: url("/images/upOnly.png")
}

.btn-danger {
  border-radius:10%;
  background-color:#FA5255;
  min-width:80px;
  color:black;
  margin: 0 -5PX 5PX 5PX;
}

.btn-danger:hover {
  background-color:black;
  color:#FA5255;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/backend/postList.blade.php ENDPATH**/ ?>