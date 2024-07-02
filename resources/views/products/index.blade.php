<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<body>
<h1>Product</h1>
<div>
    <a href="{{route('create')}}"><button class="btn bg-primary">Add Product</button></a>
</div>
<div>

        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
            <th>DELETE</th>
        </tr>

            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('edit', ['product' => $product])}}">Edit</a></td>
                <td>
                    <form action="{{route('delete', ['product' => $product])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
</div>

</body>
</html>
