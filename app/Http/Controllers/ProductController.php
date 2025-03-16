<?php

namespace App\Http\Controllers;
use App\Models\Product;
 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::search(request('search'))->paginate(10);;

        return view('products.index', ['products'=> $products]);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.show', ['product'=> $product]);
    }


}
