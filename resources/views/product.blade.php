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
                
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td><img src="product/{{$product->image}}" alt="{{$product->image}}" height=50px></td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td><a class="btn btn-danger" onclick="return confirm('you sure bout that?');" href="{{url('delete_data',$product->id)}}">Delete</a></td>
                    <td><a class="btn btn-success" href="{{url('edit_data',$product->id)}}">Edit</a></td>
                <tr>
                @endforeach
                
            </tbody>
        </tr>
    </table>
</body>
</html>