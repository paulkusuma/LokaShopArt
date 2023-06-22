<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\products;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashBoardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'products' => product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // // return $request->file('image')->store('product-images');
        // return $request;
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'stok' => 'required',
            'image' => 'image|file|max:2048',
            'price' => 'required',
            'description' => 'required'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('product-images');
        }
        $validateData['user_id'] = auth()->user()->id;
        product::create($validateData);
        return redirect('/dashboard/products')->with('success', 'Produk Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('dashboard.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'stok' => 'required',
            'image' => 'image|file|max:2048',
            'price' => 'required',
            'description' => 'required'
        ];
        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }
        $validateData = $request->validate($rules);

        $validateData['user_id'] = auth()->user()->id;

        product::where('id', $product->id)
            ->update($validateData);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}