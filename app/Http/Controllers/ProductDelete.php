<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;


class ProductDelete extends Controller
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

        $product->delete();

        return response()->json(['message', 'product deleted ']);
    }
}
