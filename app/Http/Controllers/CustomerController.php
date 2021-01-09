<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function getAllCustomers(){
    	$customers = Customer::all();
    	foreach ($customers as $key => $value) {
    		echo $key . ' - ' . $value->name . ' - ' . $value->email . '<br>';
    	}
    }
}
