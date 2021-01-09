<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\ProductType;
use App\Customer;

class AdminController extends Controller
{
    //
    public function getIndex()
    {
        return view ('admin.index');
    }

    public function getProducts()
    {
    	$products = Product::all();
        return view ('admin.products',array('products' => $products));
    }

     public function getUser()
    {
        $user = User::all();
        return view ('admin.user',array('user' => $user));
    }

        public function getCustomer()
    {
        $customer = Customer::all();
        return view ('admin.customer',array('customer' => $customer));
    }

         public function getTypeProduct()
    {
        $type = ProductType::all();
        return view ('admin.type',array('type' => $type));
    }


    public function addProduct(){
        return view('admin.product.add');
    }
    public function postAddProduct(Request $request){
    	$product = new Product;
    	$product->name = $request->product_name;
    	$product->id_type = $request->product_type;
    	$product->description = $request->product_desc;
    	$product->unit_price = $request->product_unit_price;
    	$product->promotion_price = $request->product_promotion_price;
    	$product->unit = $request->unit;
        $product->new = $request->product_new;
        $product->image = $request->product_image;
    	$product->save();

    	return redirect('/admin/products');

    }
}   
