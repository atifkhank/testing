<?php $__env->startSection('title', __('Unauthorized')); ?>
<?php $__env->startSection('code', '401'); ?>
<?php $__env->startSection('message', __('Unauthorized')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>