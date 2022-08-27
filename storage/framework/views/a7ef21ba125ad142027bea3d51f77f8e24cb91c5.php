<title>M&M | Points Redeem Center</title>
<link rel="icon" href="/images/logo.png">
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/redeemRewards.css')); ?>">
<?php $__env->stopPush(); ?>
<body>
<div class="container-fluid headContainer">
    <div class="row">
        <div class="col-md-12">
            <h2 class="slide-right h2 pagetitle">Points Redeem Center</h2>
        </div>
    </div>
    <div class="container session-container"></div>
    </div>
</div>
<div class="container rewardDetail">
<form action="<?php echo e(route('confirmRedeem')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" class="form-control hidden" id="rewardID" name="rewardID" value="<?php echo e($reward->id); ?>">
    <input type="hidden" class="form-control hidden" id="rewardName" name="rewardName" value="<?php echo e($reward->name); ?>">
    <input type="hidden" class="form-control hidden" id="rewardQuantity" name="rewardQuantity" value="<?php echo e($reward->quantity); ?>">
    <input type="hidden" class="form-control hidden" id="userPoint" name="userPoint" value="<?php echo e(Auth::user()->points - $reward->points); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <a class="reward" href="<?php echo e(route('showRewards')); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </a> <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo e(asset('images/')); ?>/<?php echo e($reward->image); ?>" alt="reward" class="images" height="330px" width="400px">
            </div>
            <div class="col-md-8">
                <h2 class="Titles">Reward Description:</h2>
                <p class="des"><?php echo $reward->description; ?></p>
                <h2 class="Titles">Points required: <strong class="des"><?php echo e($reward->points); ?></strong></h2>
                <h2 class="Titles">Quantity left: <strong class="des"><?php echo e($reward->quantity); ?></strong></h2>
                <p class="pointsTitle">Points available: <b class="orange"><?php echo e(Auth::user()->points); ?></b>.</p>
                <?php if($reward->quantity > 0): ?>
                <button type="submit" class="rewardRedeem" id="redeemBtn" onClick="return confirm('Are you sure to redeem?')">Redeem</button><br><br>
                <?php else: ?>
                <p class="confirm">Attention: Sorry, the reward is not available. Please choose another rewards. </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
    <br>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.28/sweetalert2.all.min.js" integrity="sha512-nWDPZH/tnW5b1KedLPkb9inxNXadIf4qQDoGTxPJcQNMn4XwPIIlmHSPofT821taBuF1t/uiGSOsRrVccwXS4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var quantityDec = 1;
        var quantity = document.getElementById('rewardQuantity').value;
        var redeemBtn = document.getElementById('redeemBtn');
        var backBtn = document.getElementById('backBtn');
        var userPoint = document.getElementById('userPoint').value;
        if(userPoint < 0){
            Swal.fire({
                icon:'warning',
                title: 'Insufficient Point',
                text: 'Please gain more points to redeem rewards!',
                showConfirmButton: false,
                background: '#242a30',
                color: '#fff',
                heightAuto: false,
            })
            redeemBtn.classList.add('hidden');
        } 
        if(quantity > 0){
            quantity -= quantityDec;
        }
        document.getElementById('rewardQuantity').value=quantity;
    </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/confirmRedeem.blade.php ENDPATH**/ ?>