
<?php $__env->startSection('content'); ?>
    <h1 class="text-secondary">ToDo List</h1>
    <?php if(count($todos)>0): ?>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
             <h3><?php echo e($todo->title); ?> <a href="todo/<?php echo e($todo->id); ?>" class="btn list-group-item-danger"><?php echo e($todo->day); ?></a></h3> 
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project4\project\resources\views/home.blade.php ENDPATH**/ ?>