<?php $__env->startSection('title'); ?>
    Регистрация
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('register')); ?>" method="post" novalidate autocomplete="off" class="registration">
        <?php echo csrf_field(); ?>
        <h1 class="registration__title">Регистрация</h1>
        <input class="registration__input" name="login" id="login" type="text" placeholder="Логин">
        <input class="registration__input" name="password" id="password" type="password" placeholder="Пароль">
        <input class="registration__input" name="confirm_password" id="confirm_password" type="password" placeholder="Повтор пароля">
        <input class="registration__input" name="name" type="text" id="name" placeholder="Имя">
        <input class="registration__input" name="surname" type="text" id="surname" placeholder="Фамилия">
        <button type="submit" class="registration__submit">Регистрация</button>
        <a class="registration__link" href="login">У меня уже есть аккаунт</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\FQW\resources\views/registration.blade.php ENDPATH**/ ?>