<?php

namespace App\Http\Controllers\Admin;

use App\Models\CallBackDynamicQrTrans;
use App\Models\CallBackMandateCreation;
use App\Models\CallBackMandateExecutions;
use App\Models\McMandateQr;
use App\Models\ModifyMandate;
use App\Models\RevokeMandate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\ENACHLoanRequest;
use Illuminate\Support\Facades\DB;
use App\Models\DynamicQRGeneration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class EnachReqController extends Controller
{
    public function GetEnachReq()
    {
        $getenachreqList = ENACHLoanRequest::latest()->get()->toArray();
        return View('admin.get_enach_req_list', compact('getenachreqList'));
    }


    public function ENACHRequestViewDetails(Request $request, $id)
    {
        $checkreqt = ENACHLoanRequest::with('mconboarding','mcmandateqr')->where('id', $id)->first()->toArray();
        return view('admin.viewdetails_enach', compact('checkreqt'));
    }

        // 3.7 api  of kiya start
    public function ENACHDynamicQRGeneration(Request $request, $terminalId)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // start encryption
            DB::beginTransaction();

            try {

                $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
                $apiURL = 'https://cbhfl.com/api/encrypt/dynamic-qr-generation';
                $headers = [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $token,
                ];
                $response = Http::withHeaders($headers)->post($apiURL, [
                    "entityId" => "centralbank",
                    "paymentAddress" => $data['paymentAddress'],
                    "channelId" => "UPI",
                    "aggregatorCode" => "BANK",
                    "merchantId" => $data['merchantId'],
                    "merchantLegalName" => $data['merchantLegalName'],
                    "terminalId" => $data['terminalId'],
                    "currencyCode" => "INR",
                    "mcc" => "7322",
                    "purpose" => $data['purpose'],
                    "txnAmount" => $data['txnAmount'],
                    "refId" => "MAX",
                    "myKey" => "EvJjHSJcZUeApPSB"
                ]);
                $encrypteddata = json_decode($response, TRUE); // end encryption

                //1 api kiya
                $apiURLDYQR = 'https://cbiupiuat.kiya.ai:8443/upi_cug/LoanMerchants/dynamicQr/LM';

               return $responseDYQR = Http::withoutVerifying()->withOptions([
                    'verify' => false,
                ])->post($apiURLDYQR, [
                    "data" => $encrypteddata["message"]
                ]);
                $sendencrypteddataDYQR = json_decode($responseDYQR, TRUE); // end 1 api kiya
                // $sendencrypteddataDYQR['data']['terminalId'];
                if ($sendencrypteddataDYQR['responseCode'] == "00") {
                    $dynamicqrgenesave = new DynamicQRGeneration;
                    $dynamicqrgenesave->entityId = "centralbank";
                    $dynamicqrgenesave->paymentAddress = $data['paymentAddress'];
                    $dynamicqrgenesave->channelId = "UPI";
                    $dynamicqrgenesave->aggregatorCode = "BANK";
                    $dynamicqrgenesave->merchantId = $request->merchantId;
                    $dynamicqrgenesave->merchantLegalName = $request->merchantLegalName;
                    $dynamicqrgenesave->terminalId = $request->terminalId;
                    $dynamicqrgenesave->currencyCode = "INR";
                    $dynamicqrgenesave->mcc = "7322";
                    $dynamicqrgenesave->purpose = $request->purpose;
                    $dynamicqrgenesave->txnAmount = $request->txnAmount;
                    $dynamicqrgenesave->refId = "MAX";
                    $dynamicqrgenesave->result = $sendencrypteddataDYQR['msg'];
                    $dynamicqrgenesave->qrData = $sendencrypteddataDYQR['responseParameter']['qrData'];
                    $dynamicqrgenesave->save();
                    $getlastedinsertid = DB::getPdo()->lastInsertId();
                    DB::commit();
                    return redirect('admin/show-generatedDynamciQR/'.$getlastedinsertid)->with('success_message', $sendencrypteddataDYQR['msg']);

                } else {
                    return redirect()->back()->with('error_message', $sendencrypteddataDYQR['msg']);
                }


            } catch (\Exception $exception) {
                DB::rollback();
                return redirect()->back()->with('error_message', $exception->getMessage());

            } catch (\Throwable $exception) {
                DB::rollback();
                return redirect()->back()->with('error_message', $exception->getMessage());
            }


        }

        $checkreqt = McMandateQr::where('terminalId', $terminalId)->first()->toArray();

        return view('admin.dynamic_qrgeneration_view', compact('checkreqt'));

    }

    public function GetCustGeneratedDynamicQRlist()
    {
        $showGernareDyQr = DynamicQRGeneration::latest()->get()->toArray();
        return view('admin.GetCustGeneratedDynamicQR_list', compact('showGernareDyQr'));

    }

    public function ShowGeneratedDynamicQR($id)
    {
        $showGernareDyQr = DynamicQRGeneration::where('id', $id)->first()->toArray();
        return view('admin.show_dynamic_qrgeneration_view', compact('showGernareDyQr'));
    }

       // 3.7 api  of kiya end

          // 3.4 api  of kiya start

    public function ENACHModifyMandate(Request $request,$terminalId)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            $enddate = \Carbon\Carbon::parse($data['endDate'])->format('d/m/Y');
            //  Str::replace('/', '', $enddate);
            // start encryption
            $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
            $apiURL = 'https://enach.cbhfl.com/api/encrypt/modify-mandate';
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ];
            $response = Http::withHeaders($headers)->post($apiURL, [
                "entityId"=>"centralbank",
                "umn"=>$data['umn'],
                "refId"=>$data['refId'],
                "channelId"=>"UPI",
                "aggregatorCode"=> "LM",
                "amount"=>$data['amount'],
                "endDate"=>Str::replace('/', '', $enddate),
                "myKey"=>"EvJjHSJcZUeApPSB"
            ]);
            $encrypteddata = json_decode($response, TRUE); // end encryption

            //1 api kiya
            $apiURLDYQR = 'https://cbiupiuat.kiya.ai:8443/upi_cug/LoanMerchants/modifyMandate/LM';

            $responseDYQR = Http::post($apiURLDYQR, [
                "data" => $encrypteddata["message"]
            ]);
            $sendencrypteddataDYQR = json_decode($responseDYQR, TRUE); // end 1 api kiya
            // $sendencrypteddataDYQR['data']['terminalId'];




            if ($sendencrypteddataDYQR['responseCode'] == "00") {
                $modifymandatesave = new ModifyMandate;
                $modifymandatesave->entityId = "centralbank";
                $modifymandatesave->umn = $data['umn'];
                $modifymandatesave->refId =  $data['refId'];
                $modifymandatesave->channelId = "UPI";
                $modifymandatesave->aggregatorCode = "LM";
                $modifymandatesave->amount = $data['amount'];
                $modifymandatesave->endDate = $data['endDate'];
                $modifymandatesave->resvalidityStart = $sendencrypteddataDYQR['responseParameter']['VALIDITY_START'];
                $modifymandatesave->resvalidityEnd = $sendencrypteddataDYQR['responseParameter']['VALIDITY_END'];
                $modifymandatesave->resamount = $sendencrypteddataDYQR['responseParameter']['AMOUNT'];

                $modifymandatesave->payee_addr = $sendencrypteddataDYQR['responseParameter']['PAYEE_ADDR'];
                $modifymandatesave->mandate_txnid = $sendencrypteddataDYQR['responseParameter']['MANDATE_TXN_ID'];
                $modifymandatesave->rrn = $sendencrypteddataDYQR['responseParameter']['rrn'];
                $modifymandatesave->res_umn = $sendencrypteddataDYQR['responseParameter']['UMN'];
                $modifymandatesave->txnId = $sendencrypteddataDYQR['responseParameter']['txnId'];
                $modifymandatesave->msg = $sendencrypteddataDYQR['msg'];
                $modifymandatesave->save();

                return redirect()->back()->with('success_message', $sendencrypteddataDYQR['msg']);
            } else {
                return redirect()->back()->with('error_message', $sendencrypteddataDYQR['msg']);
            }

        }
            $checkreqt = McMandateQr::where('terminalId', $terminalId)->first()->toArray();
            $encr = base64_encode($terminalId);
            $getcallbackdata =  CallBackMandateCreation::where('merchant_id',$encr)->first();
        return view('admin.modify_mandate_cust_wise', compact('checkreqt'));
    }


       // 3.4 api  of kiya end

       //3.5 api of kiya start
       public function ENACHRevokeMandate(Request $request,$terminalId)
       {
        if ($request->isMethod('post')) {
            $data = $request->all();

            // start encryption
            $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
            $apiURL = 'https://enach.cbhfl.com/api/encrypt/revoke-mandate';
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ];
            $response = Http::withHeaders($headers)->post($apiURL, [
                "entityId"=>"centralbank",
                "umn"=>$data['umn'],
                "refId"=>$data['refId'],
                "channelId"=>"UPI",
                "aggregatorCode"=> "LM",
                "mandateTxnId"=>$data['refId'],
                "myKey"=>"EvJjHSJcZUeApPSB"
            ]);
            $encrypteddata = json_decode($response, TRUE); // end encryption

            //1 api kiya
            $apiURLDYQR = 'https://cbiupiuat.kiya.ai:8443/upi_cug/LoanMerchants/revokeMandate/LM';

            $responseDYQR = Http::post($apiURLDYQR, [
                "data" => $encrypteddata["message"]
            ]);
           return  $sendencrypteddataDYQR = json_decode($responseDYQR, TRUE); // end 1 api kiya
            // $sendencrypteddataDYQR['data']['terminalId'];


            if ($sendencrypteddataDYQR['responseCode'] == "00") {
                $revokemandatesave = new RevokeMandate;
                $revokemandatesave->entityId = "centralbank";
                $revokemandatesave->umn = $data['umn'];
                $revokemandatesave->refId =  $data['refId'];
                $revokemandatesave->channelId = "UPI";
                $revokemandatesave->aggregatorCode = "LM";
                $revokemandatesave->resvalidityStart = $sendencrypteddataDYQR['responseParameter']['VALIDITY_START'];
                $revokemandatesave->resvalidityEnd = $sendencrypteddataDYQR['responseParameter']['VALIDITY_END'];
                $revokemandatesave->resamount = $sendencrypteddataDYQR['responseParameter']['AMOUNT'];
                $revokemandatesave->resresult = $sendencrypteddataDYQR['responseStatus'];

                $revokemandatesave->respayeeAddr = $sendencrypteddataDYQR['responseParameter']['PAYEE_ADDR'];
                $revokemandatesave->mandate_txnid = $sendencrypteddataDYQR['responseParameter']['MANDATE_TXN_ID'];
                $revokemandatesave->rrn = $sendencrypteddataDYQR['responseParameter']['rrn'];
                $revokemandatesave->res_umn = $sendencrypteddataDYQR['responseParameter']['UMN'];
                $revokemandatesave->txnId = $sendencrypteddataDYQR['responseParameter']['txnId'];

                $revokemandatesave->save();

                return redirect()->back()->with('success_message', $sendencrypteddataDYQR['responseStatus']);
            } else {
                return redirect()->back()->with('error_message', $sendencrypteddataDYQR['responseStatus']);
            }

        }
        $checkreqt = McMandateQr::where('terminalId', $terminalId)->first()->toArray();
        return view('admin.revoke_mandate_cust_wise', compact('checkreqt'));
       }
       //3.5 api of kiya end
       public function CallbackMandateCreation()
       {
         $CallbackMandateCreation =  CallBackMandateCreation::latest()->get();
         return view('admin.callbackmandate_creation',compact('CallbackMandateCreation'));
       }
       public function CallbackMandateCreationViewDetails($id)
       {
          $CallbackMandateCreation =  CallBackMandateCreation::where('id',$id)->first();

         return view('admin.callbackmandate_creatviewdetails',compact('CallbackMandateCreation'));
       }
       public function CallbackMandateExecutions()
       {
         $CallbackMandateExecutions = CallBackMandateExecutions::latest()->get();
         return view('admin.callbackmandate_executions',compact('CallbackMandateExecutions'));
       }
       public function CallbackMandateExecutionViewDetails($id)
       {
          $CallBackMandateExecutions =  CallBackMandateExecutions::where('id',$id)->first();

         return view('admin.callbackmandateExexutionviewdetails',compact('CallBackMandateExecutions'));
       }

       public function CallbackDynamicQRTransection()
       {
         $CallbackDynamicQRTransection = CallBackDynamicQrTrans::latest()->get();
         return view('admin.callbackdynamic_trans',compact('CallbackDynamicQRTransection'));
       }
       public function CallbackMandateDynamicQRTransViewDetails($id)
       {
          $CallBackDynamicQrTrans =  CallBackDynamicQrTrans::where('id',$id)->first();

         return view('admin.callbackmandateDynamicQrTransviewdetails',compact('CallBackDynamicQrTrans'));
       }

       public function ModyfiedmandateDataList()
       {

        $modyfiedmandatelist =  ModifyMandate::latest()->get();

         return view('admin.modyfiedmandatedatalist',compact('modyfiedmandatelist'));
       }


}
