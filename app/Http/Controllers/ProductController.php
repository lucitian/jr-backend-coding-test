<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
        $products = Product::paginate(5);

        // return response()->json(['products' => $products], 200);
        return view('content', [
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {
        //POST
        $product = new Product();

        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->description = $request->input('product_description');

        $product->save();

        return redirect()->route('index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getProduct($id)
    {
        //GET specific product
        $data = Product::find($id);

        return view('product.product', [
            'product' => $data
        ]);
    }
}
