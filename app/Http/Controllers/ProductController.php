<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function getProducts () {
        // dd('hi');
        $products = Product::with('category')->get();
        $data = ProductResource::collection($products);
        // dd($data);
        return response()->json($data);
    }
}
