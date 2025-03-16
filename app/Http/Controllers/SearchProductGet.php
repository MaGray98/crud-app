<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchProductGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $search = $request->query('q'); 
            if (!$search) {
                return response()->json(['message', "Query parameter 'q' is required"]);
            }

            $products = Product::search($search)->get();
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error retrieving products.']);
        }
    }
}
