<?php if($project->isEmpty()): ?>
    <h6>Siswa Belum Memiliki Project</h6>
<?php else: ?>
    <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <div class="card-header">
            <strong> <?php echo e($item->nama_project); ?></strong>
        </div>
        <div class="card-body">
            <strong>Nama Project</strong>
            <p><?php echo e($item->nama_project); ?></p>
            <strong>Tanggal Project</strong>
            <p><?php echo e($item->tanggl); ?></p>
            <strong>Deskripsi Project</strong>
            <p><?php echo e($item->deskripsi); ?></p>
        </div>
        <div class="card-footer">  
            <form action="/masterproject/<?php echo e($item->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>    
                <button type="submit" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                <a href="<?php echo e(route('masterproject.edit', $item->id)); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>    
            </form>
        </div>
    </div>
    <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?><?php /**PATH C:\xampp\htdocs\kevin\resources\views/project/ShowProject.blade.php ENDPATH**/ ?>