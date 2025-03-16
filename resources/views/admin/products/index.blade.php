<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Products</h1>
        </div>
        <div>
            <form action="{{ route('admin.products.index') }}" method="GET">
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" />
                <button type="submit" class="btn btn-primary">Search</button>
                <a class="btn btn-secondary" href="{{ route('admin.products.index') }}">Clear</a>
            </form>
        </div>
    </div>
    <div class="container">
        @if (session()->get('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <p>
            {{ $products->links() }}
        </p>

        @can('create', App\Models\Product::class)
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create Product</a>
        @endcan

        <div class="row">
            @foreach ($products as $product)
                <div class="card col-2 m-2">
                    <img class="card-img-top" src="{{ $product->image }}" alt="product image">

                    <div class="card-body">
                        <h3 class="card-title">
                            {{ $product->name }}
                        </h3>
                        Item Number:{{ $product->item_number }}

                    </div>
                    <div class="card-footer text-center">
                        ${{ $product->price }}
                    </div>
                    <div>
                        <a href="{{ route('admin.products.show', $product->id) }}"
                            class="btn btn-primary mb-1 float-start">Details</a>
                    </div>

                    @can('create', App\Models\Product::class)
                        <div>
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-secondary  mb-1">Edit</a>
                        </div>
                        <div>
                            <form class="d-inline" action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-1">Delete</button>
                            </form>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
