
<?php $__env->startSection('title', 'Tambah Siswa'); ?>
<?php $__env->startSection('content-title', 'Tambah Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <form method="post" enctype="multipart/form-data" action="<?php echo e(route('mastersiswa.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="Nisn">Nisn</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo e(old('nisn')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e(old('alamat')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-select form-control" id="jk" name="jk" value="<?php echo e(old('jk')); ?>">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto Siswa</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo e(old('foto')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="About">About</label>
                            <textarea class="form-control" id="about" name="about" value="<?php echo e(old('about')); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="simpan">
                            <a href="<?php echo e(route('mastersiswa.index')); ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\newxampp\htdocs\zazizu\resources\views/siswa/TambahSiswa.blade.php ENDPATH**/ ?>