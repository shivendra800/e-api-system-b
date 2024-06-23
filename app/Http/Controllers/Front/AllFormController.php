<?php

namespace App\Http\Controllers\Front;

use Exception;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\LoanRequest;
use App\Models\RekycOnline;
use Illuminate\Http\Request;
use App\Models\EcsNachCancel;
use App\Models\TenderRequest;
use App\Models\BusinessPartner;
use App\Models\FixedDepositEnq;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AllFormController extends Controller
{
    public function NewsletterSubmit(Request $request)
    {
        try {
        $newsletter = new Newsletter;
        $newsletter->email = $request->input("email");
        $newsletter->save();
        return redirect()->back()->with("message", "Newsletter Submitted Successfully");
    } catch (Exception $exception) {
        // DB::rollback();
        return redirect()->back()->with('error', $exception->getMessage());

    }
    }
    public function LoanRequestSave(Request $request)
    {

        $loanreq = new LoanRequest;
        $loanreq->name = $request->input("name");
        $loanreq->email = $request->input("email");
        $loanreq->phone = $request->input("phone");
        $loanreq->branch_name = $request->input("branch_name");
        $loanreq->save();
        $branch_name = $request->input("branch_name");
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        if($branch_name == 'Agra')
        {
             $to = 'bm_agra@cbhfl.com,';

        }
        elseif($branch_name == 'Banglore'){
            $to = 'bm_bangalore@cbhfl.com,';
        }
        elseif($branch_name == 'Bopal'){
            $to = 'bm_bhopal@cbhfl.com,';
        }
        elseif($branch_name == 'Bilaspur'){
            $to = 'bm_bilaspur@cbhfl.com,';
        }
        elseif($branch_name == 'Delhi'){
            $to = 'bm_delhi@cbhfl.com,';
        }
        elseif($branch_name == 'Gwalior'){
            $to = 'bm_gwalior@cbhfl.com,';
        }
        elseif($branch_name == 'Indore'){
            $to = 'bm_indore@cbhfl.com,';
        }
        elseif($branch_name == 'Jabalpur'){
            $to = 'bm_jabalpur@cbhfl.com,';
        }
        elseif($branch_name == 'Jaipur'){
            $to = 'bm_jaipur@cbhfl.com,';
        }
        elseif($branch_name == 'Lucknow'){
            $to = 'bm_lucknow@cbhfl.com,';
        }
        elseif($branch_name == 'Mumbai'){
            $to = 'bm_mumbai@cbhfl.com,';
        }
        elseif($branch_name == 'Nagpur'){
            $to = 'bm_nagpur@cbhfl.com,';
        }
        elseif($branch_name == 'Nashik'){
            $to = 'bm_nashik@cbhfl.com,';
        }
        elseif($branch_name == 'Panchkula'){
            $to = 'bm_panchkula@cbhfl.com,';
        }
        elseif($branch_name == 'Raipur'){
            $to = 'bm_raipur@cbhfl.com,';
        }
        elseif($branch_name == 'Surat'){
            $to = 'bm_surat@cbhfl.com,';
        }
        elseif($branch_name == 'Varodara'){
            $to = 'bm_vadodara@cbhfl.com,';
        }
      //  customercare@cbhfl.com
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
            <td> '.$name.' </td>
          </tr>
          <tr>
            <td><b>Name of Branch :</b></td>
            <td> '.$branch_name.' </td>
          </tr>
          <tr>
            <td><b>Mobile Number:</b></td>
            <td> '.$phone.'</td>
          </tr>
          <tr>
            <td><b>Email id :</b></td>
            <td> '.$email.' </td>
          </tr>



        </table>
      </body>
      </html>
      ';

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


      $headers .= 'From: <'.$email.'>' . "\r\n";
       if (mail($to, $subject, $message, $headers)) {

        return redirect()->back()->with("message", "Loan Request Submitted Successfully");
       }else{
           return redirect()->back()->with("message", "Loan Request email not send!!");
       }
    }

    public function PartnershipSave(Request $request)
    {
        $businesspartner = new BusinessPartner;
        $businesspartner->type = $request->input("r_type");
        $businesspartner->name = $request->input("fname");
        $businesspartner->phone = $request->input("phone");
        $businesspartner->email = $request->input("email");
        $businesspartner->branch = $request->input("branch");
        $businesspartner->constitution = $request->input("constitution");
        $businesspartner->occupation = $request->input("occupation");
        $businesspartner->here_about_us = $request->input("about_us");
        $businesspartner->save();

         $to = 'lead@cbhfl.com';
        //  $to = 'bit16cs51@bit.ac.in';


        $subject = 'Cent Bank - Partnership';
        $message = "";
        $message .= '
      <html>
      <head>
        <title>Cent Bank</title>
      </head>
      <body>
        <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
        <table>
         <tr>
            <td><b>Type :</b></td>
            <td> ' . $request->input("r_type") . ' </td>
          </tr>
          <tr>
            <td><b>Name :</b></td>
            <td> ' . $request->input("fname") . ' </td>
          </tr>
          <tr>
            <td><b>Contact :</b></td>
            <td> ' . $request->input("phone") . '</td>
          </tr>
          <tr>
            <td><b>Email :</b></td>
            <td> ' . $request->input("email") . '</td>
          </tr>
          <tr>
            <td><b>Branch :</b></td>
            <td> ' . $request->input("branch") . ' </td>
          </tr>
          <tr>
            <td><b>Constitution :</b></td>
            <td> ' . $request->input("constitution") . ' </td>
          </tr>


          <tr>
            <td><b>Occupation :<b></td>
            <td> ' . $request->input("occupation") . ' </td>
         </tr>
          <tr>
            <td><b>About Us :<b></td>
            <td> ' . $request->input("about_us") . ' </td>
         </tr>

        </table>
      </body>
      </html>
      ';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $request->input("email") . '>' . "\r\n";
      if (mail($to, $subject, $message, $headers)) {

        return redirect()->back()->with("message", "Business Partner Request Has Been  Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " email not send!!");
       }
        // Always set content-type when sending HTML email

    }
    public function FixedDepositEnqSave(Request $request)
    {

        $loanreq = new FixedDepositEnq;
        $loanreq->name = $request->input("name");
        $loanreq->email = $request->input("email");
        $loanreq->phone = $request->input("phone");
        $loanreq->branch_name = $request->input("branch");
        $loanreq->fd_amount = $request->input("amount");
        $loanreq->save();
        $branch_name = $request->input("branch");
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        if($branch_name == 'Agra')
        {
             $to = 'bm_agra@cbhfl.com,';
             //$to = 'bit16cs51@bit.ac.in';
        }
        elseif($branch_name == 'Banglore'){
            $to = 'bm_bangalore@cbhfl.com,';
        }
        elseif($branch_name == 'Bopal'){
            $to = 'bm_bhopal@cbhfl.com,';
        }
        elseif($branch_name == 'Bilaspur'){
            $to = 'bm_bilaspur@cbhfl.com,';
        }
        elseif($branch_name == 'Delhi'){
            $to = 'bm_delhi@cbhfl.com,';
        }
        elseif($branch_name == 'Gwalior'){
            $to = 'bm_gwalior@cbhfl.com,';
        }
        elseif($branch_name == 'Indore'){
            $to = 'bm_indore@cbhfl.com,';
        }
        elseif($branch_name == 'Jabalpur'){
            $to = 'bm_jabalpur@cbhfl.com,';
        }
        elseif($branch_name == 'Jaipur'){
            $to = 'bm_jaipur@cbhfl.com,';
        }
        elseif($branch_name == 'Lucknow'){
            $to = 'bm_lucknow@cbhfl.com,';
        }
        elseif($branch_name == 'Mumbai'){
            $to = 'bm_mumbai@cbhfl.com,';
        }
        elseif($branch_name == 'Nagpur'){
            $to = 'bm_nagpur@cbhfl.com,';
        }
        elseif($branch_name == 'Nashik'){
            $to = 'bm_nashik@cbhfl.com,';
        }
        elseif($branch_name == 'Panchkula'){
            $to = 'bm_panchkula@cbhfl.com,';
        }
        elseif($branch_name == 'Raipur'){
            $to = 'bm_raipur@cbhfl.com,';
        }
        elseif($branch_name == 'Surat'){
            $to = 'bm_surat@cbhfl.com,';
        }
        elseif($branch_name == 'Varodara'){
            $to = 'bm_vadodara@cbhfl.com,';
        }
      //  customercare@cbhfl.com
         $to .= 'lead@cbhfl.com';
        // $to = 'bit16cs51@bit.ac.in';
      $subject = 'Cent Bank - Fixed Deposit Enquiry Form';
      $message = "";
      $message .= '
      <html>
      <head>
        <title>Cent Bank - Fixed Deposit Enquiry Form </title>
      </head>
      <body>
        <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
        <table>

          <tr>
            <td><b>Name:</b></td>
            <td> '.$name.' </td>
          </tr>
          <tr>
            <td><b>Name of Branch :</b></td>
            <td> '.$branch_name.' </td>
          </tr>
          <tr>
            <td><b>Mobile Number:</b></td>
            <td> '.$phone.'</td>
          </tr>
          <tr>
            <td><b>Email id :</b></td>
            <td> '.$email.' </td>
          </tr>
    <tr>
    <td><b>Fixed Deposit Amount :</b></td>
    <td> ' . $request->input("amount") . ' </td>
  </tr>



        </table>
      </body>
      </html>
      ';

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


      $headers .= 'From: <'.$email.'>' . "\r\n";
         if (mail($to, $subject, $message, $headers)) {

        return redirect()->back()->with("message", "Fixed Deposit Enquiry Has Been  Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " email not send!!");
       }

    }

    public function contactSave(Request $request)
    {
        $contactus = new Contact;
        $contactus->name = $request->input("fname");
        $contactus->email = $request->input("email");
        $contactus->subject = $request->input("subject");
        $contactus->message = $request->input("msg");
        $contactus->branch = $request->input("branch");
        $contactus->save();

               $branch_name = $request->input("branch");
               $name = $request->input("fname");
               $email = $request->input("email");
               $subject = $request->input("subject");
               $msg = $request->input("msg");
        // e-mail
      if($branch_name == 'Agra')
  {
      // $to = 'bm_agra@cbhfl.com,';
     $to = 'bit16cs51@bit.ac.in';
  }
  elseif($branch_name == 'Banglore'){
      $to = 'bm_bangalore@cbhfl.com,';
  }
  elseif($branch_name == 'Bopal'){
      $to = 'bm_bhopal@cbhfl.com,';
  }
  elseif($branch_name == 'Bilaspur'){
      $to = 'bm_bilaspur@cbhfl.com,';
  }
  elseif($branch_name == 'Delhi'){
      $to = 'bm_delhi@cbhfl.com,';
  }
  elseif($branch_name == 'Gwalior'){
      $to = 'bm_gwalior@cbhfl.com,';
  }
  elseif($branch_name == 'Indore'){
      $to = 'bm_indore@cbhfl.com,';
  }
  elseif($branch_name == 'Jabalpur'){
      $to = 'bm_jabalpur@cbhfl.com,';
  }
  elseif($branch_name == 'Jaipur'){
      $to = 'bm_jaipur@cbhfl.com,';
  }
  elseif($branch_name == 'Lucknow'){
      $to = 'bm_lucknow@cbhfl.com,';
  }
  elseif($branch_name == 'Mumbai'){
      $to = 'bm_mumbai@cbhfl.com,';
  }
  elseif($branch_name == 'Nagpur'){
      $to = 'bm_nagpur@cbhfl.com,';
  }
  elseif($branch_name == 'Nashik'){
      $to = 'bm_nashik@cbhfl.com,';
  }
  elseif($branch_name == 'Panchkula'){
      $to = 'bm_panchkula@cbhfl.com,';
  }
  elseif($branch_name == 'Raipur'){
      $to = 'bm_raipur@cbhfl.com,';
  }
  elseif($branch_name == 'Surat'){
      $to = 'bm_surat@cbhfl.com,';
  }
  elseif($branch_name == 'Varodara'){
      $to = 'bm_vadodara@cbhfl.com,';
  }

 //$to .= 'customercare@cbhfl.com';
 $to .= 'donotdistubs@gmail.com';


$subject = 'Cent Bank - Contact Us';
$message = "";
$message .= '
<html>
<head>
  <title>Cent Bank</title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
    <tr>
      <td><b>Name :</b></td>
      <td> '.$name.' </td>
    </tr>
    <tr>
      <td><b>Email :</b></td>
      <td> '.$email.'</td>
    </tr>
    <tr>
      <td><b>Subject :</b></td>
      <td> '.$subject.' </td>
    </tr>

    <tr>
      <td><b>Branch :</b></td>
      <td> '.$branch_name.' </td>
    </tr>
    <tr>
      <td><b>Message :<b></td>
      <td> '.$msg.' </td>
   </tr>

  </table>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .= 'From: <'.$email.'>' . "\r\n";
 mail($to, $subject, $message, $headers);

// Always set content-type when sending HTML email
         if (mail($to, $subject, $message, $headers)) {

        return redirect()->back()->with("message", "Contact Us Request has Been Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " There was an error in sending your information.Please contact us on our phone Nos");
       }

    }

    public function TendorRequestSave(Request $request)
    {
        $tenderreq = new TenderRequest;
        $tenderreq->company_name = $request->input("cname");
        $tenderreq->name = $request->input("name");
        $tenderreq->email = $request->input("email");
        $tenderreq->phone = $request->input("phone");
        $tenderreq->save();


   // $to = 'bit16cs51@bit.ac.in';
    $to = 'pankaj.kumar@cbhfl.com';
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
      <td> ' . $request->input("cname") . ' </td>
    </tr>
    <tr>
      <td><b>Contact Name:</b></td>
      <td> ' . $request->input("name") . ' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> ' . $request->input("phone") . '</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> ' . $request->input("email") . ' </td>
    </tr>




  </table>
</body>
</html>
';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <' . $request->input("email") . '>' . "\r\n";
       if (mail($to, $subject, $message, $headers)) {

     return redirect()->back()->with("message", "Tender Request has been  Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " email not send!!");
       }


    }

    public function ECSNACHCANCELSAVE(Request $request)
    {

        $ecsNachcancel = new EcsNachCancel;

        if($request->hasFile('fileToUpload'))
        {
         $file = $request->file('fileToUpload');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('admin_assets/uploads/sign/',$filename);
         $ecsNachcancel->sign = $filename;

        }
        if($request->hasFile('fileToUpload1'))
        {
         $file = $request->file('fileToUpload1');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('admin_assets/uploads/cosign/',$filename);
         $ecsNachcancel->cosign = $filename;

        }
        $ecsNachcancel->borrower_name = $request->input("borrower_name");
        $ecsNachcancel->contact = $request->input("mobile_no");
        $ecsNachcancel->email = $request->input("email");
        $ecsNachcancel->address = $request->input("address");
        $ecsNachcancel->loan_ac_no = $request->input("loan_ac_no");
        $ecsNachcancel->umr_no = $request->input("umr_no");
        $ecsNachcancel->branch_name = $request->input("branch_name");
        $ecsNachcancel->ecs_amount = $request->input("ecs_amount");
        $ecsNachcancel->ecs_clearing_date = $request->input("clearing_date");
        $ecsNachcancel->cancellation_reason = $request->input("cancellation_reason");
        $ecsNachcancel->status = $request->input("status");
        $ecsNachcancel->isdate = $request->input("date");
        $ecsNachcancel->save();

               $branch_name = $request->input("branch_name");
               $name = $request->input("borrower_name");
               $email = $request->input("email");
        // e-mail
      if($branch_name == 'Agra')
  {
       $to = 'bm_agra@cbhfl.com,';
    // $to = 'bit16cs51@bit.ac.in';
  }
  elseif($branch_name == 'Banglore'){
      $to = 'bm_bangalore@cbhfl.com,';
  }
  elseif($branch_name == 'Bopal'){
      $to = 'bm_bhopal@cbhfl.com,';
  }
  elseif($branch_name == 'Bilaspur'){
      $to = 'bm_bilaspur@cbhfl.com,';
  }
  elseif($branch_name == 'Delhi'){
      $to = 'bm_delhi@cbhfl.com,';
  }
  elseif($branch_name == 'Gwalior'){
      $to = 'bm_gwalior@cbhfl.com,';
  }
  elseif($branch_name == 'Indore'){
      $to = 'bm_indore@cbhfl.com,';
  }
  elseif($branch_name == 'Jabalpur'){
      $to = 'bm_jabalpur@cbhfl.com,';
  }
  elseif($branch_name == 'Jaipur'){
      $to = 'bm_jaipur@cbhfl.com,';
  }
  elseif($branch_name == 'Lucknow'){
      $to = 'bm_lucknow@cbhfl.com,';
  }
  elseif($branch_name == 'Mumbai'){
      $to = 'bm_mumbai@cbhfl.com,';
  }
  elseif($branch_name == 'Nagpur'){
      $to = 'bm_nagpur@cbhfl.com,';
  }
  elseif($branch_name == 'Nashik'){
      $to = 'bm_nashik@cbhfl.com,';
  }
  elseif($branch_name == 'Panchkula'){
      $to = 'bm_panchkula@cbhfl.com,';
  }
  elseif($branch_name == 'Raipur'){
      $to = 'bm_raipur@cbhfl.com,';
  }
  elseif($branch_name == 'Surat'){
      $to = 'bm_surat@cbhfl.com,';
  }
  elseif($branch_name == 'Varodara'){
      $to = 'bm_vadodara@cbhfl.com,';
  }

 $to .= 'customercare@cbhfl.com';
// $to .= 'donotdistubs@gmail.com';


$subject = 'Cent Bank - Contact Us';
$message = "";
$message .= '
<html>
<head>
  <title>Cent Bank</title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
    <tr>
      <td><b>Name :</b></td>
      <td> '.$name.' </td>
    </tr>
    <tr>
      <td><b>Email :</b></td>
      <td> '.$email.'</td>
    </tr>
    <tr>
      <td><b>Subject :</b></td>
      <td> '.$subject.' </td>
    </tr>

    <tr>
      <td><b>Branch :</b></td>
      <td> '.$branch_name.' </td>
    </tr>
    <tr>
     <td><b>Present Address :<b></td>
          <td> '.$request->input("address").' </td>
   </tr>
    <tr>
          <td><b>Loan Ac Number :<b></td>
          <td> '.$request->input("loan_ac_no").' </td>
      </tr>

        <tr>
          <td><b>UMR Number :<b></td>
          <td> '.$request->input("umr_no").' </td>
      </tr>


        <tr>
          <td><b> ECS Amount :<b></td>
          <td> '.$request->input("ecs_amount").' </td>
      </tr>

        <tr>
          <td><b> ECS Clearing Date :<b></td>
          <td> '.$request->input("clearing_date").' </td>
      </tr>


        <tr>
          <td><b> Reason for Cancellation :<b></td>
          <td> '.$request->input("cancel_reason").' </td>
      </tr>


      <tr>
          <td><b> Date :<b></td>
          <td> '.$request->input("date").' </td>
      </tr>


  </table>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";

// Always set content-type when sending HTML email
         if (mail($to, $subject, $message, $headers)) {

        return redirect()->back()->with("message", "EcsNachcancel Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " email not send!!");
       }


    }
    public function RekycOnlineFormSave(Request $request)
    {

        $rekyconline = new RekycOnline;

        if($request->hasFile('upload_image'))
        {
         $file = $request->file('upload_image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('admin_assets/uploads/upload_image/',$filename);
         $rekyconline->image = $filename;

        }
        if($request->hasFile('id_upload_doc'))
        {
         $file = $request->file('id_upload_doc');
         $ext = $file->getClientOriginalExtension();
         $filename1 = time().'.'.$ext;
         $file->move('admin_assets/uploads/id_upload_doc/',$filename1);
         $rekyconline->id_doc_img = $filename1;

        }
        if($request->hasFile('resi_upload_doc'))
        {
         $file = $request->file('resi_upload_doc');
         $ext = $file->getClientOriginalExtension();
         $filename2 = time().'.'.$ext;
         $file->move('admin_assets/uploads/resi_upload_doc/',$filename2);
         $rekyconline->residence_doc_img = $filename2;

        }
        if($request->hasFile('cus_signature'))
        {
         $file = $request->file('cus_signature');
         $ext = $file->getClientOriginalExtension();
         $filename3 = time().'.'.$ext;
         $file->move('admin_assets/uploads/cus_signature/',$filename3);
         $rekyconline->upload_sign = $filename3;

        }

        $rekyconline->branch_name = $request->input("branch_name");
        $rekyconline->customer_id = $request->input("cus_id");
        $rekyconline->customer_name = $request->input("cus_name");
        $rekyconline->account_no = $request->input("acc_no");
        $rekyconline->change_address = $request->input("box");
        $rekyconline->existing_address = $request->input("ex_add");
        $rekyconline->proposed_address = $request->input("pro_add");
        $rekyconline->ex_mobile_no = $request->input("ex_mob");
        $rekyconline->pro_mobile_no = $request->input("pro_mob");
        $rekyconline->ex_email = $request->input("ex_email");
        $rekyconline->pro_email = $request->input("pro_email");
        $rekyconline->id_doc_name = $request->input("id_doc_name");
        $rekyconline->doc_expiry_date = $request->input("expiry_date");
        $rekyconline->id_doc_no = $request->input("id_doc_no");
        $rekyconline->residence_doc_name = $request->input("resi_doc_name");
        $rekyconline->residence_doc_no = $request->input("resi_doc_no");
        $rekyconline->declaration = $request->input("declare");
        $rekyconline->date1 = $request->input("date1");
        $rekyconline->date2 = $request->input("date2");

        $rekyconline->save();
        $to       = 'dhananjay.rai@cbhfl.com';
       // $to       = 'bit16cs51@bit.ac.in';
        $subject = 'Cent Bank - CUSTOMER INFORMATION UPDATION FORM FOR RE- KYC';
        $message = "";
        $message = '
      <html>
      <head>
        <title>Cent Bank - Online Form For Re-KYC</title>
      </head>
      <body>
        <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
        <table>

          <tr>
            <td><b>Date  :</b></td>
            <td> ' . $request->input("date1") . ' </td>
          </tr>
          <tr>
            <td><b>Name of Branch :</b></td>
            <td> ' . $request->input("branch_name") . ' </td>
          </tr>
          <tr>
            <td><b>Account Number :</b></td>
            <td> ' . $request->input("acc_no") . '</td>
          </tr>
          <tr>
            <td><b>Customer ID :</b></td>
            <td> ' . $request->input("cus_id") . ' </td>
          </tr>
          <tr>
            <td><b>Name of the customer :<b></td>
            <td> ' . $request->input("cus_id") . ' </td>
         </tr>


          <tr>
            <td><b>Customer Photo :<b></td>
            <td> <a href="https://www.cbhfl.com/admin_assets/uploads/upload_image/' . $filename . '">Customer Photo</a> </td>
         </tr>

          <tr>
            <td><b>Existing Address :<b></td>
            <td> ' . $request->input("ex_add") . ' </td>
         </tr>

          <tr>
            <td><b>Existing Mobile No/phone No :<b></td>
            <td> ' . $request->input("ex_mob") . ' </td>
         </tr>


          <tr>
            <td><b>Existing E-Mail ID :<b></td>
            <td> ' . $request->input("ex_email") . ' </td>
         </tr>


          <tr>
            <td><b>Proposed  Address :<b></td>
            <td> ' . $request->input("pro_add") . ' </td>
         </tr>


          <tr>
            <td><b>Proposed  Mobile No/phone No :<b></td>
            <td> ' . $request->input("pro_mob") . ' </td>
         </tr>

          <tr>
            <td><b>Proposed E-Mail ID :<b></td>
            <td> ' . $request->input("pro_email") . ' </td>
         </tr>


          <tr>
            <td><b> Identity proof ->  Name of Document :<b></td>
            <td> ' . $request->input("id_doc_name") . ' </td>
         </tr>


          <tr>
            <td><b> Identity proof -> Document Expiry Date :<b></td>
            <td> ' . $request->input("expiry_date")  . ' </td>
         </tr>


          <tr>
            <td><b> Identity proof -> Document Number :<b></td>
            <td> ' . $request->input("id_doc_no") . ' </td>
         </tr>

          <tr>
            <td><b> Identity proof -> Upload Document :<b></td>
            <td> <a href="https://www.cbhfl.com/admin_assets/uploads/id_upload_doc/' . $filename2 . '">Upload Document</a> </td>
         </tr>


          <tr>
            <td><b> Residence proof ->  Name of Document :<b></td>
            <td> ' . $request->input("resi_doc_name") . ' </td>
         </tr>


          <tr>
            <td><b> Residence proof -> Document Number :<b></td>
            <td> ' . $request->input("resi_doc_no") . ' </td>
         </tr>

          <tr>
            <td><b> Residence proof -> Upload Document :<b></td>
            <td> <a href="https://www.cbhfl.com/admin_assets/uploads/resi_upload_doc/' . $filename2 . '">Upload Document</a> </td>
         </tr>

          <tr>
            <td><b> Submit Date :<b></td>
            <td> ' . $request->input("date2") . ' </td>
         </tr>

          <tr>
            <td><b> Submit Name :<b></td>
            <td> ' . $request->input("cus_name") . ' </td>
         </tr>


          <tr>
            <td><b> Signature of Customer :<b></td>
            <td> <a href="https://www.cbhfl.com/admin_assets/uploads/cus_signature/' . $filename3 . '">Upload Document</a></td>
         </tr>


        </table>
      </body>
      </html>
      ';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $request->input("ex_email"). '>' . "\r\n";

         if (mail($to, $subject, $message, $headers)) {

     return redirect()->back()->with("message", "Rekyc Request Has Been Submitted Successfully");
       }else{
           return redirect()->back()->with("message", " email not send!!");
       }

    }

        // Always set content-type when sending HTML email




}
