<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Hash;

class PageController extends Controller
{
    public function getIndex(){
        $new_product = Product::limit(8)->get();
        return view('page.trangchu', compact('new_product'));
    }

    // public function postSingin(Request $req) {
    //     $this->validate(
    //         [
    //             'email'=>'required|email|unique:users,email',
    //             'password'=>'required|min:6|max|20',
    //             'name'=>'required',
    //             'phone_number'=>'required'
    //         ]
    //         [
    //             'eamail.required'=>'Vui long nhap email',
    //             'eamail.email'=>'Vkhong dung dinh dang',
    //             'eamail.runique'=>'Email cos nguo su dung',
    //             'password.required'=>'Vui long nhap password',
    //             'name.required'=>'Vui long nhap ho ten',
    //         ]);
    //         $user = new User();
    //         $user->name = $req->fullname;
    //         $user->email = $req->email;
    //         $user->password = Hash::make($req->password);
    //         $user->phone_number = $req->numberPhone;
    //         $user->save();
    //         return redirect()->back() >with('thanhcong', 'Tao tai khoan thanh cong');
    // }
}
