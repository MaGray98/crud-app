<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div><h1>Create Product</h1></div>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>    
@endif
<form method="POST" action="{{route('admin.products.update', $product)}}">
    @csrf
    @method('PUT')
    @include('admin.products.form')
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route ('admin.products.index')}}" class="btn btn-secondary">Cancel</a>
</form>
    </div>
</body>
