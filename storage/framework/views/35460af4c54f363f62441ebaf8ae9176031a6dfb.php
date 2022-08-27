<title>M&M | Top 10 Movies</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/top10.css')); ?>">
<!-- Scripts -->
<script type="text/javascript" src="<?php echo e(URL::asset('js/top10.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<body><br><br>
<div style="min-height:480px">

    <div id="tags"></div>
    <div id="top10">
        
    </div>
    <div id="myNav" class="overlay">
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content" id="overlay-content">

    </div>
</div>
     
    </div>
    <br>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/top10.blade.php ENDPATH**/ ?>