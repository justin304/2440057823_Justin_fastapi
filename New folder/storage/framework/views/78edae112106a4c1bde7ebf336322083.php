<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel UMKM</h2>
                    <a href="/" class="btn btn-success">Create</a>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success my-3">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('red')): ?>
                    <div class="alert alert-danger my-3">
                        <?php echo e(session('red')); ?>

                    </div>
                <?php endif; ?>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama UMKM</th>
                            <th>Kategori UMKM</th>
                            <th>Deskripsi UMKM</th>
                            <th>Alamat UMKM</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $umkmsArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            
                            <tr style="cursor:pointer;">
                                <th><?php echo e($loop->iteration); ?></th>
                                <th><?php echo e($umkm['nama_umkm']); ?></th>
                                <td><?php echo e($umkm['desc_umkm']); ?></td>
                                <td><?php echo e($umkm['kelompok_umkm']); ?></td>
                                <td><?php echo e($umkm['alamat_umkm'] == '' ? 'N/A' : $umkm['alamat_umkm']); ?></td>
                                <td>
                                    <button class="btn btn-primary" style="margin-right: 1%">Edit</button>
                                    <form action="<?php echo e(route('umkm_delete', ['id' => $umkm['id_umkm']])); ?>" method="post">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="6" class="text-center">Tidak ada data...
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\justi\Desktop\test\2440108843-RafliHaikhal\resources\views/umkm/index.blade.php ENDPATH**/ ?>