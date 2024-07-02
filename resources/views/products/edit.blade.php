<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<body>
<h1>Edit Product</h1>
<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>
    <form  method="post" action="{{route('update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Product Name</label>
            <input type="text" placeholder="name"  name='name' value="{{$product->name}}" required>
        </div>
        <div>
            <label for="">Quantity</label>
            <input type="text" placeholder="quantity" name='qty' value="{{$product->qty}}" required>
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" placeholder="price" name='price' value="{{$product->price}}" required>
        </div>
        <div>
            <label for="">Description</label>
        <input type="text" placeholder="description" name='description' value="{{$product->description}}">
        </div>
        <input type="submit" value="Update">
    </form>
</body>
</html>
