
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <img src="{{$product->image}}" class="img" style="width:700px;height:500px" />
    <h1>
    {{ $product->name}}
    </h1>
    <h3>
        {{$product->price}}
    </h3>
    <p>
        {{$product->description}}
    </p>    
    <a href="{{route ('admin.products.index')}}">Go Back</a>
    </div>

</body>
</html>