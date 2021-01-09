<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = 'bill_detail';

    // 1 chi tiet hoa don se thuoc ve 1 san pham nao do
    public function product(){
        return $this->belongsTo('App\Product','id_product','id');
    }

    // 1 chi tiet hoa don se thuoc ve 1 hoa don nao do nen belongsTo
    public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
    }
}
