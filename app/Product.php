<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //1 sp se thuoc ve 1 loai san pham nao do
    protected $table = 'products';

    public function product_type(){
        return $this->belongsTo('App\Product','id_type','id');
    }

    // 1 spham se co nhieu chi tiet hoa don
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
