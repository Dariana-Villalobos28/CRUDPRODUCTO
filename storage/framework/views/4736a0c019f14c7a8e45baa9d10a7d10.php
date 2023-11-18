<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud productos</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
       
    </head>
    <body>
        <?php echo $__env->make('partials.menuprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(session('status')): ?>
            <div class="container mt-3" id="statusMessage">
            <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

            </div>
            </div>
            <script>
            setTimeout(function() {
                var statusMessage = document.getElementById('statusMessage');
                if (statusMessage) {
                    statusMessage.classList.add('hidden');
                    setTimeout(function() {
                        statusMessage.style.display = 'none';
                    }, 500);
                }
            }, 3000);
            </script>
        <?php endif; ?>
        <?php echo $__env->yieldContent('container'); ?>
        <?php echo $__env->yieldContent('js'); ?>
       
        <!-- Navegación -->
    
    </body>
</html>
<?php /**PATH C:\Users\jazmi\Documents\7mo semestre\Pedro\Laravel_Clase\CrudProductos\resources\views/layouts/app_principal.blade.php ENDPATH**/ ?>