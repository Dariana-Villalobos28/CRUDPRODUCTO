
<?php $__env->startSection('container'); ?>
    <h1 class="text-center">Editar producto</h1>
    <div class="container">
        <form action="<?php echo e(route('ProductosUpdate',$producto->id)); ?>" method="post">
            <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" id="nombre" class="form-control" value="<?php echo e(old('nombre',$producto->nombre)); ?>">
                <?php $__errorArgs = ['nombre'];
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
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo e(old('descripcion',$producto->descripcion)); ?>">
                <?php $__errorArgs = ['descripcion'];
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
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="<?php echo e(old('precio',$producto->precio)); ?>">
                <?php $__errorArgs = ['precio'];
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
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="<?php echo e(route('ProductosIndex')); ?>" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jazmi\Documents\7mo semestre\Pedro\Laravel_Clase\CrudProductos\resources\views/productos/edit.blade.php ENDPATH**/ ?>