<?php

namespace App\Http\Controllers\Front;

use Exception;
use Carbon\Carbon;
use App\Models\Slider;
use GuzzleHttp\Client;
use phpseclib3\Crypt\AES;
use App\Models\McMandateQr;
use App\Models\McQrDynamic;
use Illuminate\Support\Str;
use App\Models\McOnboarding;
use Illuminate\Http\Request;
use App\Models\OtpVerification;
use App\Models\ENACHLoanRequest;
use App\Models\MandateCallRequest;

use Illuminate\Support\Facades\DB;
use App\Models\PayOnlineEmiPayment;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;

use Illuminate\Encryption\Encrypter;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use App\Models\CallBackDynamicQrTrans;
use App\Models\CallBackMandateCreation;
use Illuminate\Support\Facades\Session;
use App\Models\CallBackDynamicQrTransReq;
use App\Models\CallBackMandateExecutions;
use App\Models\CallBackMandateCreationReq;
use GuzzleHttp\Exception\RequestException;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\CallBackMandateExecutionsReq;
use SebastianBergmann\CodeCoverage\DeadCodeDetectionNotSupportedException;





class HomeController extends Controller
{
    public function index(Request $request)
    {

        $slider = Slider::where('type', 'Slider')->get()->toArray();
        return view('front.layout.index',compact('slider'));
    }
    public function EnachRequest()
    {
        return view('front.pages.Enach_Request');
    }


