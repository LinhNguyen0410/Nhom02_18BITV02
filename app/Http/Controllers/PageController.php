<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Cart;
use Session;

use Illuminate\Http\Request;
class PageController extends Controller
{
    //
    
    public function contact()
    {
        return view('ban-banh.contact');
    }

    public function about()
    {
        return view('ban-banh.about');
    }

// trang tai khoan
    public function pricing()
    {
        return view('ban-banh.pricing');
    }

// pthuc tìm kiếm
    public function getSearch(Request $request){
        $product = Product::where('name','like','%'.$request->key.'%')
                        ->orWhere('unit_price',$request->key)
                        ->get();
                return view('ban-banh.search',compact('product'));

    }

}
