<?php $__env->startSection('title'); ?>
    Авторизация
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="registration">
        <h1 class="registration__title">Авторизация</h1>
        <input class="registration__input" type="text" placeholder="Логин">
        <input class="registration__input" type="password" placeholder="Пароль">
        <button class="registration__submit">Вход</button>
        <a class="registration__link" href="registration">У меня нет аккаунта</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/authorization.blade.php ENDPATH**/ ?>