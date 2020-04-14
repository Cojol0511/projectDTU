<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('customers', 'CustomerController');
// Route::resource('bills', 'BillController');
// Route::resource('bill_details', 'BillDetailController');
Route::resource('products', 'ProductController');
// Route::resource('type_products', 'TypeProductController');
// Route::resource('users', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// tuan
// Route::get('index', 'PageController@getIndex');

// Route::get('admin', 'AdminController@getAdmin');

// Route::get('/Add-Cart/{id}', 'CartController@AddCart');

// Route::post('dang-ki', 'PageController@postSingin');

Route::get('/', 'CartController@index');
Route::get('/trang-chu', 'CartController@index');
Route::get('/kien-thuc', 'PageController@knowledge');
Route::get('/gioi-thieu', 'PageController@introduce');
Route::get('/thanh-toan', 'PageController@checkOut');
Route::get('/cua-hang', 'CartController@store');

Route::get('/Add-Cart/{id}', 'PageController@AddCart');
Route::get('/Delete-Item-Cart/{id}', 'CartController@DeleteItemCart');
Route::get('/chi-tiet-san-pham/{id}', 'PageController@getDetail');
Route::get('search', 'PageController@search')->name('search');
