
<?php $__env->startSection('title', 'masterproject'); ?>
<?php $__env->startSection('content-title', 'Masterproject'); ?>
<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="card shadow mb-4">
		        <div style="font-weight: 500;" class="card-header bg-gradient-primary text-white">
			        <i class="bi bi-person-lines-fill" style="margin-right: 5px;"></i>
			        Data Siswa
			    </div>
			    <div class="card-body">
					<table class="table table-hover" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Nisn</th>
					            <th>nama</th>
                                <th>Action</th>
					        </tr>
					    </thead>
						<tbody>
                        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<tr>
                            	<td><?php echo e($item-> nisn); ?></td>
                            	<td><?php echo e($item-> nama); ?></td>
                            	<td class="text-center">
                                	<a class="btn btn-info" onclick="show(<?php echo e($item->id); ?>)"><i class="fas fa-folder-open"></i></a>
                                	<a href="<?php echo e(route('masterproject.tambah', $item->id )); ?>" class="btn btn-success"><i class="fas fa-plus"></i></a>
                            	</td>
                        	</tr>
                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
                    <div class="card-footer d-flex justify-content-end">
                        <?php echo e($data->links()); ?>

                    </div>
			    </div>
		    </div>
		</div>

		<div class="col-lg-6">
			<div class="card shadow mb-4" style="">
		        <div style="font-weight: 500;" class="card-header bg-gradient-primary text-white">
			        <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
			        Project Siswa
			    </div>
			    <div id="project" class="card-body">
					<section class="text-center">
					    <h6>Pilih Siswa Terlebih Dahulu</h6>
					</section>
			    </div>
		    </div>
		</div>
	</div>
	<script>
		function show(id){
			$.get('masterproject/'+id, function(data){
				$('#project').html(data);
			})
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ryan\resources\views/master/masterproject.blade.php ENDPATH**/ ?>