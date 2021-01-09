<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.front-end.header',function($view)
        {
            $loai_sp = ProductType::all();

            $view->with('loai_sp',$loai_sp);
        });


        view()->composer('layouts.front-end.header',function($view)
        {
           if(Session('cart')){
            $oldCard =  Session::get('cart');
            $cart = new Cart($oldCard);
            $view->with(['cart'=>Session::get('cart'),'product_cart' =>$cart->items,'totalPrice' => $cart->totalPrice,'totalQty' => $cart->totalQty]); 
        }
        });


// chia sẻ dữ liệu qua viewc checkout
         view()->composer('ban-banh.checkout',function($view)
        {
           if(Session('cart')){
            $oldCard =  Session::get('cart');
            $cart = new Cart($oldCard);
            $view->with(['cart'=>Session::get('cart'),'product_cart' =>$cart->items,'totalPrice' => $cart->totalPrice,'totalQty' => $cart->totalQty]); 
        }
        });
    }
}