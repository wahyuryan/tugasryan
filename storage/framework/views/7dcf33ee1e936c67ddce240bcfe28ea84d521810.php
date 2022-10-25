
<?php $__env->startSection('title', 'mastersiswa'); ?>
<?php $__env->startSection('content-title', 'Mastersiswa'); ?>
<?php $__env->startSection('content'); ?>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
    <?php if($message = Session::get('danger')): ?>
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
<div class="row">
<div class="col-lg-4">
            <div style="font-weight: 500;" class="justify-content-left"> 
                <a href="<?php echo e(route('mastersiswa.create')); ?>" class="btn btn-primary">Tambah Data</a>
            </div>
            </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
        <div style="font-weight: 500;" class="card-header bg-gradient-primary text-white">
			        <i class="bi bi-person-lines-fill" style="margin-right: 5px;"></i>
			        Data Siswa
			    </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NISN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e(++ $i); ?></th>
                        <td><?php echo e($item -> nama); ?></td>
                        <td><?php echo e($item -> nisn); ?></td>
                        <td><?php echo e($item -> alamat); ?></td>
                    <td>
                        <a href="<?php echo e(route('mastersiswa.show', $item -> id)); ?>" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                        <a href="<?php echo e(route('mastersiswa.edit', $item -> id)); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo e(route('mastersiswa.hapus', $item -> id)); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ryan\resources\views/master/mastersiswa.blade.php ENDPATH**/ ?>