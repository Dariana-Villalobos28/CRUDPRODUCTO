
<?php $__env->startSection('container'); ?>
<h1 class="text-center">Login</h1>
    <div class="container">
        <form action="<?php echo e(route('LoginStore')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <?php if(session('mensaje')): ?>
                    <div style="color:red"><?php echo e(session('mensaje')); ?></div>
                <?php endif; ?>

                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo e(old('username')); ?>" placeholder="Crea un usuario">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="color:red"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contraseña">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="color:red"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                <a href="<?php echo e(route('Dashboard')); ?>" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\daria\OneDrive\Escritorio\CrudProductos\CrudProductos\resources\views/auth/login.blade.php ENDPATH**/ ?>