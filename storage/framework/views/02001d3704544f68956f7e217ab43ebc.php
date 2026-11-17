<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelajaran</title>
</head>
<body>
    <h1>Data Pelajaran</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pelajaran</th>
        </tr>

        <?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table_pelajaran_nabilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no = 1; ?>     
        
        <tr>
            <td><?php echo e($table_pelajaran_nabilla->No); ?></td></td>
            <td><?php echo e($table_pelajaran_nabilla->Kode); ?></td>
            <td><?php echo e($table_pelajaran_nabilla->Nama_Pelajaran); ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\Users\Asus Vivobook\uts_nabillasyafitri\uts_nabillasy\resources\views/pelajaran.blade.php ENDPATH**/ ?>