    public function EnachRequestotpsend(Request $request)
    {


        $validated = $request->validate([
           'mobileNo' => 'required|numeric|digits:10',
        ]);

        $data = $request->all();
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
                    return redirect()->back()->with('error', 'You are not existing customer!!');
                } else {
                    $rand = rand(100000, 999999);
                    $otpsave = new OtpVerification;
                    $otpsave->mobile = Session::get('mobileNo');
                    $otpsave->otp = $rand;
                    $otpsave->expire_at = Carbon::now()->addMinutes(5);
                    $otpsave->save();
                    //    $numbers = Session::get('mobileNo');
                    //    $username = 'Cent_bank';
                    //    $apiKey = 'apibank';
                    //    $sender = 'CENTBF';
                    //    $mt = '0';
                    //    $routing = '0';
                    //     $mobile= $numbers;
                    //     $msg = 'Dear Customer, ' . $rand . ' is the OTP for your registration request initiated through Cent Bank Home Finance Internet Banking.';
                    //       $data = 'user=' . $username . '&pwd=' . $apiKey . '&sender=' . $sender . '&mt=' . $mt . '&routing=' . $routing ."&mobile=" . $mobile ."&msg=" . $msg;

                    //          $url = 'https://sms.cell24x7.in/otpReceiver/sendSMS?' . $data;

                    //               $url = preg_replace("/ /", "%20", $url);

                    //      $response = file_get_contents($url);
                    //      json_decode(json_encode($response), true);
                }
              return redirect()->back()->with('message', 'Otp Send successfully!!');
            }else{
                Session::forget('mobileNo');
                return redirect()->back()->with('error_message', "Somthing Went Wrong!!");

            }

            // DB::commit();
        } catch (Exception $exception) {
            // DB::rollback();
            return redirect()->back()->with('error', $exception->getMessage());

        }





    }
    public function EnachRequestotpverify(Request $request)
    {
        $data = $request->all();

        $now = Carbon::now();
        // Session::forget('mobileNo');
        $otpcheck = OtpVerification::where('mobile', Session::get('mobileNo'))->latest()->first();
        if ($otpcheck['otp'] == $request->otp) {
            if ($otpcheck && $now->isAfter($otpcheck->expire_at)) {
                Session::forget('mobileNo');
                return redirect('Enach-Request')->with('error', 'Your OTP has been expired');
            } else {
                $otpsave = OtpVerification::where('mobile', Session::get('mobileNo'))->latest()->first();
                $otpsave->verified_otp = $request->otp;
                $otpsave->save();
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
                    return view('front.pages.Enach-Request-getloanaccno')->with('data', $data)->with('message', 'OTP Verified successfully!!');
                }
                else{
                    Session::forget('mobileNo');
                    return redirect('Enach-Request')->with('error_message', "Somthing Went Wrong!!");

                }


            }

        } else {

            return redirect()->back()->with('error', 'Otp  not  Match!!');

        }



    }
    public function EnachRequestgetloanaccnosubmit(Request $request)
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
                  if($data["code"]=="00"){
                    return view('front.pages.Enach_create',compact('branch'))->with('data', $data)->with('message', 'You Are Existing Customer!!');

                }else{
                    return redirect()->back()->with('error_message', $data["result"]);
                }

            }else{
                Session::forget('mobileNo');
                return redirect('Enach-Request')->with('error_message', "Somthing Went Wrong!!");

            }


    }



    public function SearchLoanAcc(Request $request)
    {

        return view('front.pages.search_loan_acc_no');
    }

    public function PayOnlineEmiPayment()
    {
        return view('front.pages.pay_online_emi_payment');
    }

    public function razorpaycheck(Request $request)
    {

        $cust_name = $request->input('cust_name');
        $cust_mobile = $request->input('cust_mobile');
        $loan_ac_number = $request->input('loan_ac_number');
        $emi_amt = $request->input('emi_amt');
        $current_due = $request->input('current_due');
        $pay_emi_amt = $request->input('pay_emi_amt');

        return response()->json([
            'cust_name' => $cust_name,
            'cust_mobile' => $cust_mobile,
            'loan_ac_number' => $loan_ac_number,
            'emi_amt' => $emi_amt,
            'current_due' => $current_due,
            'pay_emi_amt' => $pay_emi_amt,

        ]);

    }


    public function PayEmiPayment(Request $request)
    {


        $payemi = new PayOnlineEmiPayment();
        $payemi->cust_name = $request->input('cust_name');
        $payemi->cust_mobile = $request->input('cust_mobile');
        $payemi->loan_ac_number = $request->input('loan_ac_number');
        $payemi->emi_amt = $request->input('emi_amt');
        $payemi->current_due = $request->input('current_due');
        $payemi->pay_emi_amt = $request->input('pay_emi_amt');
        $payemi->payment_mode = $request->input('payment_mode');
        $payemi->payment_id = $request->input('payment_id');
        $payemi->paymet_status = 'active';
        $payemi->save();



        return response()->json(['status' => "Your Online EMI  Payment Completed  Sucessfully!"]);
    }



    public function EnachRequestCheckMob()
    {
        return view('front.pages.Enach_Request_checkmob');
    }

    public function Enachcreatesave(Request $request)
    {

            $data = $request->all();

            
        //   try
        //  {
            //////////////////////////////////////////////////////////// Merchant Onboarding API hit before submit e-nach registartion
            $branchname = DB::table('branch_acc_details')->where('id',$data['branch_id'])->first();
            $rand = rand(00000000000000000,99999999999999999);

            // start encryption
            $tokenmo = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
            $apiURLmo = 'https://cbhfl.com/api/encrypt/merchant-onboarding';
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
          return  $encrypteddatamo = json_decode($responsemo, TRUE);// end encryption

            //1 api kiya
            $apiURLlm = 'https://cbiupiuat.kiya.ai:8443/upi_cug/Merchants/onboard/LM';
       //     $apiURLlm = 'https://upitxs.infrasofttech.in:9443/upi_cug/Merchants/onboard/LM';

              $responselm = Http::withoutVerifying()->withOptions([
                'verify' => false,
            ])->post($apiURLlm, [
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
                    $apiURLqr = 'https://cbhfl.com/api/encrypt/mandate-qr-generation';
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
                        "validityStart"=>Str::replace('-', '', date('d-m-Y')),
                        "validityEnd"=>"09012024",
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
                      // $apiURLlmqr = 'https://upitxs.infrasofttech.in:9443/upi_cug/LoanMerchants/mandateQr/LM';
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
                    return redirect('download-qrcode/'.$rand)->with('message', 'Data Submitted Successfully!');
            }
            else
            {
                Session::forget('mobileNo');
                return redirect('Enach-Request')->with('error_message', $senencrypteddatalm['result']);

            }
        // }

        // catch (Exception $exception) {

        //     return redirect()->back()->with('error_message', $exception->getMessage());

        // }


    }




    public function DownloadQrcode($loanno)
    {
        $getloanQrcode = McMandateQr::where('terminalId',$loanno)->first()->toArray();
        return view('front.pages.downloadqrcode',compact('getloanQrcode'));
    }
    public function download($file_name) {
        $file_path = public_path('files/'.$file_name);
        return response()->download($file_path);
    }

    public function CallBackMandateCreation(Request $request)
    {

        $requestdata = $request->data;
       if($requestdata == "")
       {
        $requestdata = "";
        $savemandatecallreq = new CallBackMandateCreationReq;
        $savemandatecallreq->code = "01";
        $savemandatecallreq->message = "null";
        $savemandatecallreq->status = 'FAILED';
        $savemandatecallreq->save();
        return response([
            "code"=> "01",
            'message' => "null",
           'status' => 'FAILED'
        ], 200);

       }else{
        $savemandatecallreq = new CallBackMandateCreationReq;
        $savemandatecallreq->code = "00";
        $savemandatecallreq->message = $requestdata;
        $savemandatecallreq->status = "SUCCESS";
        $savemandatecallreq->save();

        $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
        $apiURL = 'https://enach.cbhfl.com/api/decrypt/request-data-decrypt';
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ];
        $response = Http::withHeaders($headers)->post($apiURL, [
            "data"=> $requestdata
        ]);
        $decryptdata = json_decode($response, TRUE);

        $callbackmandatecreationsave = new CallBackMandateCreation;
        $callbackmandatecreationsave->entityId="centralbank";
        $callbackmandatecreationsave->payer_name =$decryptdata['PAYER_NAME'] ;
        $callbackmandatecreationsave->payee_name = $decryptdata['PAYEE_NAME'];
        $callbackmandatecreationsave->payeevpa = $decryptdata['PAYEE_ADDR'];
        $callbackmandatecreationsave->payervpa = $decryptdata['PAYER_ADDR'];
        $callbackmandatecreationsave->umn = $decryptdata['UMN'];
        $callbackmandatecreationsave->merchant_id = $decryptdata['MERCHANT_ID'];
        $callbackmandatecreationsave->txnnote = 0;
        $callbackmandatecreationsave->transactiontimestamp = $decryptdata['trnDateTime'];
        $callbackmandatecreationsave->mandateamount = $decryptdata['AMOUNT'];
        $callbackmandatecreationsave->responsecode = $decryptdata['RESPONSE_CODE'];
        $callbackmandatecreationsave->responsemessage = $decryptdata['RESPONSE_MESSAGE']; ;

        $callbackmandatecreationsave->mandatetxnid = $decryptdata['MANDATE_TXN_ID'];
        $callbackmandatecreationsave->refId = $decryptdata['REF_ID'];
        $callbackmandatecreationsave->frequency = $decryptdata['FREQUENCY'];
        $callbackmandatecreationsave->validitystart = $decryptdata['VALIDITY_START'];
        $callbackmandatecreationsave->validityend = $decryptdata['VALIDITY_END'];
        $callbackmandatecreationsave->rrn = $decryptdata['RRN'];

        $callbackmandatecreationsave->status = "SUCCESS";
        $callbackmandatecreationsave->callbackstatuscode = 0;
        $callbackmandatecreationsave->callbackstatusdescription = 0;
        $callbackmandatecreationsave->callbacktxnid = 0;
        $callbackmandatecreationsave->message = 0;
        $callbackmandatecreationsave->responseobject = 0;
        $callbackmandatecreationsave->save();




        return response([
            "code"=> "00",
            'message' => $decryptdata,
           'status' => 'SUCCESS'
        ], 200);
       }



    }

    public function CallBackMandateExecutions(Request $request)
    {
       $requestdata= $request->data;
       if($requestdata == "")
       {
        $requestdata = "";
        $savemandatecallreq = new CallBackMandateExecutionsReq;
        $savemandatecallreq->code = "01";
        $savemandatecallreq->message = "null";
        $savemandatecallreq->status = 'FAILED';
        $savemandatecallreq->save();
        return response([
            "code"=> "01",
            'message' => "null",
           'status' => 'FAILED'
        ], 200);

       }else{
        $savemandatecallreq = new CallBackMandateExecutionsReq;
        $savemandatecallreq->code = "00";
        $savemandatecallreq->message = $requestdata;
        $savemandatecallreq->status = "SUCCESS";
        $savemandatecallreq->save();
        $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
        $apiURL = 'https://enach.cbhfl.com/api/decrypt/request-data-decrypt';
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ];
        $response = Http::withHeaders($headers)->post($apiURL, [
            "data"=> $requestdata
        ]);
        $decryptdata = json_decode($response, TRUE);
        $callbackmandateexecutionsave = new CallBackMandateExecutions;
        $callbackmandateexecutionsave->merchId=$decryptdata['merchantId'] ;
        $callbackmandateexecutionsave->merchantvpa =$decryptdata['merchantVpa'] ;
        $callbackmandateexecutionsave->customervpa = $decryptdata['customerVpa'];
        $callbackmandateexecutionsave->merchanttransactionid = $decryptdata['merchantTransactionId'];
        $callbackmandateexecutionsave->transactiontimestamp = $decryptdata['transactionTimestamp'];
        $callbackmandateexecutionsave->transactionamount = $decryptdata['transactionAmount'];
        $callbackmandateexecutionsave->gatewaytransactionid = $decryptdata['gatewayTransactionId'];
        $callbackmandateexecutionsave->gatewayresponsecode = $decryptdata['gatewayResponseCode'];
        $callbackmandateexecutionsave->gatewayresponsemessage = $decryptdata['gatewayResponseMessage'];
        $callbackmandateexecutionsave->rrn = $decryptdata['rrn'];
        $callbackmandateexecutionsave->status = "SUCCESS";
        $callbackmandateexecutionsave->callbackstatuscode = 0;

        $callbackmandateexecutionsave->callbackstatusdescription = 0;
        $callbackmandateexecutionsave->callbacktxnid = 0;
        $callbackmandateexecutionsave->message = 0;
        $callbackmandateexecutionsave->responseobject = 0;


        $callbackmandateexecutionsave->save();

        return response([
            "code"=> "00",
            'message' => $requestdata,
           'status' => 'SUCCESS'
        ], 200);
       }



    }

    public function CallBackDynamicQrTrans(Request $request)
    {

       $requestdata= $request->data;
       if($requestdata == "")
       {
        $requestdata = "";
        $savemandatecallreq = new CallBackDynamicQrTransReq;
        $savemandatecallreq->code = "01";
        $savemandatecallreq->message = "null";
        $savemandatecallreq->status = 'FAILED';
        $savemandatecallreq->save();
        return response([
            "code"=> "01",
            'message' => "null",
           'status' => 'FAILED'
        ], 200);

       }else{
        $savemandatecallreq = new CallBackDynamicQrTransReq;
        $savemandatecallreq->code = "00";
        $savemandatecallreq->message = $requestdata;
        $savemandatecallreq->status = "SUCCESS";
        $savemandatecallreq->save();
        $token = "Q2VudCBiYW5rIGhvbWUgZmluYW5jZSBMdGQ6Y2JoZmlAMTIzIw==";
        $apiURL = 'https://enach.cbhfl.com/api/decrypt/request-data-decrypt';
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ];
        $response = Http::withHeaders($headers)->post($apiURL, [
            "data"=> $requestdata
        ]);
        $decryptdata = json_decode($response, TRUE);
        $callbackmandatedynamicQrtrassave = new CallBackDynamicQrTrans;
        $callbackmandatedynamicQrtrassave->merchId=$decryptdata['merchantId'];
        $callbackmandatedynamicQrtrassave->merchantvpa =$decryptdata['merchantVpa'];
        $callbackmandatedynamicQrtrassave->customervpa = $decryptdata['customerVpa'];
        $callbackmandatedynamicQrtrassave->merchanttransactionid = $decryptdata['merchantTransactionId'];
        $callbackmandatedynamicQrtrassave->transactiontimestamp = $decryptdata['transactionTimestamp'];
        $callbackmandatedynamicQrtrassave->transactionamount = $decryptdata['transactionAmount'];
        $callbackmandatedynamicQrtrassave->gatewaytransactionid = $decryptdata['gatewayTransactionId'];
        $callbackmandatedynamicQrtrassave->gatewayresponsecode = $decryptdata['gatewayResponseCode'];
        $callbackmandatedynamicQrtrassave->gatewayresponsemessage = $decryptdata['gatewayResponseMessage'];
        $callbackmandatedynamicQrtrassave->rrn = $decryptdata['rrn'];
        $callbackmandatedynamicQrtrassave->status = "SUCCESS";
        $callbackmandatedynamicQrtrassave->callbackstatuscode = 0;

        $callbackmandatedynamicQrtrassave->callbackstatusdescription = 0;
        $callbackmandatedynamicQrtrassave->callbacktxnid = 0;
        $callbackmandatedynamicQrtrassave->message = 0;
        $callbackmandatedynamicQrtrassave->responseobject = 0;


        $callbackmandatedynamicQrtrassave->save();

        return response([
            "code"=> "00",
            'message' => $requestdata,
           'status' => 'SUCCESS'
        ], 200);
       }



    }




}
