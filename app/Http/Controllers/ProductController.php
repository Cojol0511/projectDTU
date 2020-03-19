<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('layouts.products.index', ['products' => $products]);
        //return redirect()->route('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(
            $request,
            [
                'name' => 'required',
                'id_type' => 'required',
                'id_supplier' => 'required',
                'description' => 'required',
                'price' => 'required',
                'promotion_price' => 'required',
                'image' => 'required',
            ],
            [
                // thong bao nhap
            ]
        );
        $product = new Product();
        $product->name = $request->name;
        $product->id_type =  $request->id_type;
        $product->id_supplier =  $request->id_supplier;
        $product->description =  $request->description;
        $product->price =  $request->id_price;
        $product->promotion_price =  $request->promotion_price;
        $product->image =  $request->image;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        //
        return view('product.show', [
            'product' => product::whereSlug($product)->first(),
            'products' => product::where('status', 0)->orderBy('id', 'desc')->take(12)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $product = product::whereSlug($slug)->first();
        return view('product.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->name = $request->name;
        $product->id_type =  $request->id_type;
        $product->id_supplier =  $request->id_supplier;
        $product->description =  $request->description;
        $product->price =  $request->id_price;
        $product->promotion_price =  $request->promotion_price;
        $product->image =  $request->image;
        $product->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
