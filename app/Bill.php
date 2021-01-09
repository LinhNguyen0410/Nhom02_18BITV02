<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bills';

    //  1 bill co nhieu chi tiet
    public function bill_detail(){
        return $this->hasMany('App\Bill_Detail','id_bill','id');
    }

    // hoa don thuoc ve 1 khach hag
    public function bill(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
