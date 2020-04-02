<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class PageController extends Controller
{
    public function getIndex(){
        $new_product = Product::limit(8)->get();
        return view('page.trangchu', compact('new_product'));
    }
}
