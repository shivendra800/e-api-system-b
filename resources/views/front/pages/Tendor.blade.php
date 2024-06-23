@extends('front.layout.layouts')
@section('title', 'Tendor')

@section('main_content')


<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];

    $sql = mysqli_query($con, "insert into loan_request(name,email,phone,branch_name) values('$name','$email','$phone','$branch')");

    if ($branch == 'Agra') {
        $to = 'bm_agra@cbhfl.com,';
    } elseif ($branch == 'Banglore') {
        $to = 'bm_bangalore@cbhfl.com,';
    } elseif ($branch == 'Bopal') {
        $to = 'bm_bhopal@cbhfl.com,';
    } elseif ($branch == 'Bilaspur') {
        $to = 'bm_bilaspur@cbhfl.com,';
    } elseif ($branch == 'Delhi') {
        $to = 'bm_delhi@cbhfl.com,';
    } elseif ($branch == 'Gwalior') {
        $to = 'bm_gwalior@cbhfl.com,';
    } elseif ($branch == 'Indore') {
        $to = 'bm_indore@cbhfl.com,';
    } elseif ($branch == 'Jabalpur') {
        $to = 'bm_jabalpur@cbhfl.com,';
    } elseif ($branch == 'Jaipur') {
        $to = 'bm_jaipur@cbhfl.com,';
    } elseif ($branch == 'Lucknow') {
        $to = 'bm_lucknow@cbhfl.com,';
    } elseif ($branch == 'Mumbai') {
        $to = 'bm_mumbai@cbhfl.com,';
    } elseif ($branch == 'Nagpur') {
        $to = 'bm_nagpur@cbhfl.com,';
    } elseif ($branch == 'Nashik') {
        $to = 'bm_nashik@cbhfl.com,';
    } elseif ($branch == 'Panchkula') {
        $to = 'bm_panchkula@cbhfl.com,';
    } elseif ($branch == 'Raipur') {
        $to = 'bm_raipur@cbhfl.com,';
    } elseif ($branch == 'Surat') {
        $to = 'bm_surat@cbhfl.com,';
    } elseif ($branch == 'Varodara') {
        $to = 'bm_vadodara@cbhfl.com,';
    }

    $to .= 'customercare@cbhfl.com';
    $subject = 'Cent Bank - REQUEST FOR A LOAN FORM';
    $message = "";
    $message .= '
<html>
<head>
  <title>Cent Bank - REQUEST FOR A LOAN FORM </title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
  
    <tr>
      <td><b>Name:</b></td>
      <td> ' . $name . ' </td>
    </tr>
    <tr>
      <td><b>Name of Branch :</b></td>
      <td> ' . $branch . ' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> ' . $phone . '</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> ' . $email . ' </td>
    </tr>
    
  
   
  </table>
</body>
</html>
';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <' . $email . '>' . "\r\n";
    // $headers .= "From: <'.$email.'>" . "\r\n" ;


    if ($sql) {

        if (mail($to, $subject, $message, $headers)) {

            echo "<script>alert('Form Submitted Successfully');window.location.href='tendor.php';</script>";
        }
    } else {
        echo "<script>alert('Try Again!');window.location.href='tendor.php';</script>";
    }
}

?>

