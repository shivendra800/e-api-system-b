<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use App\Models\McMandateQr;
use App\Models\McOnboarding;
use Illuminate\Http\Request;
use App\Models\OtpVerification;
use App\Models\ENACHLoanRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ENachOnBoardingController extends Controller
{
    public function ENachNewOnboarding(Request $request)
    {


        if ($request->isMethod('post')) {
                  $data = $request->all();
            $validated = $request->validate([
                'mobileNo' => 'required|numeric|digits:10',
             ]);


            try {


                 Session::put('mobileNo', $data['mobileNo']);
                   $curlHandler = curl_init();
                 $userName = '68e1a8b9f9cd675220a4cce64aa609660e46';
                 $password = '1b0ca4099f5eb69d5914b905b018ea64';
                 curl_setopt_array($curlHandler, [
                     CURLOPT_URL => 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/oauth/token?grant_type=password&username=user_admin&password=Infotech@1',
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_CUSTOMREQUEST => "POST",
                     CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                     CURLOPT_USERPWD => $userName . ':' . $password,

                 ]);
                   $response = curl_exec($curlHandler);
                           $datatoken = json_decode($response, TRUE);
                 if(!(empty($datatoken["access_token"])))
                 {

                        $token = $datatoken["access_token"];
                     $apiURL = 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/digital/eNachMobileVerification?';
                     $headers = [
                         'Content-Type' => 'application/json',
                         'Authorization' => 'Bearer ' . $token,
                     ];
                     $response = Http::withHeaders($headers)->post($apiURL, [
                         'mobileNo' => $data['mobileNo'],
                     ]);
                        $data = json_decode($response, TRUE);
                     if ($data["code"] == '01') {
                         Session::forget('mobileNo');
                         return redirect()->back()->with('error_message', 'You are not existing customer!!');
                     } else {
                         $curlHandler = curl_init();
                         $userName = '68e1a8b9f9cd675220a4cce64aa609660e46';
                         $password = '1b0ca4099f5eb69d5914b905b018ea64';
                         curl_setopt_array($curlHandler, [
                             CURLOPT_URL => 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/oauth/token?grant_type=password&username=user_admin&password=Infotech@1',
                             CURLOPT_RETURNTRANSFER => true,
                             CURLOPT_CUSTOMREQUEST => "POST",
                             CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                             CURLOPT_USERPWD => $userName . ':' . $password,

                         ]);
                         $response = curl_exec($curlHandler);
                         $datatoken = json_decode($response, TRUE);
                         if(!(empty($datatoken["access_token"])))
                         {
                             $token = $datatoken["access_token"];
                             $apiURL = 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/digital/eNachUserDetails?';
                             $headers = [
                                 'Content-Type' => 'application/json',
                                 'Authorization' => 'Bearer ' . $token,
                             ];
                             $response = Http::withHeaders($headers)->post($apiURL, [
                                 'mobileNo' => Session::get('mobileNo'),
                             ]);
                                  $data = json_decode($response, TRUE);
                             //   return $data["detail"];
                             return view('admin.Enach-Request-getloanaccno')->with('data', $data)->with('success_message', 'Mobile No Wise Loan A/C Details Fetch Successfully!!');
                         }
                         else{
                             Session::forget('mobileNo');
                             return redirect('admin/ENach-New-Onboarding')->with('error_message', "Somthing Went Wrong!!");

                         }

                     }
                 }else{
                     Session::forget('mobileNo');
                     return redirect()->back()->with('error_message', "Somthing Went Wrong!!");

                 }

                 // DB::commit();
             } catch (Exception $exception) {
                 // DB::rollback();
                 Session::forget('mobileNo');
                 return redirect()->back()->with('error_message', $exception->getMessage());

             }

        }
        return view('admin.new_onboarding_Enach_Request');
    }
    public function ENachNewOnboardinggetloanaccnosubmit(Request $request)
    {


        $data = $request->all();
        $curlHandler = curl_init();
        $userName = '68e1a8b9f9cd675220a4cce64aa609660e46';
        $password = '1b0ca4099f5eb69d5914b905b018ea64';
        curl_setopt_array($curlHandler, [
            CURLOPT_URL => 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/oauth/token?grant_type=password&username=user_admin&password=Infotech@1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $userName . ':' . $password,

        ]);
        $response = curl_exec($curlHandler);
        $datatoken = json_decode($response, TRUE);
        if(!(empty($datatoken["access_token"])))
            {
                $token = $datatoken["access_token"];

                $apiURL = 'https://kastlebaseulsapi.cbhfl.com/KASTLE-BASE-ULS-API/digital/eNachLoanDetails?';
                $headers = [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $token,
                ];
                $response = Http::withHeaders($headers)->post($apiURL, [
                    'loan_acc_no' => $data['loan_acc_no'],
                ]);
                  $data = json_decode($response, TRUE);
                //  return $data["user_name"];
                  $branch = DB::table('branch_acc_details')->get();
                return view('admin.create_new_onboarding',compact('branch'))->with('data', $data)->with('success_message', 'Loan A/c Wise Details Fetch Successfully!!');
            }else{
                Session::forget('mobileNo');
                return redirect('admin/ENach-New-Onboarding')->with('error_message', "Somthing Went Wrong!!");

            }


    }


    public function ENachNewOnboardingcreatesave(Request $request)
    {

            $data = $request->all();
          try
         {
            //////////////////////////////////////////////////////////// Merchant Onboarding API hit before submit e-nach registartion
            $branchname = DB::table('branch_acc_details')->where('id',$data['branch_id'])->first();
            $rand = rand(00000000000000000,99999999999999999);

            // start encryption
            $tokenmo = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
            $apiURLmo = 'https://enach.cbhfl.com/api/encrypt/merchant-onboarding';
            $headersmo = [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $tokenmo,
            ];


            $responsemo = Http::withHeaders($headersmo)->post($apiURLmo, [
                    "entityId"=> "centralbank",//static
                    "mobileNo"=> "1800889666",//by bank
                    "paymentAddress"=> $rand.".cbhfl@cbin",//loan_numbercbhfl@cbin (formate)
                    "merchantAccountNo"=> $branchname->brach_ac_no,
                    "accountType"=> "CURRENT",//static
                    "ifsc"=> $branchname->branch_ifse_code,
                    "merchantLegalName"=> "CBHFL - Cent Bank Home Finance Limited",//static
                    "channelId"=> "UPI",//static
                    "aggregatorCode"=> "LM", //static by bank
                    "merchantId"=>$rand,//loan acc no
                    "mcc"=> "7322",//static
                    "terminalId"=> $rand,//loan no
                    "gstIn"=> "",//static
                    "storeId"=> $branchname->branc_code,
                    "merchantGenre"=> "ONLINE",//static
                    "onboardingType"=> "BANK",//static
                    "isVerified"=> "N",//static
                    "subCode"=>"7322",
                    "myKey"=>"EvJjHSJcZUeApPSB"
                ]);
            $encrypteddatamo = json_decode($responsemo, TRUE);// end encryption

            //1 api kiya
            $apiURLlm = 'https://cbiupiuat.kiya.ai:8443/upi_cug/Merchants/onboard/LM';

            $responselm = Http::post($apiURLlm, [
            "data"=> $encrypteddatamo["message"]
            ]);
            $senencrypteddatalm = json_decode($responselm, TRUE);// end 1 api kiya
            // $senencrypteddatalm['data']['terminalId'];



            //////////////////////////////////////////////////////////// Mandate QR generation API hit before submit e-nach registartion
            if($senencrypteddatalm['code']=="00")
            {
                    $mconboardingsave = new McOnboarding;
                    $mconboardingsave->entityId= "centralbank";//static
                    $mconboardingsave->mobileNo= "1800889666";//by bank
                    $mconboardingsave->paymentAddress= $rand.".cbhfl@cbin";//cif id.loan number.cbhfl@cbin (formate)
                    $mconboardingsave->merchantAccountNo= $branchname->brach_ac_no;
                    $mconboardingsave->accountType= "CURRENT";//static
                    $mconboardingsave->ifsc= $branchname->branch_ifse_code;
                    $mconboardingsave->merchantLegalName= "CBHFL - Cent Bank Home Finance Limited";//static
                    $mconboardingsave->channelId= "UPI";//static
                    $mconboardingsave->aggregatorCode= "LM"; //static by bank
                    $mconboardingsave->merchantId= $rand;//loan acc
                    $mconboardingsave->mcc= "7322";//static
                    $mconboardingsave->terminalId= $rand;//loan no
                    $mconboardingsave->gstIn= "gstin";//static
                    $mconboardingsave->storeId= $branchname->branc_code;
                    $mconboardingsave->merchantGenre= "ONLINE";//static
                    $mconboardingsave->onboardingType= "BANK";//static
                    $mconboardingsave->isVerified= "N";//static
                    $mconboardingsave->res_qrData= $senencrypteddatalm['qrData'];//response data
                    $mconboardingsave->res_terminalId= $senencrypteddatalm['data']['terminalId'];//response data
                    $mconboardingsave->res_orgTxnId= $senencrypteddatalm['data']['orgTxnId'];//response data
                    $mconboardingsave->save();
                    $mconboardinglastin_id = DB::getPdo()->lastInsertId();

                    // start encryption
                    $tokenqr = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
                    $apiURLqr = 'https://enach.cbhfl.com/api/encrypt/mandate-qr-generation';
                    $headersqr = [
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Bearer ' . $tokenqr,
                    ];
                    // return $data['validityStart'];
                //   return  $start_at = Str::replace('-', '', date('d-m-Y'));

                    $responseqr = Http::withHeaders($headersqr)->post($apiURLqr, [
                        "entityId"=>"centralbank", //static
                        "paymentAddress"=> $rand.".cbhfl@cbin",//loan_numbercbhfl@cbin
                        "aggregatorCode"=>"LM",//static
                        "merchantId"=>$rand,//loan no
                        "terminalId"=>$rand,//loan no
                        "mandateName"=>"CBHFL - Cent Bank Home Finance Limited",
                        "validityStart"=>Str::replace('-', '', $data['validityStart']),
                        "validityEnd"=>Str::replace('-', '', $data['validityEnd']),
                        "amount"=>"2.9",
                        "amountRule"=>"MAX",
                        "recur"=>"MONTHLY",
                        "recurValue"=>"1",
                        "recurType"=>"ON",
                        "channelId"=>"UPI",
                        "mandateType"=>"NONEDITABLE",
                        "txnNote"=>"Subscription",
                        "refId"=>"CBIJOEOLIDP2G9FD038Q21KGRTELD",//loan acc no
                        "myKey"=>"EvJjHSJcZUeApPSB"
                    ]);
                    $encrypteddataqr = json_decode($responseqr, TRUE);//end encryption

                    //2 api kiya
                    $apiURLlmqr = 'https://cbiupiuat.kiya.ai:8443/upi_cug/LoanMerchants/mandateQr/LM';
                    $responselmqr = Http::post($apiURLlmqr, [
                    "data"=> $encrypteddataqr["message"]
                    ]);
                    $senencrypteddatalmqr = json_decode($responselmqr, TRUE);//end 2 api kiya
                    // $senencrypteddatalmqr['responseParameter']['txnId'];
                    $mcmandateqrsave = new McMandateQr;
                    $mcmandateqrsave->entityId="centralbank"; //static
                    $mcmandateqrsave->paymentAddress= $rand.".cbhfl@cbin";
                    $mcmandateqrsave->aggregatorCode="LM";//static
                    $mcmandateqrsave->merchantId=$rand;
                    $mcmandateqrsave->terminalId=$rand;
                    $mcmandateqrsave->mandateName="CBHFL - Cent Bank Home Finance Limited";
                    $mcmandateqrsave->validityStart=$data['validityStart'];
                    $mcmandateqrsave->validityEnd=$data['validityEnd'];
                    $mcmandateqrsave->amount="2.9";
                    $mcmandateqrsave->amountRule="MAX";
                    $mcmandateqrsave->recur="MONTHLY";
                    $mcmandateqrsave->recurValue="1";
                    $mcmandateqrsave->recurType="ON";
                    $mcmandateqrsave->channelId="UPI";
                    $mcmandateqrsave->mandateType="NONEDITABLE";
                    $mcmandateqrsave->txnNote="Subscription";
                    $mcmandateqrsave->refId=$rand;
                    $mcmandateqrsave->mconboarding_id = $mconboardinglastin_id;
                    $mcmandateqrsave->res_txnid= $senencrypteddatalmqr['responseParameter']['txnId'];
                $mcmandateqrsave->res_mandateqrdata= $senencrypteddatalmqr['responseParameter']['qrData'];

                //    $qrcode = QrCode::generate($senencrypteddatalmqr['responseParameter']['qrData']);

                //    // Store QR code
                //    QrCode::generate($senencrypteddatalmqr['responseParameter']['qrData'], public_path('images/$qrcode.svg') );



                    $mcmandateqrsave->save();
                    $mcmandateqrlastin_id = DB::getPdo()->lastInsertId();


                    ///////////////////////////////////////////////////////////////////////////data save to local
                    $enachsave = new ENACHLoanRequest;
                    $enachsave->branch_id = $data['branch_id'];
                    $enachsave->merchantLegalName = $data['merchantLegalName'];
                    $enachsave->email = $data['email'];
                    $enachsave->mobileNo = $data['mobileNo'];
                    $enachsave->aadhar_no = $data['aadhar_no'];
                    $enachsave->merchantAccountNo = $data['merchantAccountNo'];
                    $enachsave->terminalId = $rand;
                    $enachsave->emi_amount = $data['emi_amount'];
                    $enachsave->validityStart = $data['validityStart'];
                    $enachsave->validityEnd = $data['validityEnd'];

                    $enachsave->mconboardingid = $mconboardinglastin_id;
                    $enachsave->mcmandateqrid = $mcmandateqrlastin_id;
                    $enachsave->save();




                    $otpcheck = OtpVerification::where('mobile', Session::get('mobileNo'))->delete();
                    Session::forget('mobileNo');
                    return redirect('admin/viewmandateQr-qrcode/'.$rand)->with('success_message', 'Data Submitted Successfully!');
            }
            else
            {
                Session::forget('mobileNo');
                return redirect('admin/ENach-New-Onboarding')->with('error_message', $senencrypteddatalm['result']);

            }
        }

        catch (Exception $exception) {
            Session::forget('mobileNo');
            return redirect()->back()->with('error_message', $exception->getMessage());

        }


    }




    public function ViewMandDownloadQrcode($loanno)
    {
        $getloanQrcode = McMandateQr::where('terminalId',$loanno)->first()->toArray();
        return view('admin.view_mand_downloadqrcode',compact('getloanQrcode'));
    }
}
