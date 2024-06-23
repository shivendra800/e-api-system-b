<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CallBackMandateCreation;

class ReportController extends Controller
{
    public function PaymentCollectionReort()
    {
        $data['CallbackMandateCreation'] =  CallBackMandateCreation::latest()->get();
        return view('admin.report.payment_collection_rep',$data);
    }

    public function PaymentCollReopSerachDateWise(Request $request)
    {
        // $encry = base64_encode($request->start_date);
        // $encryend = base64_encode($request->end_date);

        $data['CallbackMandateCreation'] =  CallBackMandateCreation::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
        return view('admin.report.payment_collection_rep',$data);
    }
}
