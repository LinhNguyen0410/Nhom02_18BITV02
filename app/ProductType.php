<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'type_products';
    // 1 loai san pham se co nhieu san pham nen hasMany
    public function product(){
        return $this->hasMany('App\Product','id_type','id');
    }
}
