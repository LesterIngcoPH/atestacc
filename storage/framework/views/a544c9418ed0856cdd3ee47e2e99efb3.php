<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <tr>
            <tbody class="table-secondary">
                
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->title); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><img src="product/<?php echo e($product->image); ?>" alt="<?php echo e($product->image); ?>" height=50px></td>
                    <td><?php echo e($product->created_at); ?></td>
                    <td><?php echo e($product->updated_at); ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('you sure bout that?');" href="<?php echo e(url('delete_data',$product->id)); ?>">Delete</a></td>
                    <td><a class="btn btn-success" href="<?php echo e(url('edit_data',$product->id)); ?>">Edit</a></td>
                <tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </tr>
    </table>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Another\laracrud\resources\views/product.blade.php ENDPATH**/ ?>