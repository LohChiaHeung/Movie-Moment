
<title>M&M | My Profile</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/userProfile.css')); ?>">
<?php $__env->stopPush(); ?>
<body>  
    <br><br>
    <title>User Profile</title>
  <div class="container">
    <div class="main-body">
        <br><br>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>" class="main">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
        </ol>
        </nav>
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo e(asset('images/user/'.$user->userAvatar)); ?>" alt="userAvatar" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <h4 class="userName"><?php echo e($user->name); ?></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                <a href="<?php echo e(route('userProfile',['id'=>$user->id])); ?>"  class="links">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap link liclass" id="link">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></path></svg> Profile</h6>
                    <span class="text-secondary"></span>
                  </li>
                  </a>
                  <a href="<?php echo e(route('editPassword',['id'=>$user->id])); ?>" class="links">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap link liclass">
                    
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>  Password</h6>
                    <span class="text-secondary"></span>
                  </li>
                  </a>
                  </ul>
              </div><br>
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <h4 class="mb-1">Achievement:</h6>
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons  mr-2">My total posts: </i>&nbsp<?php echo e($totalPost); ?></h6>
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons  mr-2">My total comments: </i>&nbsp<?php echo e($totalComment); ?></h6>
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons  mr-2">My total points: </i>&nbsp<?php echo e($user->points); ?></h6>
                  </div>
                </div>
              </div>
               </div>
               </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Full Name: </h6>
                    </div>
                    <div class="col-sm-9 ">
                    <?php echo e($user->name); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email: </h6>
                    </div>
                    <div class="col-sm-9">
                    <?php echo e($user->email); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Phone: </h6>
                    </div>
                    <div class="col-sm-9 ">
                    <?php echo e($user->phone); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender: </h6>
                    </div>
                    <div class="col-sm-9 ">
                    <?php echo e($user->gender); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth: </h6>
                    </div>
                    <div class="col-sm-9">
                    <?php echo e($user->date); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="<?php echo e(route('editProfile')); ?>" style="item-align:right;">Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
          </div>

        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/userProfile.blade.php ENDPATH**/ ?>