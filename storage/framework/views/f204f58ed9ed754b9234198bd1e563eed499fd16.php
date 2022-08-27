
<title>M&M | Edit Profile</title>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/editProfile.css')); ?>">
<?php $__env->stopPush(); ?>
<body>
    <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>
  <div class="container">
    <div class="main-body">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>" class="main">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('userProfile')); ?>" class="main">My Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit My Profile</li>
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
                      <h4 class="name"><?php echo e($user->name); ?></h4>
                      <p class="changePic" style="float: left;">Change your profile picture:</p>
                      <input type="file" class="form-control" id="userAvatar" name="userAvatar"><br/>
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
                      <h6 class="mb-0">Full Name:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="name" name="name" required size="65" value="<?php echo e($user->name); ?>"><br />
                    <input type="hidden" name="userID" id="userID" value="<?php echo e($user->id); ?>">  
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" id="email" name="email" required size="65"  value="<?php echo e($user->email); ?>"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="tel" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{7}" required  value="<?php echo e($user->phone); ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender:</h6>
                    </div>
                    <div class="col-md-6" >
                      <select name="gender" id="gender" value="<?php echo e($user->gender); ?>">
                      <?php if($user->gender == "F"): ?>
                      <option value="<?php echo e($user->gender); ?>" selected>Female</option>
                      <option value="M">Male</option>
                      <?php endif; ?>
                      if ($user->gender)
                      <?php if($user->gender == "M"): ?>
                      <option value="<?php echo e($user->gender); ?>" selected>Male</option>
                      <option value="F">Female</option>
                      if ($user->gender)
                      <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth:</h6>
                    </div>
                    <div class="col-sm-9">
                    <input type="date" id="date" name="date" required size="65" value="<?php echo e($user->date); ?>"><br />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info" type="submit">Save Profile</button>
                    </div>
                  </div>
                </div>
              </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>

        </div>
    </div>
<hr>
<br>
</body>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Project\resources\views/editProfile.blade.php ENDPATH**/ ?>