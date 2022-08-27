
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('js/dataTable.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>
<div class="container-fluid">

<div class="container-fluid">

	  <!-- Breadcrumbs-->
		<ol class="breadcrumb" style="background-color: #FFF8DC;">
    <li class="breadcrumb-item">
      <a href="<?php echo e(route('admin.home')); ?>">Dashboard</a>
    </li>
  </ol>
	<div class="col-div-3">
	<a href="<?php echo e(route('admin.adminList')); ?>">
		<div class="box">
			<p><?php echo e($totalAdmin); ?><br/><span>Total Admin</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
	<a href="<?php echo e(route('admin.userList')); ?>">
		<div class="box">
			<p><?php echo e($totalUser); ?><br/><span>Total User</span></p>
			<i class="fa fa-user box-icon"></i>
		</div>
		</a>
	</div>
	<div class="col-div-3">
	<a href="<?php echo e(route('admin.postList')); ?>">
		<div class="box">
			<p><?php echo e($totalPost); ?><br/><span>Total Post</span></p>
			<i class="fa fa fa-pencil-square-o box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		<a href="<?php echo e(route('admin.commentList')); ?>">
			<p><?php echo e($totalComment); ?><br/><span>Total comment</span></p>
			<i class="fa fa-comments box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		<a href="<?php echo e(route('admin.rewardList')); ?>">
			<p><?php echo e($totalRewards); ?><br/><span>Total Rewards</span></p>
			<i class="bx bx-award box-icon fa-lg"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/></br>
</div>
</div>
</div>

</div>
</div>
  </div>
		</div>
	</div>
	</div>

		
	<div class="clearfix"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/backend/admin-home.blade.php ENDPATH**/ ?>