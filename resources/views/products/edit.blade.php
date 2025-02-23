<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit A Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
        
    <form method="POST" action="{{ route('product.update', ['product' => $product]) }}">
    @csrf
    @method('PUT') <!-- Use PUT via a hidden field -->

        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->Qty}}"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->Price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->Description}}" />
        </div>
        <div>
            <input type="submit" value="Update A New Product" />
        </div>


    </form>
</body>
</html>