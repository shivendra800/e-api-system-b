<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PayOnlineEmiPayment;
use Illuminate\Http\Request;

class OnlineEmiPaymentController extends Controller
{
    public function CustomerEmiPayList()
    {
        $getEmiPayUer = PayOnlineEmiPayment::where("paymet_status", 'active')->get()->toArray();
        return view('admin.Customer_Emi_PayList',compact('getEmiPayUer'));
    }
    public function CustWiseEmiPaymentDetails($id)
    {
        $EmiPayUerDetails = PayOnlineEmiPayment::where("id",$id)->first()->toArray();
        return view('admin.cust_wise_emi_payment_details',compact('EmiPayUerDetails'));
    }
}
