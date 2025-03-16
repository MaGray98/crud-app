<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Validators\ProductValidator;

class ProductPost extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try { 
        $data = $request->all();
        $validateData = ProductValidator::validate($data, 'post');
        $product = Product::create($validateData);
        return response()->json(['product' => $product]);
        } catch (\Exception $e) {
            return response()->json(['message', 'Error creating product. Please check your data']);
        }

    }
}
