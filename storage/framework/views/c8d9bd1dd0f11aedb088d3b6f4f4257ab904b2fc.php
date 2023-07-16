

<?php $__env->startSection('main'); ?>
 <!-- main -->
 <main class="container">
      <h2 class="header-title">All Blog Posts</h2>
      <?php if(session('status')): ?>
        <p style="color:white; font-size:18px;font-weigth:500;;background:#1abd1a;padding:10px;margin-bottom:10px;border-radius:10px"><?php echo e(session('status')); ?></p>
    <?php endif; ?>
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />

          <button type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="">Health</a></li>
          <li><a href="">Entertainment</a></li>
          <li><a href="">Sports</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
      <section class="cards-blog latest-blog">
        
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-blog-content">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->id === $post->user->id): ?>
                            <div class="post-buttons">
                                <a href="<?php echo e(route('blog.edit', $post)); ?>">Edit</a>
                                <form action="<?php echo e(route('blog.delete', $post)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <input type="submit" value=" Delete">
                                </form>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <img src="<?php echo e(asset($post->imagePath)); ?>" alt="" />
                    <p>
                        <?php echo e($post->created_at->diffForHumans()); ?>

                        <span>Written By <?php echo e($post->user->name); ?></span>
                    </p>
                    <h4>
                        <a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></a>
                    </h4>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- pagination -->
        
      </section>
      <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
        <br>
      <!-- Main footer -->
      
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\blog\resources\views/blogPosts/blog.blade.php ENDPATH**/ ?>