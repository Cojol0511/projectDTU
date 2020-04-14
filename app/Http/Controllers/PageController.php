<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function knowledge(){
        return view('page.knowledge');
    }

    public function introduce() {
        return view('page.introduce');
    }

    public function store(){
        return view(('page.store'));
    }

    public function checkOut() {
        return view('page.checkout');
    }

    public function getDetail($id) {
        $products = DB::table('products')->where('id',$id)->first();
        return view('page.productDetail',  compact('products'));
    }

    public function postSingin(Request $req) {
            $this->validate($req,
                [
                    'email'=>'required|email|unique:users,email',
                    'password'=>'required|min:6|max:20',
                    'name'=>'required',
                    'phone_number'=>'required',
                    'address' => 'required',
                    're_password' => 'required|same:pasword'
                ],
                [
                    'eamail.required'=>'Vui long nhap email',
                    'eamail.email'=>'Vkhong dung dinh dang',
                    'eamail.runique'=>'Email cos nguo su dung',
                    'password.required'=>'Vui long nhap password',
                    'name.required'=>'Vui long nhap ho ten',
                    'address.required'=>'vui long nhap dia chi',
                    'password.min'=>'vui long nhap it nhat 6 ky tu',
                    'password.same'=>'Mật khẩu không giống nhau'
                ]);
                $data = $req->all();
                $data['password'] = Hash::make($req->password);
                $data['gender'] = 1;
                $user = User::create($data);
                Auth::login($user);
                return back()->with('thongbao','Đăng ký tài khoản thành công');
    }

    public function postLogin(Request $req){
        $this->validate($req,
        [
            'password' => 'required|min:6|max:20',
            'email' => 'required|email'
        ],
        [
            'email.required' => 'Vui long nhap email',
            'email.email' => 'Khong dung dinh dang',
            'password.required' => 'Vui long nhap password'
        ]);

        $credentials = array('email'=>$req->email, 'password'=>$req->password);
            if(Auth::attempt($credentials)){
                return view('page.home');
            }else {
                return view('page.store');
            }
    }

    public function search(Request $req) {
        $products = DB::table('products')->where('name', 'like','%'.$req->key.'%')->get();
        return view('page.store', compact('products'));
    }
}
