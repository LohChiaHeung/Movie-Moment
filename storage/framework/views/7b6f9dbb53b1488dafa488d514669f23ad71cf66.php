<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li >
         <!-- begin timeline-time -->
            <div class="timeline-time">
               <input type="hidden" id="postID" value="<?php echo e($post->id); ?>">
               <span class="date" id="date<?php echo e($post->id); ?>"><?php echo e(\Carbon\Carbon::parse($post->ctDate)->format('d F')); ?></span>
               <span class="time"><?php echo e($post->ctTime); ?></span>
            <!-- </a> -->
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
               <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
            <!-- begin timeline-body -->

            
            <div class="timeline-body">
               <div class="timeline-header">
                  <span class="userimage"><img src="<?php echo e(asset('images/user/'.$post->userAvatar)); ?>" alt=""></span>
                  <span class="username"><a href="javascript:;"><?php echo e($post->name); ?></a> <small></small></span>
                  <!-- <span class="pull-right text-muted">18k Views</span> -->
                  <?php if(Auth::id() == $post->UserID): ?>
                  <div class="dropdown">
                     <!-- EDIT -->
                     <span class="icon-right pen" style='font-size:10px' id="navbarDropdownMenuLink">
                        <a href="javascript:editPost(<?php echo e($post->id); ?>);" class="btn btn-sm btn-default ivm-show edit" style='padding:5px 13px;' data-mdb-toggle="modal" data-mdb-target="#editModal" data-target-detail="<?php echo e($post->ctDetail); ?>" data-target-pid="<?php echo e($post->id); ?>" data-target-pic="<?php echo e(asset('images/post/image/'.$post->ctImage)); ?>">
                           <i class='fa fa-pen' style='color:whitesmoke;'></i>
                        </a>
                     </span>
                     <!-- DELETE -->
                     <span class="icon-right trash" style='font-size:10px' id="navbarDropdownMenuLink" >
                        <a href="<?php echo e(route('delPost',['id'=>$post->id])); ?>" class="btn btn-sm btn-default ivm-show " style='padding:5px 13px;' onclick="return confirm('Are you sure to delete this post?')">
                           <i class='fa fa-trash' style='color:whitesmoke;'></i>
                        </a>
                     </span>
                  </div>
                  <?php endif; ?>
               </div>
               
               <div class="timeline-content">
                  <p class="addReadMore showlesscontent" id="postBody<?php echo e($post->id); ?>"> <!-- class="show-read-more" -->
                     <?php echo e($post->ctDetail); ?>

                  </p>
                  <!-- ----------------------------------------IMAGE------------------------------------------------- -->
                  <?php if($post->ctImage!=NULL): ?>
                     <img class="postImage zoomable" id="image<?php echo e($post->id); ?>" src="<?php echo e(asset('images/post/image/'.$post->ctImage)); ?>" alt="<?php echo e($post->ctImage); ?>" onclick="showImage(<?php echo e($post->id); ?>)">
                  <?php endif; ?>
                  <!-- ----------------------------------------VIDEO------------------------------------------------- -->
                  <?php if($post->ctVideo!=NULL): ?>
                  <div class="iframe">
                     <iframe id="iF<?php echo e($post->id); ?>" class="responsive-iframe" src="<?php echo e(asset('images/post/video/'.$post->ctVideo)); ?>" title="video" frameborder="0"  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="auto" height="auto" sandbox="" allowfullscreen></iframe>
                  </div>
                  <?php endif; ?>
               </div>
               <div class="timeline-likes">
                  <div class="stats-right">
                     <!-- <span class="stats-text">259 Shares</span> -->
                     <!-- <span class="stats-text">0 Comments</span> -->
                  </div>
                  <div class="stats">
                        <span class="fa-stack fa-fw stats-icon">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                        </span>
                     <span class="stats-total" id="stats-total-<?php echo e($post->id); ?>">
                     <!-- <?php if($post->likedUsers->count() !=0): ?>
                        <?php echo e($post->likedUsers->count()+ rand(50,99)); ?>

                     <?php else: ?>
                        <?php echo e(rand(50,99)); ?>

                     <?php endif; ?> -->
                     <?php echo e($post->likedUsers->count()); ?>

                     </span>
                  </div>
               </div>
               <div class="timeline-footer">
                  <!-- LIKE FUNCTION -->
                  <?php if(auth()->guard()->guest()): ?>
                     <a href="#" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                  <?php else: ?>
                  <div class="like">
                     <a href="javascript:;" class="m-r-15 text-inverse-lighter likeButton" id="like-btn<?php echo e($post->id); ?>" data-id="<?php echo e($post->id); ?>" data-token="<?php echo e(csrf_token()); ?>" data-button="like-<?php echo e($post->id); ?>" data-btnword="like-word-<?php echo e($post->id); ?>" data-stats="stats-total-<?php echo e($post->id); ?>">
                        <input type="hidden" id="earned-<?php echo e($post->id); ?>" value="1">
                     <i class="fa fa-thumbs-up fa-fw fa-lg m-r-3" style="color:<?php echo e(Auth::user()->likedPosts()->where('content_id', $post->id)->count() > 0 ? '#02eb0d' : ''); ?>" id="like-<?php echo e($post->id); ?>"></i>
                     <h3 style="display: inline-block;font-size:16px;color:<?php echo e(Auth::user()->likedPosts()->where('content_id', $post->id)->count() > 0 ? '#02eb0d' : ''); ?>" id="like-word-<?php echo e($post->id); ?>">Like</h3></a>
                     <form action="<?php echo e(route('post.like',$post->id)); ?>" method="POST" style="display:none" id="like-form-<?php echo e($post->id); ?>"><?php echo csrf_field(); ?></form>
                  </div>
                  <?php endif; ?>

                  <!-- pop COMMENT FUNCTION -->
                  <a href="javascript:commentBox(<?php echo e($post->id); ?>);" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                  <!-- SHARE FUNCTION -->
                  <div class="shareContainer">
                     <div class="emojibar" data-id="<?php echo e($post->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" id="earned-share-<?php echo e($post->id); ?>" value="1">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/community" target="_blank"><div class="emoji"><img src="Images/icons/facebook.png" alt=""><p>Facebook</p></div></a>
                        <a href="https://twitter.com/intent/tweet?url=http://127.0.0.1:8000/community" target="_blank"><div class="emoji"><img src="Images/icons/twitter.png" alt=""><p>Twitter</p></div></a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://127.0.0.1:8000/community&title=Share+title&summary=There+will+be+a+window+left" target="_blank"><div class="emoji"><img src="Images/icons/linkedin.png" alt=""><p>LinkedIn</p></div></a>
                        <a href="https://wa.me/?text=http://jorenvanhocht.be" target="_blank"><div class="emoji"><img src="Images/icons/whatsapp.png" alt=""><p>WhatsApp</p></div></a>
                     </div>
                     <a class="m-r-15 text-inverse-lighter share"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                  </div>
               </div>
               <!-- COMMENT SHOW-->
               <div class="timeline-comment-box" id="comment<?php echo e($post->id); ?>" style="display: none;">
                  <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="comment-list">
                     <?php if($comment->UserID == 1): ?>   
                     <div class="user"><img src="<?php echo e(asset('images/user/ghost.jpg')); ?>"></div>
                     <span class="username">George</span>
                     <?php elseif($comment->UserID ==2): ?>
                     <div class="user"><img src="<?php echo e(asset('images/user/guest1.png')); ?>"></div>
                     <span class="username">Ved</span>
                     <?php else: ?>
                     <div class="user">
                     <img src="<?php echo e(asset('images/user/'.$comment->user->userAvatar)); ?>" alt="userAvatar" class="rounded-circle" width="150">
                     </div>
                     <span class="username"><?php echo e($comment->user->name); ?></span>
                     <?php endif; ?>
                     <!-- <div class="user"><img src="<?php echo e(asset('images/user/'.$comment->UserID)); ?>"></div>
                     <span class="username"><?php echo e($comment->UserID); ?></span> -->
                     <div class="input comment-detail">
                        <p><?php echo e($comment->cmDetail); ?></p>
                     </div>
                     <?php if(Auth::id() == $comment->UserID): ?>
                     <div class="dropdown">
                        <!-- DELETE -->
                        <span class="icon-right-comment trash" style='font-size:10px' id="navbarDropdownMenuLink" >
                           <a href="<?php echo e(route('delComment',['id'=>$comment->id])); ?>" class="btn btn-sm btn-default ivm-show " style='padding:6px 13px;' onclick="return confirm('Are you sure to delete this comment?')">
                              <i class='fa fa-trash' style='color:whitesmoke;'></i>
                           </a>
                        </span>
                     </div>
                  <?php endif; ?>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- ADD COMMENT  -->
                  <div class="user"><img src="<?php echo e(asset('images/user/'.$users->userAvatar)); ?>"></div>
                  <div class="input">
                     <form action="<?php echo e(route('addComment')); ?>" method="POST" id="comForm" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                           <input type="hidden" name="userId" id="userId" value="<?php echo e($users->id); ?>">
                           <input type="hidden" name="postId" id="postId" value="<?php echo e($post->id); ?>">
                           <input maxlength="200" type="text" name="comment" id="comment" class="form-control rounded-corner" autocomplete="off" placeholder="Write a comment..." required/>
                           <span class="input-group-btn p-l-10">
                           <button class="btn btn-primary f-s-12 rounded-corner btn-color addcomment" type="submit" data-id="<?php echo e($users->id); ?>">Comment</button>
                           </span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         <!-- end timeline-body -->
      </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\User\Project\resources\views/data.blade.php ENDPATH**/ ?>