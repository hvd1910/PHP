<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);

        return view('index',compact('products')) -> with('i', (request()->input('page',1)-1)*5);

    }
    public function  create() {
        return view('create');
    }

    public function store(Request $request) {

        Product::create($request->all());
        return redirect() ->to('/product');

    }


    public function show(string $id){
        $product = Product::findOrFail($id);
        return view('show', compact('product'));

    }


    public function edit(Product $product) {
        return view ('edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $product->update($request->all());
        return redirect() ->route('product.index');
    }


    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('product.index');
    }

}
