@extends('front.layout.layouts')
@section('title', 'Overview')

@section('main_content')
<!-- heared area end -->
<style>
    .common {
        color: white;
    }
</style>
<div class="breadcumb-area black-opacity bg-img-24">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcumb-wrap">
          
            <h2>Overview<p style="color:white;font-size:12pt;"><br /><i>More Interest More Happiness</i></p>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcumb-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li><a href="{{url('/')}}">Deposit Scheme</a></li>
              <li>/</li>
              <li>Overview</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container-fluid" style="margin-bottom:-80px;">

            <div class="row" style="margin:0px 30px;">
                <div class="col-md-12" style="background-color:#6ca0e0;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Overview</b></h3>

                    <p class="common"><strong><strong>Cent Bank Home Finance Ltd</strong></strong>, a reputed housing finance company, has been<strong> permitted by National Housing Bank to accept deposits from the public. </strong></p>

                    <p class="common">Deposit Application forms can be downloaded from this site or can be obtained from any of our branches. </p>
                    <p class="common">The deposits will be accepted from resident individuals, HUFs, Charitable Trusts, Public/Private Companies, Association of persons, RRBs, Banks, Co-operative Banks, Co- operative Societies, etc. with proper introduction and by complying with KYC guidelines issued by the National Housing Bank. Every Individual depositor is required to comply with the KYC requirements by submitting the following documents:
                    <p class="common">(a) Latest photograph</p>
                    <p class="common">(b) Certified copy of proof of identity i.e. Income Tax Permanent Account Number (PAN), Election Identity Card, Passport, Aadhaar Card or any officially valid document.</p>
                    <p class="common">(c) Certified copy of proof of address</p>
                    <p class="common">For non individual depositor under various categories the following documents need to be submitted.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="background-color:white; color:blue;margin-top:30px;margin-bottom:10px;">

                                    <tbody style="background-color:white; color:#296dc1;">
                                        <tr><!--old from here start-->
                                            <!--<td><b>1. Trusts/Associations/clubs<br/></b>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Trust Deed/Bye Laws</p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of resolution</p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Names & Address of Trustees</p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Pan Card Copy</p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Specimen Signatures</p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of the authorised personnel</p>-->

                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Proprietary Firm</p>-->
                                            <!--end old-->
                                            <!--new tabs-->
                                            <td><b>1. For Individual<br /></b>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of individual</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Aadhar Card</p>
                                                <!--end new tabs-->
                                            </td>
                                            <!--old -->
                                            <!--<td><b>3. Public/Private Company/Cooperative Societies<br/>/ Cooperative Banks<br/></b>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of MOA & AOA/Bye Laws</p>-->
                                            <!-- <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of Resolution</p>-->
                                            <!-- <p><i class="fa fa-circle" style="color:#296dc1;"></i> List of Directors & Office Bearers</p>-->
                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i> Pan Card Copy</p>-->
                                            <!--   <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of the authorised personnel</p>-->
                                            <!--   </td>-->
                                            <!--old-->
                                            <td><b>2. For Trust<br /></b>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of Trust deed</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of Resolution</p>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC/Registration Document of Trust</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card of Trust </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of Trustee</p>
                                            </td>
                                            <!--old-->
                                            <!--<td><b>5. Partnership Deed <br/></b>-->
                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i>Proprietary Concern</p>-->
                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i> Firm Identity Document </p>  -->
                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card</p>-->

                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of the authorised personnel</p>-->
                                            <!--  </td>-->
                                            <!--old-->
                                            <!---new-->
                                            <td><b>3. Partnership Firm <br /></b>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of Partnership deed</p>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC/Registration Document of firm</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card of Firm </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of partners</p>

                                            </td>
                                            <!--new-->
                                        </tr>
                                        <tr>
                                            <!--old file-->
                                            <!--<td><b>2. Partnership Firm <br/></b>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Declaration of Partnership by Partners</p>-->
                                            <!-- <p><i class="fa fa-circle" style="color:#296dc1;"></i> Name & Address of Partners</p>-->
                                            <!-- <p><i class="fa fa-circle" style="color:#296dc1;"></i> Specimen Signatures</p>-->
                                            <!--  <p><i class="fa fa-circle" style="color:#296dc1;"></i> Pan Card Copy</p>-->
                                            <!--   <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of the authorised personnel</p>-->

                                            <!--   </td>-->
                                            <!--old end-->
                                            <!--new -->
                                            <td><b>4. Proprietorship Firm <br /></b>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Registration Document of firm</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card of Proprietor </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC Document of Proprietor</p>

                                            </td>
                                            <!--new end-->
                                            <!--old -->
                                            <!--<td><b>4. Proprietary Concern <br/></b>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i> Name & Signature of the Proprietor</p>-->
                                            <!--<p><i class="fa fa-circle"></i> Names & Address of Trustees</p>-->

                                            <!-- <p><i class="fa fa-circle" style="color:#296dc1;"></i> Pan Card </p>-->
                                            <!--<p><i class="fa fa-circle" style="color:#296dc1;"></i>Specimen Signatures</p>-->
                                            <!--   <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC document of the authorised personnel</p>-->
                                            <!--   </td>-->
                                            <!--end old-->
                                            <!--new-->

                                            <td><b>5. Private/Public Limited Company <br /></b>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of MOA/AOA </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Copy of Certificate of incorporation </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Certified copy of Resolution</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card of Company</p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC Document of Directors</p>

                                            </td>
                                            <!--new end-->

                                            <td><b>6. Cooperative Societies/Associations/Club <br /></b>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Bye Laws </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> Resolution copy </p>
                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> PAN Card of Society/Associations/Club</p>

                                                <p><i class="fa fa-circle" style="color:#296dc1;"></i> KYC Document of Authorized persons.</p>

                                            </td>
                                            <!--new end-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--<div class="col-md-3 col wow fadeInUp" data-wow-delay=".2s">-->
                    <div class="footer-widget footer-menu">
                        <p class="common" style="text-align:justify;"><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> Application for deposits will be made in the prescribed form duly completed and affixed with a passport size photo and accompanied by cash/local cheque/demand draft drawn in favour of <strong>“CENT BANK HOME FINANCE LIMITED”</strong> and crossed “Account Payee Only”.</p>
                        <p class="common" style="text-align:justify;"><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> Deposit of Rs.20,000/- and more will be accepted by account payee cheque/demand draft only.</p>
                        <p class="common" style="text-align:justify;"><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> Deposits from minor(s) will be accepted through Guardian(s).</p>
                        <p class="common" style="text-align:justify;"><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> Deposits can be made by A/c payee cheque/demand drafts/RTGS/NEFT drawn in favour of Cent Bank Home Finance Ltd.
                        </p>
                        <p class="common" style="text-align:justify;"><i class="fa fa-angle-double-right " style="color:white;font-size:18pt;"></i> TDS on interest on deposits is <strong>applicable whenever the interest amount exceeds Rs. 5,000/- in a financial year.</strong> 15H and 15G forms will be available in our branches / Our Website <strong>www.cbhfl.com</strong> to avail exemption from TDS wherever applicable.
                        </p>

                    </div>
                    <!--</div>-->
                    <!--<p class="common">-->
                    <!--   Application for deposits will be made in the prescribed form duly completed and affixed with a passport size photo and accompanied by cash/local cheque/demand draft drawn in favour of “CENT BANK HOME FINANCE LIMITED” and crossed “Account Payee Only”.</p>-->
                    <!--<p class="common"></p>-->
                    <!--<p class="common">/p>-->
                    <!--<p class="common"></p>-->

                    <!--<p class="common"></p>-->


                    <!--                        <table class="table table-bordered" style="background-color:white;">-->

                    <!--    <tbody>-->
                    <!--      <tr>-->
                    <!--          <td><b>Purpose</b></td>-->
                    <!--        <td> For Purchase/Construction/ Improvement/Extension/ Take over/ Residential Plot-->
                    <!--purchase/Plot purchase plus Construction/Top Up -Housing</td></tr>-->

                    <!--<tr>-->
                    <!--<td><b>Eligibility</b></td>-->
                    <!--        <td> Individuals who are Salaried/Professionals/ Self employed non-professional/NRI-->
                    <!--who has adequate repayment capacity supported by proof i.e. Salary Slips/Form 16/ and-->
                    <!--Income tax returns.</td></tr>-->


                    <!--<tr>-->
                    <!--<td><b>Loan Quantum</b></td>-->
                    <!--        <td>Minimum Rs. 2 Lakh and No Maximum cap</td></tr>-->

                    <!--<tr>        -->
                    <!--        <td><b>Repayment</b></td>-->
                    <!--        <td> Upto 30 Years (Subject to Maximum age of 65 years or Retirement age, whichever is-->
                    <!--earlier for Salaried and For Self Employed maximum age is 70 years at the time of loan maturity)</td></tr>-->

                    <!--<tr>-->
                    <!--    <td><b>Margin</b></td>-->
                    <!--        <td>Upto Rs.30 Lakh- 10%-->
                    <!-- Above Rs. 30 Lakh and Upto Rs.75 Lakh -20%-->
                    <!-- Above Rs.75 Lakh- 25% </td></tr>-->

                    <!-- <tr>-->
                    <!--     <td><b>Security</b></td>-->
                    <!--        <td>Mortgage of the property being financed</td>-->
                    <!--      </tr>-->
                    <!--    </tbody>-->
                    <!--  </table>-->
                    <br>
                </div>


            </div>
    </section>
    <!-- about-area end -->


</div>

@endsection