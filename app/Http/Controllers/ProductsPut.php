<?php

namespace App\Http\Controllers;
use \App\Models\Product;


use App\Models\Validators\ProductValidator;
use Illuminate\Http\Request;

class ProductsPut extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
        $data = $request->all();
        $validatedData = ProductValidator::validate($data, 'put');

        $product = Product::find($validatedData['id']);
        if (!$product) {
            return response()->json(['message', 'Product not found']);
        }
        $product->update($validatedData);

        return response()->json(['product' => $product]);

    } catch (\Exception $e) {
        return response()->json(['message', 'Error updating product. Please check that you are sending the correct data.']);
    }
    }
}
