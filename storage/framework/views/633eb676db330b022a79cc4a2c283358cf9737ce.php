
<?php $__env->startSection('title', 'Edit Project'); ?>
<?php $__env->startSection('content-title', 'Edit Project '); ?>
<?php $__env->startSection('content'); ?>
<?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
<div class="card shadow mb-4">
    <div class="card-body">
    <form method="post" enctype="multipart/form-data" action="<?php echo e(route('masterproject.update' , $project->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nama">NAMA PROJECT</label>
                <input type="text" class="form-control" id="nama_project" name="nama_project" value="<?php echo e($project->nama_project); ?>">
            </div>
            <div class="form-group">
                <label for="nama">DASKRIPSI PROJECT</label>
                <textarea type="deskripsi" id="deskripsi" name="deskripsi" class="form-control"><?php echo e($project->deskripsi); ?></textarea>
            </div>
            <div class="form-group">
                <label for="nama">TANGGAL PROJECT</label>
                <input type="date" class="form-control" id="tanggl" name="tanggl" value="<?php echo e($project->tanggl); ?>">
            </div><br>
            <div class="form-group">
            <a href="<?php echo e(route('masterproject.index')); ?>" class="btn btn-danger">Kembali</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\newxampp\htdocs\zazizu\resources\views/project/EditProject.blade.php ENDPATH**/ ?>