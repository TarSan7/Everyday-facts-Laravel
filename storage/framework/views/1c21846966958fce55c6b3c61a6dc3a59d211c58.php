

<?php $__env->startSection('title'); ?> FactOfTheDay <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section1">
    <div class="title">
        <p class="title-text">New fact for you!</p>
    </div>
    <div class="content">
        <hr>
        <div class="text"><?php echo e($fact); ?></div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WAMP\wamp64\www\macpow\resources\views/main.blade.php ENDPATH**/ ?>