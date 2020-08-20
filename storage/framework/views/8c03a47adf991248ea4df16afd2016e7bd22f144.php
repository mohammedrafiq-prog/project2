
<?php $__env->startSection('content'); ?>

    <h1 class="text-secondary card-title"><?php echo e($todo->title); ?> </h1>
  <div class="well">
    <h3><a class="btn list-group-item-danger"><?php echo e($todo->day); ?></a></h3> 
    <hr>
    <p><?php echo e($todo->body); ?></p></div>
    <a href="/project4/project/todo/<?php echo e($todo->id); ?>/edit" class="btn btn-secondary">Edit</a>
    <?php echo Form::open(['action' => ['todoc@destroy', $todo->id], 'method' => 'POST']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

    <?php echo e(Form::submit('DELETE', ['class'=> 'btn btn-danger'])); ?>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project4\project\resources\views/layout/show.blade.php ENDPATH**/ ?>