<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\Slide;
class ProductController extends Controller
{

	public function index(){

    $slide = Slide::all();

	// lay 4 san pham moi nhat
    $new_products = Product::where('new',1)->orderBy('created_at','desc')->paginate(4);
						// ->limit(4)					
						// ->get();


// những sản phẩm có giá kmai khác 0 sẽ được lấy ra bỏ vô top product
    $sanpham_km = Product::where('promotion_price','<>',0)->paginate(8);
                        // ->limit(8)
                        // ->get();


    return view('ban-banh.index',compact('slide','new_products','sanpham_km')); 
  }

  public function getAllProducts(){
    	//get all products from db
    $products = Product::all();

		//show all products to client
    foreach ($products as $key => $value) {
     echo $key . ' - ' . $value->name . '<br>';
   }
 }


	//  show sản phẩm theo loại
 public function getProductByType($id){
   $products = Product::where('id_type',$id)->get();
   $type = ProductType::all();
        // dòng này giúp hiển thị tên loại sản phẩm đã click lên giao diên khi click vào 1 loại ở trag product-type
   $get_nameType= ProductType::where('id',$id)->first();
        // trả về view
   return view('ban-banh.product-by-type',compact('products','type','get_nameType'));
 }

	 //Trang show chi tiet san pham

 public function getProductDetail($id){
   $product = Product::find($id);
   // lấy 3 sp liên quan
   $sp_lienquan = Product::where('id_type',$product->id_type)->paginate(3);
      // lấy 4 sp mới nhất ở trang detail
   $new_pro_detail = Product::where('new',1)
   ->orderBy('created_at','desc')
   ->limit(4)                  
   ->get();

   $favorite_product = Product::where('promotion_price','=',0)
   ->orderBy('created_at','desc')
   ->limit(4)                  
   ->get();

   if($product){
    return view('ban-banh.product-detail',array(
     'product' => $product,
     'sp_lienquan' => $sp_lienquan,
     'new_pro_detail' => $new_pro_detail,
     'favorite_product' =>$favorite_product,
   ));
  }else{
    return redirect()->back();
  }
}

}
