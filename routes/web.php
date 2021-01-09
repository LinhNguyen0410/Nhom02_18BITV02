<?php

use Illuminate\Support\Facades\Route;

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


//route cua trang ban banh
// Route::get('master','PageController@master');

Route::get('/','ProductController@index');

// loai san pham


Route::get('/loai-san-pham/{id}','ProductController@getProductByType');

// chi tiet 1 san pham
Route::get('/chi-tiet/{id}', 'ProductController@getProductDetail');

// page đặăng nhập
Route::get('/dang-nhap','UserController@signin');

//routes post đen trang dang nhap
Route::post('/dang-nhap','UserController@postSignin');

//routes post đen trang dang xuat
Route::get('/dang-xuat','UserController@postLogOut');

// page đăng ký
Route::get('/dang-ki','UserController@signup');

//routes post đen trang dang ki
Route::post('/dang-ki','UserController@postSignup');


// page lien he
Route::get('/lien-he','PageController@contact');

// page gioi thieu
Route::get('/gioi-thieu','PageController@about');

// page tai khoan
Route::get('/tai-khoan','PageController@pricing');


// thêm vào giỏ
Route::get('/them-vao-gio/{id}', 'CartController@getAddToCart');

// xóa 1 sp trong  giỏ
Route::get('/xoa-gio-hang/{id}', 'CartController@getDeleteCart');


//page thong tin dat hang
Route::get('/thanh-toan','CartController@getCheckout');

Route::post('/thanh-toan','CartController@postCheckout');


// giao dien admin
Route::get('admin','AdminController@getIndex');

//routes show san pham ra trang admin
Route::get('admin/products','AdminController@getProducts');

//routes show tài khoản ra trang admin
Route::get('admin/users','AdminController@getUser');

//routes show ds khách hàng ra trang admin
Route::get('admin/customer','AdminController@getCustomer');

//routes show loại san pham ra trang admin
Route::get('admin/type-products','AdminController@getTypeProduct');


//routes đưa đến trang thêm sản phẩm ra trang admin
Route::get('admin/add-product','AdminController@addProduct');

//  PHƯƠNG THỨC POST ĐỂ LƯU THÔNG TIN XUỐNG DB
//routes them san pham tren admin
Route::post('admin/add-product','AdminController@postAddProduct');


//routes tìm kiếm sản phẩm
Route::get('/tim-kiem','PageController@getSearch');









