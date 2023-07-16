

<?php $__env->startSection('main'); ?>


<main class="container" style="background-color:white">
<section id="contact-us">
    <h1 style="padding-top:50px;">Create New Post!</h1>

    <div class="contact-form">
        <form action="" method="">
            <label for="title"><span>Title</span></label>
            <input type="text" id="title" name="title"/>

            <label for="image"><span>Image</span></label>
            <input type="file" id="image" name="image"/>
            
            <label for="body"><span>Body</span></label>
            <textarea  id="body" name="body"></textarea>
            
            <input type="submit" value ="Submit"/>
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\blog\resources\views/create-blog-post.blade.php ENDPATH**/ ?>