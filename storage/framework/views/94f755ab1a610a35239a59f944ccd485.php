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
        <h1>Update Products</h1>

        

        <form action="<?php echo e(url('/update_product',$update_product->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="p-2">
                <label for="">Product Title</label>
                <input type="text" name="title" value="<?php echo e($update_product->title); ?>">
            </div>
            <div class="p-2">
                <label for="">Description</label>
                <textarea name="description" ><?php echo e($update_product->description); ?></textarea>
            </div>
            <div class="p-2">
                <label for="">Image</label>
                <td><img src="/product/<?php echo e($update_product->image); ?>" alt="<?php echo e($update_product->image); ?>" height=150px></td>
            </div>
            <div class="p-2">
                <label for="">Change image</label>
                <input type="file" name="image">
            </div>

            <input class="btn btn-primary" type="submit" value="Update Product">

        </form>


      



      
    </center>
   
    
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Another\laracrud\resources\views/product_update.blade.php ENDPATH**/ ?>