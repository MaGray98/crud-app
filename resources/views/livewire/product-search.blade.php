<div>
    <input wire:model.live.debounce.2000ms="q" type="text" placeholder="Search" class="form-control mb-3">
  
    
 
    <div class="row">
        @foreach ($products as $product)
            <div class="card col-2 m-2">
   
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p>Item Number: {{ $product->item_number }}</p>
                </div>
                <div class="card-footer text-center">
                    ${{ $product->price }}
                </div>
                <div>
                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary mb-1 float-start">Details</a>
                </div>
            </div>
        
        @endforeach
    </div>

</div>

{{-- 
<div>
    <form action="{{ route('admin.products.index') }}" method="GET">
        <input wire:model.live="search" type="text" name="search" placeholder="Search" value="{{ request('search') }}" />
   
    </form>
</div>
--}}