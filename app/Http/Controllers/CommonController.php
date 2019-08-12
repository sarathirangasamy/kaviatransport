<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Districts;

class CommonController extends Controller
{
	public function getCustomerDetails(){
        return $Data['Customers'] = Customer::findorfail(request('Customer_id'));
    }

    public function getDistrict(){
        return $Data['Customers'] = Districts::where('state_id',request('State_id'))->get();
    }
}
