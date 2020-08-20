

<?php $__env->startSection('content'); ?>
    

<?php echo Form::open(['action' => 'todoc@store']); ?>

    <div class="form-group">
      <?php echo e(Form::label('name', 'Title')); ?>

      <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('DAY', 'Day')); ?>

      <?php echo e(Form::date('day', '', ['class' => 'form-control'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('message', 'Message')); ?>

      <?php echo e(Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter todo'])); ?>

    </div>
    <div>
      <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

    </div>
  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project4\project\resources\views/layout/create.blade.php ENDPATH**/ ?>