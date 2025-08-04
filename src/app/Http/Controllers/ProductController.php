<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index()
    {
        $products=Product::with('seasons')->Paginate(6);
        return view('products', compact('products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $sort = $request->input('sort');

        $query = Product::query();

        if(!empty($request->keyword))
        {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        if(in_array($sort, ['asc', 'desc']))
        {
            $query->orderBy('price', $sort);
        }

        $products = $query->paginate(6);
        return view('search_results', compact('keyword','products'));
    }

    public function show($productId)
    {
        $product=Product::with('seasons')->findOrFail($productId);
        $seasons = Season::all();
        return view('details', compact('product','seasons'));
    }

    public function update(ProductRequest $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        if ($request->has('seasons')) {
            $product->seasons()->sync($request->seasons);
        }

        $product->save();
        return redirect('/products');
    }

    public function register()
    {
        return view('register');
    }
    

}
