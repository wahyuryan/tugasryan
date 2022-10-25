
<?php $__env->startSection('title', 'masterkontak'); ?>
<?php $__env->startSection('content-title', 'Masterkontak'); ?>
<?php $__env->startSection('content'); ?>
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
                        	<tr>
                            	
                        	</tr>
                        
						</tbody>
					</table>
                    <div class="card-footer d-flex justify-content-end">
                    </div>
			    </div>
		    </div>
		</div>
		<div class="col-lg-6">
			<div class="card shadow mb-4" style="border: 1px solid #bbb;">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ryan\resources\views/master/masterkontak.blade.php ENDPATH**/ ?>