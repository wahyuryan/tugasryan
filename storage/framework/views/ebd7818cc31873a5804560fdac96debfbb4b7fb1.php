
<?php $__env->startSection('title', 'Show Siswa'); ?>
<?php $__env->startSection('content-title', 'Show Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
            <div class="card-header"></div>
                <div class="card-body text-center">
                        <img src="<?php echo e(asset('/template/img/'.$siswa->foto)); ?>" width="200" class="rounded-circle mt-3 mx-auto img-thumbail"><br>
                    <h4 class=""><?php echo e($siswa->nama); ?></h4>
                    <h5 class=""><i class="fas fa-id-card"><?php echo e($siswa->nisn); ?></i></h5>
                    <h5 class=""><i class="fas fa-venus-mars"><?php echo e($siswa->jk); ?></i></h5>
                    <h5 class=""><i class="fas fa-map"><?php echo e($siswa->alamat); ?></i></h5>
                </div>
          </div>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus">Kontak Siswa</i></h6>
                </div>
                <div class="card-body text-center">
                    <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($kontak->jenis_kontak); ?> : <?php echo e($kontak->pivot->deskripsi); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i>About Siswa</h6>
            </div>
                <div class="card-body">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0"><?php echo e($siswa->about); ?></p>
                        <footer class="blockquote-footer">Ditulis Oleh <cite title="source title"><?php echo e($siswa->nama); ?></cite></footer>
                    </blockquote>
                </div>
            </div>
            <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-tasks"></i>Project Siswa</h6>
            </div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\newxampp\htdocs\zazizu\resources\views/siswa/ShowSiswa.blade.php ENDPATH**/ ?>