<?php
if (isset($_POST['submit_form'])) {

    $cname = $_POST['cname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = mysqli_query($con, "insert into tender_req(name,email,phone,url,company_name) values('$name','$email','$phone','$url','$cname')");

    // Pankaj.kumar@cbhfl.com

    //$to = 'kit.rishabh7530@gmail.com';
    //$to .= 'shivendratripathi80044@gmail.com';
    $to .= 'pankaj.kumar@cbhfl.com';
    $subject = 'Cent Bank - REQUEST FOR Tendor Download';
    $message = "";
    $message .= '
<html>
<head>
  <title>Cent Bank - REQUEST FOR Tendor Download</title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
  
    <tr>
      <td><b>Company Name:</b></td>
      <td> ' . $cname . ' </td>
    </tr>
    <tr>
      <td><b>Contact Name:</b></td>
      <td> ' . $cname . ' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> ' . $phone . '</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> ' . $email . ' </td>
    </tr>
     <tr>
      <td><b>URL :</b></td>
      <td> ' . $url . ' </td>
    </tr>
   
  
   
  </table>
</body>
</html>
';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <' . $email . '>' . "\r\n";
    $headers .= 'From: <' . $cname . '>' . "\r\n";
    $headers .= 'From: <' . $phone . '>' . "\r\n";







    if ($sql) {

        if (mail($to, $subject, $message, $headers)) {

            echo "<script>alert('Request Submitted Successfully');</script>";
        }
    } else {
        echo "<script>alert('Try Again!');window.location.href='tendor.php';</script>";
    }
}

?>


<style>
    .t-loan {
        margin-bottom: 8px;
    }
</style>


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Invitation for tender
                        <br>
                        <!--                            <span style="font-size: 20px;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022<br>-->
                        <!--Please check your e-mail for Pre-Bid Meeting invite Link,<br> Meeting date & time - 04 February 2022 at 3:00 PM</span>-->
                    </h2>
                    <!--                        <h4 style="    color: #fff;-->

                    <!--;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022</h4>-->
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>/</li>
                        <li>Invitation for tender</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--        <marquee ><a href="tendor.php"><b style='color:red;'>CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022 Online Meeting for Written PRE BID QUERIES- Clarifications-->
<!--Please check your e-mail for-->
<!--Meeting Date & Time - 16th February, 2022 at 14:30 hours (2:30pm)</b></a></marquee>-->

<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container">

            <div class="row">
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Tender For Man Power</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">



                                <tr>
                                    <th>1</th>
                                    <td class="text-center">Request for Proposal
                                        For Engagement of Agency for Supply of Providing Skilled, Semi Skilled and Unskilled Manpower
                                        at Corporate/Registered Office and various Pan India locations.</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/RFP MANPOWER.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
                <br>
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Pre Bid Query Response</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">



                                <tr>
                                    <th>1</th>
                                    <td class="text-center">QUERY RESPONSE 1 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/QUERY RESPONSE 1 N.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td class="text-center">QUERY RESPONSE 2 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/QUERY RESPONSE 2 N.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td class="text-center">QUERY RESPONSE 3 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/QUERY RESPONSE 3 N.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td class="text-center">QUERY RESPONSE 4 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/N.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
                <br>
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>ADDENDUM – 1 Dated 25th March 2022</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <!--<th>Sr.No.</th>-->
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">



                                <tr>

                                    <td class="text-center"> RFP No. CBHFL/2021-22/RFP-2 Date : 16 March 2022</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/CBHFL RFP Addendum 1 dated 25 March 2022 to RFP 2 (2).pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>
                <br>
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Pre-Bid Meeting</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <!--<th>Sr.No.</th>-->
                                    <th class="text-center">Meeting</th>
                                    <th class="text-center">Date And Time</th>
                                    <th class="text-center">Access code</th>
                                    <th class="text-center">Video Link</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">



                                <tr>

                                    <td class="text-center"> Pre-Bid Meeting for CBHFL RFP. No CBHFL/2021-22/RFP-2 Dated 16/03/2022</td>
                                    <td class="text-center">Meeting Date : 16/03/2022
                                        <br>Meeting Time : 3:00 PM
                                    </td>
                                    <td class="text-center">Meeting id:- 2517 522 9249
                                        <br>Password-HOME
                                    </td>

                                    <td class="text-center">
                                        <a href="https://cbhfl.webex.com/cbhfl/j.php?MTID=m75404c6e3dd3e7392b8a940d01d2751f" style="color:#296dc1;"><b>Link</b></a>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>RFP-2</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">
                                <th>1</th>
                                <td class="text-center"> Tender Notice</td>

                                <td class="text-center">
                                    <a href="assets/images/Cent .JPG" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>
                            </tbody>
                            <tbody style="background-color:#fff; color:#296dc1;">
                                <th>2</th>
                                <td class="text-center">RFP-2 Guide </td>




                                <td class="text-center">
                                    <a href="pdf/Website.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>
                            </tbody>
                            <tbody style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th>3</th>
                                    <td class="text-center">e-Bid RFP-2</td>
                                    <td class="text-center">
                                        <div class="container">

                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mysecondModal">
                                                Download
                                            </button>

                                            <!-- The Modal -->
                                            <div class="modal" id="mysecondMod4al">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Information </h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post" onsubmit="return validation()">
                                                                <label for="username">Name</label>
                                                                <input type="text" name="username" required /> <br><br>
                                                                <label for="email">Email</label>
                                                                <input type="text" name="email" /> <br><br>
                                                                <label for="phone">Phone No</label>
                                                                <input type="number" name="phone" /> <br><br>

                                                                <input type="submit" id="submit-form" value="submit" hidden />
                                                            </form>
                                                            <button id="{{url('/')}}/front_assests/rfp2 website/CBHFL  e.pdf">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>

                            </tbody>
                            <tbody style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th>4</th>
                                    <td class="text-center"> Annexure 1 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 01 - CBHFL Bid undertaking letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td class="text-center"> Annexure 2 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 02 -CBHFL Manufacturers Authorization Form.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td class="text-center"> Annexure 3 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 03 - CBHFL Conformity letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td class="text-center"> Annexure 4 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 04 - CBHFL Conformity with hardcopy letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td class="text-center"> Annexure 5 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 05 - CBHFL Pre Bid query format.xls" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td class="text-center"> Annexure 6 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 06 - CBHFL Authorization letter format for bid opening.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td class="text-center"> Annexure 7 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 07 - CBHFL Pro forma for Performance Bank Guarantee.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>11</th>
                                    <td class="text-center"> Annexure 8 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 08 - CBHFL Non Disclosure Agreement.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>12</th>
                                    <td class="text-center"> Annexure 9 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 09 - CBHFL OEMs declaration for Bug Free Software.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>13</th>
                                    <td class="text-center"> Annexure 10 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 10 - CBHFL Commercial Compliance Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>14</th>
                                    <td class="text-center"> Annexure 11 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 11 - CBHFL Compliance Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>15</th>
                                    <td class="text-center"> Annexure 12 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 12 - CBHFL Proposed Team Profile.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>16</th>
                                    <td class="text-center"> Annexure 13 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 13 - CBHFL Application Integrity Statement.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>17</th>
                                    <td class="text-center"> Annexure 14 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 14 - CBHFL Integrity Pact.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>18</th>
                                    <td class="text-center"> Annexure 15 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 15 - CBHFL Undertaking for No Deviation.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>19</th>
                                    <td class="text-center"> Annexure 16 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 16 - CBHFL Contract form.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>20</th>
                                    <td class="text-center"> Annexure 17 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 17 - CBHFL Deed of Indemnity.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>21</th>
                                    <td class="text-center"> Annexure 18 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 18 - CBHFL Acceptance Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>22</th>
                                    <td class="text-center"> Annexure 19 </td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 19 - CBHFL Information Security Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>23</th>
                                    <td class="text-center">Annexure 20</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 20 - CBHFL Business and Employee Projections.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>24</th>
                                    <td class="text-center">Annexure 21</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 21 - CBHFL List of Document For Technical Bid.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>25</th>
                                    <td class="text-center">Annexure 22</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 22 - CBHFL Comments on T&C.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>26</th>
                                    <td class="text-center">Annexure 23</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 23 - CBHFL Hardware Requirement Specification.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>27</th>
                                    <td class="text-center"> Annexure 24</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 24 - CBHFL Project Timelines.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>28</th>
                                    <td class="text-center">Annexure 25</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Annexure 25 - CBHFL Customization Details.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>29</th>
                                    <td class="text-center">Appendix 01</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/rfp2 website/Appendix 01 - eBid Minimum Eligibility Criteria.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <th>30</th>
                                <td class="text-center">Appendix 02</td>

                                <td class="text-center">
                                    <a href="{{url('/')}}/front_assests/rfp2 website/Appendix 02 - eBid Minimum Technical Criteria for CBHFL IT Solutions  ABC.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>
                                <th>31</th>
                                <td class="text-center">Appendix 03-Part A</td>

                                <td class="text-center">
                                    <a href="{{url('/')}}/front_assests/rfp2 website/Appendix 03 - Part A Bill of Material for Commercial Bid.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>
                                <th>32</th>
                                <td class="text-center">Appendix 03-Part B</td>

                                <td class="text-center">
                                    <a href="{{url('/')}}/front_assests/rfp2 website/Appendix 03 - Part B Bill of Material for Commercial Bid.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>
                                <th>33</th>
                                <td class="text-center">Appendix 03-Part C</td>

                                <td class="text-center">
                                    <a href="{{url('/')}}/front_assests/rfp2 website/Appendix 03 - Part C Bill of Material for Commercial Bid.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>RFP-1 Cancellation Notice</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <!--<th>Sr.No.</th>-->
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">



                                <tr>

                                    <td class="text-center"> RFP Cancellation Notice</td>

                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/pdf/NOTICE FOR CANCELLATION OF RFP-converted.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <!--<tr>-->
                                <!--        <td  class="text-center"> RFP Amendments-2</td> -->

                                <!--   	  <td  class="text-center">-->
                                <!--   	       <a  href="pdf/SUPPLY.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
                                <!--   	  </td>-->
                                <!--</tr>-->


                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>

                <br>
            </div>
            <!--<br>-->
            <!--            <div class="row">-->
            <!--                    <div class="col-md-12" style="background-color:#296dc1;">-->
            <!--                        <br>-->
            <!--                        <h3 style="color:white; text-align:center;"><b>Amendments</b></h3>-->
            <!--                        <div class="table-responsive"> -->
            <!--                        <table class="table table-bordered">-->
            <!--                             <thead style="background-color:#fff; color:#296dc1;">-->
            <!--                              <tr>-->
            <!--<th>Sr.No.</th>-->
            <!--                                    <th  class="text-center">Title</th>-->
            <!--                                   <th  class="text-center">Downloads</th>-->
            <!--                              </tr>-->

            <!--                            </thead>-->
            <!--<tbody style="background-color:#fff; color:#296dc1;">-->



            <!--		<tr>-->

            <!--        <td  class="text-center"> RFP Amendments-1</td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/RFP AMENDMENTS FINAL.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->
            <!--	<tr>-->
            <!--         <td  class="text-center"> RFP Amendments-2</td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/SUPPLY.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--</tbody>-->

            <!--	</table></div>-->
            <!--                            <br>-->
            <!--                       </div>-->



            <!--            </div>-->
            <!--            <br>-->
            <!--                    <div class="row">-->
            <!--                    <div class="col-md-12" style="background-color:#296dc1;">-->
            <!--                        <br>-->
            <!--                        <h3 style="color:white; text-align:center;"><b>Query Responses</b></h3>-->
            <!--                        <div class="table-responsive"> -->
            <!--                        <table class="table table-bordered">-->
            <!--                             <thead style="background-color:#fff; color:#296dc1;">-->
            <!--                              <tr>-->
            <!--<th>Sr.No.</th>-->
            <!--                                    <th  class="text-center">Title</th>-->
            <!--                                   <th  class="text-center">Downloads</th>-->
            <!--                              </tr>-->

            <!--                            </thead>-->
            <!--<tbody style="background-color:#fff; color:#296dc1;">-->



            <!--		<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-1 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre-Bid query format.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->
            <!--	<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-2 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre-Bid query format 2.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--	 	<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-3 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre Bid Query Response-3.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>  -->

            <!--		<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-4 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre Bid Query Response-4.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>  -->

            <!--		<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-5 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre Bid Query Response-5.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr> -->

            <!--		<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-6 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/pre_bid_query_response.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr> -->

            <!--	<tr>-->
            <!--<td></td>-->
            <!--        <td  class="text-center"> Pre Bid Query Response-7 </td> -->

            <!--    	  <td  class="text-center">-->
            <!--    	       <a  href="pdf/Pre Bid Query Response-7.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr> -->

            <!--</tbody>-->

            <!--	</table></div>-->
            <!--                            <br>-->
            <!--                       </div>-->



            <!--            </div>-->
            <!--            <br/>-->
            <!--                <div class="row">-->
            <!--                    <div class="col-md-12" style="background-color:#296dc1;">-->
            <!--                        <br>-->
            <!--                        <h3 style="color:white; text-align:center;"><b>Invitation for tender</b></h3>-->
            <!--                        <div class="table-responsive"> -->
            <!--                        <table class="table table-bordered">-->
            <!--                             <thead style="background-color:#fff; color:#296dc1;">-->
            <!--                              <tr>-->
            <!--                                    <th>Sr.No.</th>-->
            <!--                                    <th>Title</th>-->
            <!--                                    <th>Start Date</th>-->
            <!--                                    <th>End Date</th>-->
            <!--                                   <th>Downloads</th>-->
            <!--                              </tr>-->

            <!--                            </thead>-->
            <!--<tbody style="background-color:#fff; color:#296dc1;">-->


            <!--		<tr>-->
            <!--	    <td>1</td>-->
            <!--        <td>  (i) Itarsi<br>-->

            <!--(ii) Pithampur<br>-->

            <!--(iii) Ambala<br>-->

            <!--(iv) Akurdi<br>-->

            <!--(v) Vasai<br>-->

            <!--(vi) Manesar</td> -->
            <!--         <td> 21.12.2021</td>         -->
            <!--         <td>30.12.2021</td>-->
            <!--    	  <td>-->
            <!-- <a href="pdf/Fair Practice Code Updated.pdf" target="_blank"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->

            <!--<a href="pdf/Technical Financial Bid Format - Jaipur.pdf" target="_blank"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a>-->

            <!-- <a href="pdf/jpg2pdf.pdf" target="_blank"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->

            <!--   	       <a href="pdf/Technical & Financial Bid Format - Sub Branch.pdf" target="_blank"  style="color:#296dc1;" data-toggle="modal" data-target="#myModal"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--   	  </td>-->
            <!--</tr>-->

            <!--		<tr>-->
            <!--	    <td></td>-->
            <!--        <td> RFP for Cloud Based Home Loans LAP and FD IT solutions </td> -->
            <!--         <td> 01-02-2022-->
            <!--</td>         -->
            <!--         <td>22-02-2022</td>-->
            <!--    	  <td>-->
            <!--    	       <a style="color:#296dc1;"  data-toggle="modal" data-target="#myModal"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>1</td>-->
            <!--        <td> Annexure 1 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--href="annexure/Annexure 01 - CBHFL Bid undertaking letter.doc"-->

            <!--    	       <a  href="Website/Annexure 01 - CBHFL Bid undertaking letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->
            <!--<a  href="annexure/Annexure 01 - CBHFL Bid undertaking letter.doc" id="docid">55</a>-->

            <!--	   	<tr>-->
            <!--	    <td>2</td>-->
            <!--        <td> Annexure 2 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a  href="Website/Annexure 02 -CBHFL Manufacturers Authorization Form.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--	<tr>-->
            <!--	    <td>3</td>-->
            <!--        <td> Annexure 3 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a  href="Website/Annexure 03 - CBHFL Conformity letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--	<tr>-->
            <!--	    <td>4</td>-->
            <!--        <td> Annexure 4 </td> -->
            <!--        <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 04 - CBHFL Conformity with hardcopy letter.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>5</td>-->
            <!--        <td> Annexure 5 </td> -->
            <!--           <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 05 - CBHFL Pre Bid query format.xls" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>6</td>-->
            <!--        <td> Annexure 6 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 06 - CBHFL Authorization letter format for bid opening.doc" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>7</td>-->
            <!--        <td> Annexure 7 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 07 - CBHFL Pro forma for Performance Bank Guarantee.doc"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>8</td>-->
            <!--        <td> Annexure 8 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 08 - CBHFL Non Disclosure Agreement.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>9</td>-->
            <!--        <td> Annexure 9 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 09 - CBHFL OEMs declaration for Bug Free Software.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>10</td>-->
            <!--        <td> Annexure 10 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 10 - CBHFL Commercial Compliance Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>11</td>-->
            <!--        <td> Annexure 11 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 11 - CBHFL Compliance Certificate.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>12</td>-->
            <!--        <td> Annexure 12 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 12 - CBHFL Proposed Team Profile.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>13</td>-->
            <!--        <td> Annexure 13 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 13 - CBHFL Application Integrity Statement.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>14</td>-->
            <!--        <td> Annexure 14 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 14 - CBHFL Integrity Pact.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>15</td>-->
            <!--        <td> Annexure 15 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 15 - CBHFL Undertaking for No Deviation.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>16</td>-->
            <!--        <td> Annexure 16 </td> -->
            <!--  <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 16 - CBHFL Contract form.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--		<tr>-->
            <!--	    <td>17</td>-->
            <!--        <td> Annexure 17 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 17 - CBHFL Deed of Indemnity.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->
            <!--		<tr>-->
            <!--	    <td>18</td>-->
            <!--        <td> Annexure 18 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 18 - CBHFL Acceptance Certificate.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->
            <!--		<tr>-->
            <!--	    <td>19</td>-->
            <!--        <td> Annexure 19 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 19 - CBHFL Information Security Certificate.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>20</td>-->
            <!--        <td> Annexure 20 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	<td>-->
            <!--    	   <a href="Website/Annexure 20 - CBHFL Business and Employee Projections.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>21</td>-->
            <!--        <td> Annexure 21 </td> -->
            <!--           <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 21 - CBHFL List of Document For Technical Bid.docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>22</td>-->
            <!--        <td> Annexure 22 </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 22 - CBHFL Comments on T&C.doc"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>23</td>-->
            <!--        <td> Annexure 23 </td> -->
            <!--  <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 23 - CBHFL Hardware Requirement Specification.xlsx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>24</td>-->
            <!--        <td> Annexure 24  </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 24 - CBHFL Project Timelines.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>25</td>-->
            <!--        <td> Annexure 25  </td> -->
            <!--          <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Annexure 25 - CBHFL Customization Details.docx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>26</td>-->
            <!--        <td> Appendix 01 </td> -->
            <!--        <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Appendix 01 - Minimum Eligibility Criteria.doc"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>27</td>-->
            <!--        <td> Appendix 02 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Appendix 02 - Minimum Technical Criteria for CBHFL IT Solutions 30012022.xlsx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->

            <!--		<tr>-->
            <!--	    <td>28</td>-->
            <!--        <td> Appendix 03 </td> -->
            <!--         <td>---->
            <!--</td>         -->
            <!--         <td>--</td>-->
            <!--    	  <td>-->
            <!--    	       <a href="Website/Appendix 03 - Bill of Material for Commercial Bid.xlsx"  style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>-->
            <!--    	  </td>-->
            <!--	</tr>-->


            <!--</tbody>-->

            <!--	</table></div>-->
            <!--                            <br>-->
        </div>



</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Fill the form First</h4>
            </div>
            <div class="modal-body">
                <form action="tendor.php" method="post" class="doc_form">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="cname" placeholder="Enter Company Name" required />
                    </div>
                    <div class="form-group">
                        <label>Website Url</label>
                        <input type="text" class="form-control" name="url" placeholder="Enter Website Url" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Your Mobile No" required>
                    </div>

                    <button type="submit" class="btn btn-danger" style="float:left;" name="submit_form">Submit</button>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<div id="mysecondModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Fill the form First</h4>
            </div>

            <div class="modal-body">
                <form action="tendor.php" method="post" class="doc_form">
                    <label>Company Name:</label>
                    <input type="text" name="cname" placeholder="Enter Company Name" required /> <br><br>
                    <label>Contact Name:</label>
                    <input type="text" name="name" placeholder="Enter Your Contact Name" required /> <br><br>
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="Enter Your Company Email" required /> <br><br>
                    <label for="phone no">Mobile Number:</label>
                    <input type="number" name="phone" placeholder="Enter Your Mobile No" required /> <br><br>
                    <button type="submit" class="btn btn-success" style="float:left;" name="submit_form">Submit</button>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</section>
<!-- about-area end -->



<!-- .service-area start -->
<section class="service-area ptb-100" style="background-image: url({{asset('front_assests/20150502_554414ffeb8d9.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 col">
                <div class="panel-group emi" style="width:400px;">
                    <!--#d2220b;-->
                    <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Calculator</div>
                        <div class="panel-body">

                            <!--form-->
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-group form-group">
                                            <input type="number" id="txtLoanAmount" class="form-control" placeholder="Loan Amount*" name="fname" required>
                                            <span class="input-group-addon" style="color:#296dc1;"><b>₹</b></span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="input-group form-group">
                                            <input type="number" class="form-control" id="txtInterestRate" placeholder="Rate of Interest*" name="email" required>
                                            <span class="input-group-addon" style="color:#296dc1;"><b>%</b></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-md-8 form-group">

                                                <input type="number" class="form-control" required id="txtLoanTerm" placeholder="Loan Tenure*" name="email">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <select class="col-md-12 form-control form-control-lg" id="ddlTermType">
                                                    <option value="years">Years</option>
                                                    <option value="months">Months</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <button type="reset" class="cont-submit btn-contact btn-style">Reset</button>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <button class="cont-submit btn-contact btn-style" type="button" id="btnCalculateHomeLoanEMI" onclick="calculateHomeLoanEMI()">Submit</button>
                                            </div>

                                            <div class="col-md-2">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- result emi cal -->
                                    <!--<div class="col-md-12">-->
                                    <!-- <hr/>-->
                                    <!-- result design -->
                                    <!--<div class="archive-wrap mb-30">-->
                                    <!--<h3 class="sidebar-title">EMI Result</h3>-->
                                    <!--<ul>-->
                                    <!--<li><a href="#">EMI <span class="pull-right" id="totalEMIValue">0</span></a></li>-->
                                    <!--<li><a href="#">Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></a></li>-->
                                    <!--<li><a href="#">Loan Term <span class="pull-right" id="totalLoanTerm">0</span></a></li>-->
                                    <!--<li><a href="#">Interest Rate <span class="pull-right" id="totalInterestRate">0</span></a></li>-->
                                    <!--<li><a href="#">Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></a></li>-->
                                    <!--<li><a href="#">Total Amount <span class="pull-right" id="totalAmount">0</span></a></li>-->
                                    <!--</ul>-->
                                    <!--</div>-->
                                    <!--end result design  -->
                                    <!-- end result emi cal -->
                                    <!-- </div> -->

                                </div>
                        </div>
                        </form>

                        <!--end form-->

                    </div>
                </div>
            </div>

            <!--</div>                    -->







            <div class="col-md-3 col-sm-4 col-xs-12 col">

                <div class="panel-group emi">

                    <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Result</div>
                        <div class="panel-body" style="height:240px;">
                            <div class="archive-wrap mb-30">
                                <!--<h3 class="sidebar-title">EMI Result</h3>-->
                                <ul>
                                    <li><a href="#">EMI <span class="pull-right" id="totalEMIValue">0</span></a></li>
                                    <li><a href="#">Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></a></li>
                                    <li><a href="#">Loan Term <span class="pull-right" id="totalLoanTerm">0</span></a></li>
                                    <li><a href="#">Interest Rate <span class="pull-right" id="totalInterestRate">0</span></a></li>
                                    <li><a href="#">Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></a></li>
                                    <li><a href="#">Total Amount <span class="pull-right" id="totalAmount">0</span></a></li>
                                </ul>
                            </div>
                            <!--end result design  -->
                            <!--     end result emi cal -->
                        </div>
                    </div>
                </div>
                <!--</div>-->

            </div>


            <div class="col-md-4 col-sm-4 col-xs-12 col">


                <div class="panel-group emi">

                    <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">Request For New Loan</div>
                        <div class="panel-body">

                            <!--form-->
                            <form action="#" method="post" id="formid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="email" class="form-control" placeholder="Enter Email Id" name="email" required>

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="text" class="form-control" placeholder="Enter Mobile No." name="phone" required>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">


                                            <div class="col-md-12 form-group">
                                                <select class="col-md-12 form-control form-control-lg" id="ddlTermType" name="branch" required>
                                                    <option value="">Select Branch</option>
                                                    <option value="Bhopal">Bhopal</option>
                                                    <option value="Raipur">Raipur</option>
                                                    <option value="Jabalpur">Jabalpur</option>
                                                    <option value="Gwalior">Gwalior</option>
                                                    <option value="Indore">Indore</option>
                                                    <option value="New Delhi">New Delhi</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                    <option value="Jaipur">Jaipur</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Bangalore">Bangalore</option>
                                                    <option value="Lucknow">Lucknow</option>
                                                    <option value="Bilaspur">Bilaspur</option>
                                                    <option value="Vadodara">Vadodara</option>
                                                    <option value="Nashik">Nashik</option>
                                                    <option value="Agra">Agra</option>
                                                    <option value="Surat">Surat</option>
                                                    <option value="Nagpur">Nagpur</option>
                                                    <option value="Panchkula">Panchkula</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">

                                            <!--<div class="col-md-2">-->
                                            <!--</div>-->

                                            <div class="col-md-12 form-group" style="text-align:center;margin-bottom:-10px;">
                                                <button class="cont-submit btn-contact btn-style" onclick="openWord1()" name="submit">Submit</button>
                                            </div>


                                        </div>



                                        <!--                        <form action="#" method="post" >-->
                                        <!--<div class="row"><br/>-->
                                        <!--    <h4 style="color:white;text-align:center"><b>Request a New Loan</b></h4>-->

                                        <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p><br>-->
                                        <!--<div class="col-xs-12 form-group">-->
                                        <!--<input type="text" class="form-control" placeholder="Enter Name" name="fname"><br>-->
                                        <!--</div>-->

                                        <!--<div class="col-xs-12 form-group">-->
                                        <!--<select class="form-control">-->
                                        <!--location-->
                                        <!--location end-->
                                        <!--</select><br>-->
                                        <!--</div>-->
                                        <!--<div class="col-xs-12 form-group">-->
                                        <!--<input type="text" class="form-control" placeholder="Enter Mobile No."  name="fname"><br>-->
                                        <!--</div>-->
                                        <!--<div class="col-xs-12">-->
                                        <!--<div class="form-group">-->

                                        <!--</div>-->
                                        <!--<input type="text" placeholder="Nearest Branch" id="email" name="email">-->
                                        <!--</div>-->

                                        <!--<div class="col-xs-12" style="text-align:center;">-->
                                        <!--<button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button><br><br>-->
                                        <!--<br>-->
                                        <!--<br>-->

                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</form></div>-->

                                        <!--        </div>-->


                                        <!--</div>-->
</section>
</div>



<script>
    var pdfUrl = "https://cbhfl.com/rfp2 website/CBHFL  e.pdf";


    $('.doc_form').on('submit', function() {

        window.open(pdfUrl, 'download');

    });
</script>
@endsection