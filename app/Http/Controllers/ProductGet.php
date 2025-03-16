<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Models\Product;
use function Pest\Laravel\json;

class ProductGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        
            $product = Product::find($id);

            if(!$product) {
                return response()->json(['message', 'Product not found']);
            }

            return response()->json(['product' => $product]);
    

        
    }
}
