<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <center>
        <br>
        <a class="btn btn-success" href="<?php echo e(url('/show_data')); ?>">Show Product</a>
        <br>
        <h1>Add Products</h1>

        

        <form action="<?php echo e(url('/add_product')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="p-2">
                <label for="">Product Title</label>
                <input type="text" name="title">
            </div>
            <div class="p-2">
                <label for="">Description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="p-2">
                <label for="">Product image</label>
                <input type="file" name="image">
            </div>

            <input class="btn btn-primary" onclick="return confirm('NOOOOOOOOOO DOUBLE CHECK');" type="submit" value="Add Product">

        </form>


        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>

            <tr>
                <tbody class="table-secondary">
                    <?php $__currentLoopData = $just_new_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($prod_data->title); ?></td>
                        <td><?php echo e($prod_data->description); ?></td>
                        <td><?php echo e($prod_data->image); ?></td>
                        <td><?php echo e($prod_data->created_at); ?></td>
                        <td><?php echo e($prod_data->updated_at); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>

            </tr>
        </table>
    </center>
   
    
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Another\laracrud\resources\views//home.blade.php ENDPATH**/ ?>