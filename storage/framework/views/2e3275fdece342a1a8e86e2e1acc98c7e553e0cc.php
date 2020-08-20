
<?php $__env->startSection('content'); ?>
<?php echo Form::open(['action' => ['todoc@update', $todo->id], 'method' => 'POST']); ?>

    <div class="form-group">
      <?php echo e(Form::label('name', 'Title')); ?>

      <?php echo e(Form::text('title', $todo->title, ['class' => 'form-control'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('DAY', 'Day')); ?>

      <?php echo e(Form::date('day', $todo->day, ['class' => 'form-control'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('message', 'Message')); ?>

      <?php echo e(Form::textarea('body', $todo->body, ['class' => 'form-control'])); ?>

    </div>
    <div>
         <?php echo e(Form::hidden('_method', 'PUT')); ?>

    <?php echo e(Form::submit('submit', ['class'=> 'btn btn-primary'])); ?>

    </div>
  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project4\project\resources\views/layout/edit.blade.php ENDPATH**/ ?>