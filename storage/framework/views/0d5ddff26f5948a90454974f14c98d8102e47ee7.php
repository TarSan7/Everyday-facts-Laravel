

<?php $__env->startSection('title'); ?> AddFact <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="section1">
    <div class="title">
        <p class="title-text">Add your own fact!</p>
    </div>
    <div class="content">
        <hr>
        <form action="add/data" class="form" method="POST">
            <?php echo csrf_field(); ?>
            <label for="text" class="label">Enter your fact</label>
            <input type="text" placeholder="Some interesting fact..." required class="fact" name="fact">
            <p class="btn"><button type="submit" class="but">Send</button></p>
        </form>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WAMP\wamp64\www\macpow\resources\views/add.blade.php ENDPATH**/ ?>