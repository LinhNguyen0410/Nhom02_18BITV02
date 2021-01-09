<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Session;
class CartController extends Controller
{
    //

    public function getCheckout()
    {
        return view('ban-banh.checkout');
    }
    public function getAddToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $request->Session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDeleteCart($id)
    {
        $oldCart =  Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();

    }
    public function postCheckout(Request $request)
    {

        $cart = Session::get('cart');
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;
        $customer->note = $request->note;
        $customer->save();


        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->payment;
        $bill->note = $request->note;

        $bill->save();


        foreach ($cart->items as $key => $value) {
            # code...
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
            return redirect()->back()->with('thongbao','Đơn hàng của bạn đã được đặt thành công.Cảm ơn bạn đã mua hàng tại');;

        }    

    }
}
