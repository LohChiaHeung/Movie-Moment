<!DOCTYPE html>
<html lang="en">
    <!--Head-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Movie Moment (M&M)</title>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
        <!--logo-->
        <link rel="icon" href="images/logo.png">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
        <!--Own Css -->
        <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">

        <?php echo $__env->yieldPushContent('css'); ?>
  </head>
  <!--/Head-->
    <body>
      <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
      <?php echo $__env->yieldPushContent('script'); ?>

        <!-- <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?> -->
    
        <header>
        <!-- Navbar -->
        <!-- M&M Logo-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <a class="navbar-brand" href="<?php echo e(url('home')); ?>">
              <img src="/images/logoHeader.jpg" height="50px" alt="M&M Logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div style="width:100%; margin:0 auto;">
                     <!-- Center Navigation -->
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                           <a class="nav-link <?php echo e(Route::currentRouteNamed('community') ? 'active' : ''); ?>" href="<?php echo e(url('community')); ?>" class="text-dark"><i class="fas fa-comments"></i> Movie Community  </a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link <?php echo e(Route::currentRouteNamed('movieRecommendation') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('familyMovie') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('tvshow') ? 'active' : ''); ?> dropdown-toggle" href="<?php echo e(url('movieRecommendation')); ?>" ></i> <i class="fas fa-video"></i> Movie Recommendation</a>
                              <ul class="dropdown-menu recommend">
                              <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('movieRecommendation') ? 'active' : ''); ?>" href="<?php echo e(url('movieRecommendation')); ?>">Popular Movies</a></li>
                              <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('familyMovie') ? 'active' : ''); ?>" href="<?php echo e(url('familyMovie')); ?>">Family Movies</a></li>
                              <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('tvshow') ? 'active' : ''); ?>" href="<?php echo e(url('tvshow')); ?>">TV Shows</a></li>
                               </ul>
                           </li>
                           
                           <li class="nav-item">
                           <a class="nav-link <?php echo e(Route::currentRouteNamed('top10') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('top10TV') ? 'active' : ''); ?>  dropdown-toggle " href="<?php echo e(url('top10')); ?>"><i class="fas fa-crown"></i> Top 10 Movie (Daily)  </a>         
                           <ul class="dropdown-menu top10list">
                              <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('top10') ? 'active' : ''); ?>" href="<?php echo e(url('top10')); ?>">Movie Lists</a></li>
                              <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('top10TV') ? 'active' : ''); ?>" href="<?php echo e(url('top10TV')); ?>">TV Shows</a></li>
                               </ul>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link <?php echo e(Route::currentRouteNamed('showMyReward') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('showRewards') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('searchRewards') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('redeemRewards') ? 'active' : ''); ?>" href="<?php echo e(url('showRewards')); ?>"class="text-dark"><i class="fas fa-award"></i> Reward </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link dropdown-toggle <?php echo e(Route::currentRouteNamed('showProjectMembers') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('userGuide') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('contactUs') ? 'active' : ''); ?>"></i>Others</a>
                                 <ul class="dropdown-menu other">
                                 <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('showProjectMembers') ? 'active' : ''); ?> " href="<?php echo e(url('showProjectMembers')); ?>">Our Teams</a></li>
                                 <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('userGuide') ? 'active' : ''); ?>" href="<?php echo e(url('userGuide')); ?>">Help</a></li>
                                 <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('contactUs') ? 'active' : ''); ?>" href="<?php echo e(url('contactUs')); ?>">Contact Us</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  </div>
            </div>  

 <!-- Right elements of navbar -->
 <div class="nav-item align-items-center ">
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(url('login')); ?>" class="nav-link text-inverse-lighter" style="text-decoration:none;color:white;"><i class="fas fa-sign-in-alt">Login</i></a>
            <?php else: ?>
               <!-- Login Avatar -->
               <a class="nav-link dropdown-toggle hidden-arrow avatar" href="#" >
                <i class="fas fa-user"></i>
               </a>
               <ul class="dropdown-menu navbar-nav right-nav">
                <li>
                    <a class="dropdown-item profilemenu <?php echo e(Route::currentRouteNamed('userProfile') ? 'active' : ''); ?> " href="<?php echo e(route('userProfile')); ?>">My profile</a>
                </li>
                  <li><a class="dropdown-item <?php echo e(Route::currentRouteNamed('myReward') ? 'active' : ''); ?> <?php echo e(Route::currentRouteNamed('showMyReward') ? 'active' : ''); ?>" href="<?php echo e(url('myReward')); ?>">My Rewards</a></li>
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?></a>
                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                           <?php echo csrf_field(); ?>
                     </form>
                </li>
               </ul>
            <?php endif; ?>
               
            </div>
            <!-- END Right elements -->
         </nav>
         <!-- END navbar -->


    </header>
    <!--/header-->

        <?php echo $__env->yieldContent('content'); ?>
        <footer>
            <div class="footer-copyright text-center text-light bg-dark ">
            &copy;2021-2022 by Movie Moment(M&M).com. </br>
            All rights reserved.
            </div>
        </footer>
    </body>
</html>
<?php /**PATH C:\Users\User\Project\resources\views/layout.blade.php ENDPATH**/ ?>