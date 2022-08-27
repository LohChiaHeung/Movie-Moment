
<link rel="icon" href="images/logo.png">
<title>M&M | Movie Recommendation</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/movieRecommendation.css')); ?>">
<!-- Scripts -->
<script type="text/javascript" src="<?php echo e(URL::asset('js/familyMovie.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<body><br><br>
<div style="min-height:480px">
<header>
        <form  id="form">
            <input type="text" placeholder="Search for your movie" id="search" class="search">
        </form>
    </header>
    <div id="tags"></div>
    <div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content" id="overlay-content">

</div>
</div>
    <main id="main"></main> 
    <div class="pagination">
        <div class="page" id="prev"> << Previous Page </div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page >></div>
    </div>
    </div>
</body>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/familyMovie.blade.php ENDPATH**/ ?>