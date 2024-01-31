

<?php $__env->startSection('title'); ?>
    <?php echo e($news->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="article-block">
        <h1 class="article-block__name"><?php echo e($news->name); ?></h1>
        <div class="article-block__profile">
            <img src="<?php echo e(asset('img/default_avatar.png')); ?>" width="50px" height="50px">
            <div class="article-block__data">
                <p class="article-block__data-name">Айрат Нигматзянов</p>
                <p class="article-block__data-id">02.02.2004</p>
            </div>
        </div>
        <p class="article-block__text"><?php echo e($news->text); ?></p>
        <?php if($news->code != null): ?>
            <p class="article-block__code"><?php echo e($news->code); ?></p>
        <?php endif; ?>
        <?php if($news->image != null): ?>
            <img class="article-block__image" src="<?php echo e($news->image); ?>" width="665px">
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/article.blade.php ENDPATH**/ ?>