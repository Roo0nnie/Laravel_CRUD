<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<body>
<h1>Add Product</h1>
<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>
    <form  method="post" action="{{route('store')}}">
        @csrf
        @method('post')
        <div>
            <label for="">Product Name</label>
            <input type="text" placeholder="name"  name='name' required>
        </div>
        <div>
            <label for="">Quantity</label>
            <input type="text" placeholder="quantity" name='qty' required>
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" placeholder="price" name='price' required>
        </div>
        <div>
            <label for="">Description</label>
        <input type="text" placeholder="description" name='description'>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
