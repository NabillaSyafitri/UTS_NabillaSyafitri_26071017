<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kurikulum</title>
</head>
<body>
    <h1>Data Kurikulum</h1>
    <table border="1">
         <tr>
            <th>No</th>
            <th>Kode_MK</th>
            <th>Nama Matkul</th>
        </tr>

        <?php $__currentLoopData = $kurikulum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table_kurikulum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no = 1; ?>     
        
        <tr>
            <td><?php echo e($table_kurikulum->No); ?></td></td>
            <td><?php echo e($table_kurikulum->Kode_MK); ?></td>
            <td><?php echo e($table_kurikulum->Nama_Matkul); ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\Users\Asus Vivobook\uts_nabillasyafitri\uts_nabillasy\resources\views/kurikulum.blade.php ENDPATH**/ ?>