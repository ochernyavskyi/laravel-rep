<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category:id,title'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $data = request(['title', 'price', 'product_id']);
        return view('products.create', compact('data'));
    }

    public function store(ProductStoreRequest $request)
    {
        $request->validated();
        $data = request(['title', 'price', 'category_id']);
        var_dump($data);
        \App\Models\Product::create($data);
        return redirect() -> to('products');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));

    }

    public function update(ProductStoreRequest $request)
    {
        $request->validated();
        $product = Product::find($request['product_id']);
        $product['title'] = $request['title'];
        $product['price'] = $request['price'];
        $product['category_id'] = $request['category_id'];
        $product->save();
        return redirect() -> to('products');
    }

    public function delete($product)
    {
        $product = Product::find($product);
        $product->delete();
        return redirect() -> to('products');
    }
}
