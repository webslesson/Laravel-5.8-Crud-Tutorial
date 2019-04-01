<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
	<h3>First Name - <?php echo e($data->first_name); ?> </h3>
	<h3>Last Name - <?php echo e($data->last_name); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\server\eds-www\crud\resources\views/view.blade.php */ ?>