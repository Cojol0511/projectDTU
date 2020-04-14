<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Product;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->limit('8')->get();
        return view('page.home', compact('products'));
    }

    public function store()
    {
        $products = DB::table('products')->limit('100')->get();
        return view('page.store', compact('products'));
    }



    public function AddCart($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        if ($product != null) {

            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->add($product, $id);
            session(['Cart' => $newCart]);
            $cart = session('Cart');
        }
        return view('page.cart', compact('cart'));
    }

    public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeItem($id);
        if (Count($newCart->products) > 0) {
            session(['Cart' => $newCart]);
            $cart = session('Cart');
        } else {
            $req->session()->forget('Cart');
            $cart = null;
        }
        return view('page.cart', compact('cart'));
    }
}
