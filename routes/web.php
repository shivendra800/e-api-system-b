<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/loan-requestsave', function () {
    return view('admin.adminlogin');
});
// Route::get('/contact-save', function(){
//     return abort(404);
//  });

// Route::get('/loan-requestsave', function(){
//     return abort(404);
//  });

// Route::get('/index.php/contact-save', function(){
//     return abort(404);
//  });

// Route::get('/rekyc-online-formSave', function(){
//     return abort(404);
//  });

Route::namespace('App\Http\Controllers\Front')->group(function () {



    Route::controller(\HomeController::class)->group(function(){
        Route::get('/', 'index');

        Route::get('Enach-Request-CheckMob','EnachRequestCheckMob');

            Route::post('Enach-Request-CheckMobverify','EnachRequestCheckMobverify');


        Route::get('Enach-Request-getloanaccno','EnachRequestgetloanaccno');
        Route::post('Enach-Request-getloanaccnosubmit','EnachRequestgetloanaccnosubmit');


        Route::get('Enach-Request','EnachRequest');
        Route::post('Enach-Request-otpsend','EnachRequestotpsend');
        Route::post('Enach-Request-otpverify','EnachRequestotpverify');

        //  Route::get('Enach-create','Enachcreate');
        Route::post('Enach-create-save','Enachcreatesave');
        Route::match(['get', 'post'], 'search-loan-acc', 'SearchLoanAcc');
        Route::get('payOnline-emi-payment', 'PayOnlineEmiPayment');
        Route::post('proceed-to-pay','razorpaycheck');
        Route::post('proceed-emi','PayEmiPayment');

        Route::get('download-qrcode/{loanno}', 'DownloadQrcode');
        Route::get('/download/{file}', 'download');


    });

    Route::controller(\CentBankPagesController::class)->group(function(){
        Route::get('/partnership', 'Partnership');
        Route::get('/about-us', 'AboutUs');
        Route::get('/director', 'Director');
        Route::get('/team', 'Team');
        Route::get('/financial', 'Financial');
        Route::get('/housing_rateOfInterest', 'Housing_rateOfInterest');
        Route::get('/income_based', 'Income_based');
        Route::get('/low_LTV', 'Low_LTV');
        Route::get('/post_pension', 'Post_pension');
        Route::get('/IEP', 'IEP');
        Route::get('/low_income', 'Low_income');
        Route::get('/affordable', 'Affordable');
        Route::get('/PMAY', 'Pmay');
        Route::get('/non_housing_rateOfInterest', 'Non_housing_rateOfInterest');
        Route::get('/commercial_plots', 'Commercial_plots');
        Route::get('/commercial_property', 'Commercial_property');
        Route::get('/LAP', 'Lap');
        Route::get('/overview', 'Overview');
        Route::get('/depositInterest', 'DepositInterest');
        Route::get('/advertisement', 'Advertisement');
        Route::get('/auction', 'Auction');
        Route::get('/rep', 'Rep');
        Route::get('/rep1', 'Rep1');
        Route::get('/rep2', 'Rep2');
        Route::get('/rep3', 'Rep3');
        Route::get('/rep4', 'Rep4');
        Route::get('/rep5', 'Rep5');
        Route::get('/rep6', 'Rep6');
        Route::get('/rep7', 'Rep7');
        Route::get('/career', 'Career');
        Route::get('/investor', 'Investor');
        Route::get('/download', 'Download');
        Route::get('/rekyc', 'Rekyc');
        Route::get('/contact', 'Contact');
        Route::get('/archives', 'Archives');
        Route::get('/customer-details', 'Customerdetails');
        Route::get('/customer-EMI', 'CustomerEMI');
        Route::get('/customer-online-pay', 'Customeronlinepay');
        Route::get('/Disclaimer', 'Disclaimer');
        Route::get('/downloadfile', 'Downloadfile');
        Route::get('/ecs-nach', 'EcsNach');
        Route::get('/ecs-nach_verification', 'EcsNachVerification');
        Route::get('/eopaav', 'Eopaav');
        Route::get('/fetchValue', 'FetchValue');
        Route::get('/mitc', 'Mitc');
        Route::get('/online-form', 'OnlineForm');
        Route::get('/our_event', 'OurEvent');
        Route::get('/pay', 'Pay');
        Route::get('/paytm_config', 'PaytmConfig');
        Route::get('/paytm_generate', 'PaytmGenerate');
        Route::get('/PaytmChecksum', 'PaytmChecksums');
        Route::get('/pension', 'Pension');
        Route::get('/pgRedirect', 'PgRedirect');
        Route::get('/pgResponse', 'PgResponse');
        Route::get('/policies', 'Policies');
        Route::get('/rateofinterest', 'RateofInterest');
        Route::get('repman', 'Repman');
        Route::get('tendor', 'Tendor');
        Route::get('transaction', 'Transaction');
        Route::get('TxnStatus', 'TxnStatus');
        Route::get('welcome_', 'Welcome');




    });

    Route::controller(\AllFormController::class)->group(function(){
        Route::post('newsletter_submit','NewsletterSubmit');
        Route::post('loan-requestsave','LoanRequestSave');
        Route::post('partnershipsave','PartnershipSave');
        Route::post('fixed-deposit-enquirySave','FixedDepositEnqSave');
        Route::post('contact-save', 'contactSave')->name('cart.store');
        Route::post('tendor-requestsave', 'TendorRequestSave');
        Route::post('ecs-nach-cancelsave', 'ECSNACHCANCELSAVE');
         Route::post('rekyc-online-formSave', 'RekycOnlineFormSave');

    });



});


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::match(['get','post'],'/','AdminLoginController@login');
    Route::group(['middleware'=> ['admin']],function(){

        Route::get('/dashboard','DashboardController@dashboard');
        Route::get('/logout','AdminLoginController@logout');

        Route::controller(\EnachReqController::class)->group(function(){

            Route::get('/Enach-Request','GetEnachReq');
            Route::match(['get','post'],'/E-NACH-viewdetails/{id}','ENACHRequestViewDetails');

            Route::match(['get','post'],'/E-NACH-Modify-Mandate/{terminalId}','ENACHModifyMandate');
            Route::match(['get','post'],'/E-NACH-Revoke-Mandate/{terminalId}','ENACHRevokeMandate');

            Route::match(['get','post'],'/E-NACH-Dynamic-QR-Generation/{terminalId}','ENACHDynamicQRGeneration');
            Route::get('/show-generatedDynamciQR/{id}','ShowGeneratedDynamicQR');



            Route::get('/callback-mandatecreation','CallbackMandateCreation');
            Route::get('/callback-mandateexecutions','CallbackMandateExecutions');
            Route::get('/callbackmandatExtecutionviewdetails/{id}','CallbackMandateExecutionViewDetails');
            Route::get('/callback-dynamic-qrtransection','CallbackDynamicQRTransection');
            Route::get('/callbackmandatDynamicQrTransviewdetails/{id}','CallbackMandateDynamicQRTransViewDetails');


            Route::get('/callbackmandate_create-viewdetails/{id}','CallbackMandateCreationViewDetails');
            Route::get('/GetCustGeneratedDynamicQRlist','GetCustGeneratedDynamicQRlist');
            Route::get('/modyfiedmandatedatalist', 'ModyfiedmandateDataList');

        });
          Route::controller(\OnlineEmiPaymentController::class)->group(function(){
            Route::get('/Customer-Emi-PayList','CustomerEmiPayList');
            Route::get('/cust-wise-emi-payment-details/{id}','CustWiseEmiPaymentDetails');

        });

        Route::controller(\ENachOnBoardingController::class)->group(function(){

            Route::match(['get','post'],'ENach-New-Onboarding','ENachNewOnboarding');
            Route::get('ENach-New-Onboarding-getloanaccno','ENachNewOnboardinggetloanaccno');
            Route::post('ENach-New-Onboarding-getloanaccnosubmit','ENachNewOnboardinggetloanaccnosubmit');
            Route::post('ENach-New-OnboardingCreatesave','ENachNewOnboardingcreatesave');
            Route::get('viewmandateQr-qrcode/{loanno}', 'ViewMandDownloadQrcode');
        });

        Route::controller(\ReportController::class)->group(function(){
            Route::get('Payment-Collection-Report','PaymentCollectionReort');
            Route::match(['get','post'],'DateWise-search-PaymentCollRep','PaymentCollReopSerachDateWise');

        });

        Route::controller(\AuctionController::class)->group(function(){
            Route::get('Get-Auction-List','GetAuctionList');
            Route::match(['get','post'],'Add-Auction-Save','AddEditAuctionSave');
            Route::match(['get','post'],'Edit-Auction-Save/{id}','EditAuctionSave');
            Route::delete('Delete-Auction/{id}','DeleteAuction');
            Route::match(['get','post'],'Delete-Auction-item/{id}','DeleteAuctionItem');

        });

        Route::controller(\SliderEventController::class)->group(function(){
            Route::get('Slider-OurEventList','SliderOurEventList');
            Route::match(['get','post'],'add-Edit-slider-envent/{id?}','AddEditSliderEvent');
            Route::delete('Delete-SliderEvent/{id}','DeleteSliderEvent');

        });
        Route::controller(\BranchController::class)->group(function(){
            Route::get('Branch-List','BranchList');
            Route::match(['get','post'],'add-Edit-Branch/{id?}','AddEditBranch');
            Route::delete('Delete-Branch/{id}','DeleteBranch');

        });

        Route::controller(\DownloadController::class)->group(function(){
            Route::get('Download-List','DownloadList');
            Route::match(['get','post'],'add-Edit-Download/{id?}','AddEditDownload');

            Route::delete('Delete-Download/{id}','DeleteDownload');

        });

    });

});

