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
        <a class="btn btn-success" href="{{url('/show_data')}}">Show Product</a>
        <br>
        <h1>Add Products</h1>

        

        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
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
                <th>Delete</th>
            </tr>

            <tr>
                <tbody class="table-secondary">
                    @foreach($just_new_data as $prod_data)
                    <tr>
                        <td>{{$prod_data->title}}</td>
                        <td>{{$prod_data->description}}</td>
                        <td>{{$prod_data->image}}</td>
                        <td><img src="product/{{$prod_data->image}}" height=50px></td>
                        <td>{{$prod_data->created_at}}</td>
                        <td>{{$prod_data->updated_at}}</td>
                        
                        <td><a class="btn btn-danger" href="{{url('delete_data',$prod_data->id)}}">DELETE</a></td>
                    </tr>
                    @endforeach    
                </tbody>


                

            </tr>
        </table>
    </center>
   
    
</body>
</html>