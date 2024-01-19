<?php $__env->startSection('title'); ?>
    Авторизация
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('login')); ?>" method="post" novalidate class="registration">
        <?php echo csrf_field(); ?>
        <ul class="error">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="error__message"><?php echo e($message); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <h1 class="registration__title">Авторизация</h1>
        <input name="email" id="email" class="<?php echo e($errors->has('email') ? 'error__input' : 'registration__input'); ?>" autofocus type="text" placeholder="Email">
        <input name="password" id="password" class="<?php echo e($errors->has('password') ? 'error__input' : 'registration__input'); ?>" type="password" placeholder="Пароль">
        <button class="registration__submit">Вход</button>
        <a class="registration__link" href="registration">У меня нет аккаунта</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/authorization.blade.php ENDPATH**/ ?>