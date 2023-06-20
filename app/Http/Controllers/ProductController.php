<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "products" => product::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function showdetail(Product $product)
    {
        return view('productdetail', [
            "product" => $product
        ]);
    }
}