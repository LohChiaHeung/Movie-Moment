<title>M&M | Points Redeem Center</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/rewardList.css')); ?>">
<?php $__env->stopPush(); ?>
<body><br><br>
<div class="container redeemcontainer">
    <h2 class="slide-right h2">Points Redeem Center</h2>
    <div class="row pointSearch">
        <div class="col-md-6">
            <h6 class="totalpoints">Total points: <strong><?php echo e(Auth::user()->points); ?></strong> <a class="reward" href="<?php echo e(route('showMyReward')); ?>">My Reward</a></h6>
            
        </div>
        <div class="col-md-6 wholesearchbar"> 
            <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('searchRewards')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <input type="search" placeholder="Search for rewards" id="search" class="search searchbar" aria-label="Search" name="keyword">
                <button class="btn btn-primary searchbar icon" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> 
                <button class="btn btn-primary searchbar icon" type="submit" action="<?php echo e(route('showRewards')); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>        
            </form>
        </div>
    </div>
</div>


<div class="container mt-4 mb-4">
    <div class="row">
        <?php if(count($rewards)): ?>
            <?php $__currentLoopData = $rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 ml-4 mr-4 mt-4 mb-4">
                <div class="card" style="width: 19rem;">
                    <img src="<?php echo e(asset('images/')); ?>/<?php echo e($reward->image); ?>" class="card-img-top" alt="reward" height="250px" width="250px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($reward->name); ?></h5>
                        <p class="hidden"><?php echo e($reward->id); ?></p>
                        <p class="card-text"><b class="des">Points :</b> <?php echo e($reward->points); ?></i></p>
                        <p class="card-text"><b class="des">Quantity:</b><i class="card-text"> Only <?php echo e($reward->quantity); ?> item left !! </i></p>
                        <div class="buttoncenter"><a class="rewardView" href="<?php echo e(route('redeemRewards',['id'=>$reward->id])); ?>">View</a> </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="col-md-12 text-center mt-4">
                <p><i>No rewards to redeem. Please wait until any further update from our admin. 
                    If you facing any questions, feel free to fill up the contact us form. Thank you.
                </i></p>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/rewardList.blade.php ENDPATH**/ ?>