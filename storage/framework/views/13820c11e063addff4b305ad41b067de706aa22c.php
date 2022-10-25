
<?php $__env->startSection('title', 'Tambah Project'); ?>
<?php $__env->startSection('content-title', 'Tambah Project '. $siswa->nama); ?>
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
<form method="post" enctype="multipart/form-data" action="<?php echo e(route('masterproject.store')); ?>">
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="id_siswa" value="<?php echo e($siswa->id); ?>"> -->
    <div class="form-group">
        <input type="hidden" name="id_siswa" value="<?php echo e($siswa->id); ?>">  
        <label for="nama">NAMA PROJECT</label>
        <input type="text" class="form-control" id="nama_project" name="nama_project" value="<?php echo e(old('nama_project')); ?>">
    </div>
    <div class="form-group">
        <label for="nama">DASKRIPSI PROJECT</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control" value="<?php echo e(old('deskripsi')); ?>"></textarea>
    </div>
    <div class="form-group">
        <label for="nama">TANGGAL PROJECT</label>
        <input type="date" class="form-control" id="tanggl" name="tanggl" value="<?php echo e(old('tanggl')); ?>">
    </div><br>
    <div class="form-group">
        <a href="<?php echo e(route('masterproject.index')); ?>" class="btn btn-danger">Kembali</a>
        <input type="submit" class="btn btn-success" value="simpan">
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\newxampp\htdocs\zazizu\resources\views/project/TambahProject.blade.php ENDPATH**/ ?>