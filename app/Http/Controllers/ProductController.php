<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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

        return view('products.index', ['products' => $products]);
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
        // dd($request->images->getClientOriginalName());


        $request->validate(
            [
                'name' => 'required',
                'id_type' => 'required',
                // 'id_supplier' => 'required',
                'description' => 'required',
                'price' => 'required',
                'promotion_price' => 'required',
                //'images' => 'required',
            ],
            [
                // thong bao nhap
                'name.required' => 'Bạn phải nhập tên sản phẩm',
                'id_type.reuqired' => 'Bạn chưa chọn id_type cho sản phẩm',
                // 'id_supplier.required' => 'id_supplier là bắt buộc',
                'description.required' => 'description là bắt buộc',
                'prices.required' => 'price là bắt buộc',
                'promotion_price.required' => 'promotion_price là bắt buộc',
            ]
        );

        $images = $request->images;
        $checkExtention = 0;
        foreach ($images as $image) {
            $imageExtension = $image->getClientOriginalExtension();
            if (
                strtoupper($imageExtension) == 'JPG' ||
                strtoupper($imageExtension) == 'JPEG' ||
                strtoupper($imageExtension) == 'PNG'
            ) {
                $checkExtention++;
            }
        }
        if ($checkExtention == count($images)) {
            $product = new Product();
            $product->name = $request->name;
            //dd($request->name);
            $product->id_type = $request->id_type;
            // $product->id_supplier = $request->id_supplier;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->promotion_price = $request->promotion_price;
            $product->save();
            foreach ($images as $image) {
                $filename = date('YmdHis') . "-" . $image->getClientOriginalName();
                $image->storeAs('public/product-images', $filename);
                Image::insert([
                    'image' => $filename,
                    'product_id' => $product->id
                ]);
            }
            return redirect()->back()->with('success', 'Đăng tin sản phẩm thành công!');
        } else {
            return redirect()->back()->with('error', 'Hình ảnh không đúng định dạng!');
        }
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
