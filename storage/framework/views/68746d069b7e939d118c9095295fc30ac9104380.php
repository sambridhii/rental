<html>
<head>
    <body>
<table>
    <tr>
        <tb>Location </tb>
        <tb>Contact</tb>
        <tb>Numberofroom</tb>
        <tb>Image</tb>

    </tr>
    <?php $__currentLoopData = $house; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($house->Location); ?></td>
            <td><?php echo e($house->Contact); ?></td>
            <td><?php echo e($house->Numberofroom); ?></td>
            <td><?php echo e($house->Image); ?></td>
            <td> <img src="<?php echo e(asset('storage/image/'.$house->image)); ?>"/> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</head>
</html>
<?php /**PATH C:\Users\sambr\project\rental\resources\views/list.blade.php ENDPATH**/ ?>