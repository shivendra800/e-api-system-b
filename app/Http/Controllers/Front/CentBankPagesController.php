<?php

namespace App\Http\Controllers\Front;

use App\Models\Slider;
use App\Models\Auction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentBankPagesController extends Controller
{
    public function Partnership()
    {
        return view('front.pages.partnership');
    }
    public function AboutUs()
    {
        $event = Slider::where('type', 'Our-Event')->get()->toArray();
        return view('front.pages.aboutUs',compact('event'));
    }
    public function Director()
    {
        return view('front.pages.director');
    }

    public function Team()
    {
        return view('front.pages.team');
    }
    public function Financial()
    {
        return view('front.pages.financial');
    }
    public function Housing_rateOfInterest()
    {
        return view('front.pages.housing_rateOfInterest');
    }
    public function Income_based()
    {
        return view('front.pages.income_based');
    }
    public function Low_LTV()
    {
        return view('front.pages.Low_LTV');
    }
    public function Post_pension()
    {
        return view('front.pages.post_pension');
    }
    public function IEP()
    {
        return view('front.pages.IEP');
    }
    public function Low_income()
    {
        return view('front.pages.low_income');
    }
    public function Affordable()
    {
        return view('front.pages.affordable');
    }
    public function Pmay()
    {
        return view('front.pages.pmay');
    }
    public function Non_housing_rateOfInterest()
    {
        return view('front.pages.non_housing_rateOfInterest');
    }
    public function Commercial_plots()
    {
        return view('front.pages.commercial_plots');
    }
    public function Commercial_property()
    {
        return view('front.pages.commercial_property');
    }
    public function Lap()
    {
        return view('front.pages.Lap');
    }
    public function Overview()
    {
        return view('front.pages.overview');
    }
    public function DepositInterest()
    {
        return view('front.pages.depositInterest');
    }
    public function Advertisement()
    {
        return view('front.pages.advertisement');
    }
    public function Auction()
    {
        $getaudic = Auction::get()->toArray();

        return view('front.pages.auction',compact('getaudic'));
    }
    public function Rep()
    {
        return view('front.pages.Rep');
    }
    public function Rep1()
    {
        return view('front.pages.Rep1');
    }
    public function Rep2()
    {
        return view('front.pages.Rep2');
    }
    public function Rep3()
    {
        return view('front.pages.Rep3');
    }
    public function Rep4()
    {
        return view('front.pages.Rep4');
    }
    public function Rep5()
    {
        return view('front.pages.Rep5');
    }
    public function Rep6()
    {
        return view('front.pages.Rep6');
    }
     public function Rep7()
    {
        return view('front.pages.Rep7');
    }
    public function Repman()
    {
        return view('front.pages.repman');
    }
    public function Career()
    {
        return view('front.pages.career');
    }
    public function Investor()
    {
        return view('front.pages.investor');
    }
    public function Download()
    {
        return view('front.pages.download');
    }
    public function Rekyc()
    {
        return view('front.pages.Rekyc');
    }
    public function Contact()
    {
        return view('front.pages.Contact');
    }
    public function Archives()
    {
        return view('front.pages.archives');
    }

    public function Customerdetails()
    {
        return view('front.pages.customer-details');
    }

    public function CustomerEMI()
    {
        return view('front.pages.customer-EMI');
    }
    public function Customeronlinepay()
    {
        return view('front.pages.customeronlinepay');
    }

    public function Disclaimer()
    {
        return view('front.pages.disclaimer');
    }

    public function Downloadfile()
    {
        return view('front.pages.downloadfile');
    }

    public function EcsNach()
    {
        return view('front.pages.ecsNach');
    }

    public function EcsNachVerification()
    {
        return view('front.pages.EcsNachVerification');
    }

    public function Eopaav()
    {
        return view('front.pages.Eopaav');
    }
    public function FetchValue()
    {
        return view('front.pages.fetchValue');
    }

    public function Mitc()
    {
        return view('front.pages.mitc');
    }

    public function OnlineForm()
    {
        return view('front.pages.online_form');
    }

    public function OurEvent()
    {
        $event = Slider::where('type', 'Slider')->get()->toArray();
        return view('front.pages.our_event',compact('event'));
    }

    public function Pay()
    {
        return view('front.pages.pay');
    }
    public function PaytmConfig()
    {
        return view('front.pages.paytm_config');
    }
    public function PaytmGenerate()
    {
        return view('front.pages.paytm_generate');
    }
    public function PaytmChecksums()
    {
        return view('front.pages.PaytmChecksum');
    }
    public function Pension()
    {
        return view('front.pages.pension');
    }
    public function PgRedirect()
    {
        return view('front.pages.pgRedirect');
    }
    public function PgResponse()
    {
        return view('front.pages.pgResponse');
    }
    public function Policies()
    {
        return view('front.pages.policies');
    }
    public function RateofInterest()
    {
        return view('front.pages.rateofinterest');
    }
    public function Tendor()
    {
        return view('front.pages.tendor');
    }
    public function Transaction()
    {
        return view('front.pages.transaction');
    }
    public function TxnStatus()
    {
        return view('front.pages.TxnStatus');
    }
    public function Welcome()
    {
        return view('front.pages.welcome_');
    }




}
