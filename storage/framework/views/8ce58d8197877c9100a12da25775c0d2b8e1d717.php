
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('js/dataTable.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

    <!-- Content -->
    <div class="container-fluid">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb"  style="background-color: #FFF8DC;">
    <li class="breadcrumb-item">
      <a href="<?php echo e(route('admin.home')); ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">User-Lists</li>
  </ol>


   <!-- DataTables Example -->
   <div class="card mb-3">
    <div class="card-header">
      <i class="bx bx-table"></i> Users List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="99%" cellspacing="0" style="border-color:black;">
          <thead style="background-color:Aqua;color: ;border-color:black;">
            <tr style="border-color:black;">
              <th style="border-right-color:black;">ID</th>
              <th style="border-right-color:black;">Name</th>
              <th style="border-right-color:black;">Email</th>
              <th style="border-right-color:black;">Phone</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if(count($users)): ?>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr style="background-color:#ccffff;">
                <td style="border-right-color:black;  border-bottom-color:black;"><?php echo e($user->id); ?></td>
                <td style="border-right-color:black;  border-bottom-color:black;"><?php echo e($user->name); ?></td>
                <td style="border-right-color:black;  border-bottom-color:black;"><?php echo e($user->email); ?></td>
                <td style="border-right-color:black;  border-bottom-color:black;"><?php echo e($user->phone); ?></td>
                <td style="border-bottom-color:black;">
                  <a class="btn btn-danger btn-sm" href="<?php echo e(route('admin.deleteUser',['id'=>$user->id])); ?>" onClick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i> Delete</a>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/backend/userList.blade.php ENDPATH**/ ?>