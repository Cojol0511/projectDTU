<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Cart;
use App\Product;
use Session;

class CartController extends Controller
{
    public function AddCart(Request $req, $id){
        $product = Product::where('id',$id)->first();
        if($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->add($product, $id);
            
            $req->session()->put('Cart', $newCart);
            
        }
        return view('Cart', compact('newCart'));
    }
}
