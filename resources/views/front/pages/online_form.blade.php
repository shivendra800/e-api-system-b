@extends('front.layout.layouts')
@section('title', 'online-form')

@section('main_content')

<?php



if (isset($_POST['submit'])) {

  $branch_name    = $_POST['branch_name'];
  $acc_no         = $_POST['acc_no'];
  $cus_id         = $_POST['cus_id'];
  $cus_name       = $_POST['cus_name'];

  $upload_image   = $_FILES['upload_image']['tmp_name'];
  $upload_image1  = $_FILES['upload_image']['name'];

  $box            = $_POST['box'];
  $ex_add         = $_POST['ex_add'];
  $pro_add        = $_POST['pro_add'];
  $ex_mob         = $_POST['ex_mob'];
  $pro_mob        = $_POST['pro_mob'];
  $ex_email       = $_POST['ex_email'];
  $pro_email      = $_POST['pro_email'];
  $id_doc_name    = $_POST['id_doc_name'];
  $expiry_date    = $_POST['expiry_date'];
  $id_doc_no      = $_POST['id_doc_no'];

  $id_upload_doc  = $_FILES['id_upload_doc']['tmp_name'];
  $id_upload_doc1 = $_FILES['id_upload_doc']['name'];

  $resi_doc_name  = $_POST['resi_doc_name'];
  $resi_doc_no    = $_POST['resi_doc_no'];

  $resi_upload_doc = $_FILES['resi_upload_doc']['tmp_name'];
  $resi_upload_doc1 = $_FILES['resi_upload_doc']['name'];

  $declare       = $_POST['declare'];
  $sign          = $_POST['sign'];

  $upload_sign   = $_FILES['cus_signature']['tmp_name'];
  $upload_sign1  = $_FILES['cus_signature']['name'];

  $date1         = $_POST['date1'];
  $date2         = $_POST['date2'];


  $img_upload1   = move_uploaded_file($upload_image, "uploads/" . $upload_image1);
  $img_upload2 = move_uploaded_file($id_upload_doc, "uploads/" . $id_upload_doc1);
  $img_upload3  = move_uploaded_file($resi_upload_doc, "uploads/" . $resi_upload_doc1);
  $img_upload4 = move_uploaded_file($upload_sign, "uploads/" . $upload_sign1);

  $insert_query = mysqli_query($con, "insert into  rekyc_online(branch_name, account_no, customer_id, customer_name, image, change_address, existing_address, proposed_address, ex_mobile_no, pro_mobile_no, ex_email, pro_email, id_doc_name, doc_expiry_date, id_doc_no, id_doc_img, residence_doc_name, residence_doc_no, residence_doc_img, declaration, signature, upload_sign, date1, date2) values('$branch_name','$acc_no', '$cus_id', '$cus_name','$upload_image1','$box', '$ex_add', '$pro_add', '$ex_mob', '$pro_mob', '$ex_email', '$pro_email', '$id_doc_name','$expiry_date', '$id_doc_no', '$id_upload_doc1', '$resi_doc_name', '$resi_doc_no', '$resi_upload_doc1','$declare', '$sign','$upload_sign1', '$date1', '$date2')");


  $to       = 'dhananjay.rai@cbhfl.com';
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
      <td> ' . $date1 . ' </td>
    </tr>
    <tr>
      <td><b>Name of Branch :</b></td>
      <td> ' . $branch_name . ' </td>
    </tr>
    <tr>
      <td><b>Account Number :</b></td>
      <td> ' . $acc_no . '</td>
    </tr>
    <tr>
      <td><b>Customer ID :</b></td>
      <td> ' . $cus_id . ' </td>
    </tr>
    <tr>
      <td><b>Name of the customer :<b></td>
      <td> ' . $cus_name . ' </td>
   </tr>

    
    <tr>
      <td><b>Customer Photo :<b></td>
      <td> <a href="https://www.cbhfl.com/uploads/' . $upload_image1 . '">Customer Photo</a> </td>
   </tr>
   
    <tr>
      <td><b>Existing Address :<b></td>
      <td> ' . $ex_add . ' </td>
   </tr>
   
    <tr>
      <td><b>Existing Mobile No/phone No :<b></td>
      <td> ' . $ex_mob . ' </td>
   </tr>
   
   
    <tr>
      <td><b>Existing E-Mail ID :<b></td>
      <td> ' . $ex_email . ' </td>
   </tr>
   
   
    <tr>
      <td><b>Proposed  Address :<b></td>
      <td> ' . $pro_add . ' </td>
   </tr>
   
   
    <tr>
      <td><b>Proposed  Mobile No/phone No :<b></td>
      <td> ' . $pro_mob . ' </td>
   </tr>
   
    <tr>
      <td><b>Proposed E-Mail ID :<b></td>
      <td> ' . $pro_email . ' </td>
   </tr>
   
   
    <tr>
      <td><b> Identity proof ->  Name of Document :<b></td>
      <td> ' . $id_doc_name . ' </td>
   </tr>
   
   
    <tr>
      <td><b> Identity proof -> Document Expiry Date :<b></td>
      <td> ' . $expiry_date . ' </td>
   </tr>
   
   
    <tr>
      <td><b> Identity proof -> Document Number :<b></td>
      <td> ' . $id_doc_no . ' </td>
   </tr>
   
    <tr>
      <td><b> Identity proof -> Upload Document :<b></td>
      <td> <a href="https://www.cbhfl.com/uploads/' . $id_upload_doc1 . '">Upload Document</a> </td>
   </tr>
   
   
    <tr>
      <td><b> Residence proof ->  Name of Document :<b></td>
      <td> ' . $resi_doc_name . ' </td>
   </tr>
   
   
    <tr>
      <td><b> Residence proof -> Document Number :<b></td>
      <td> ' . $resi_doc_no . ' </td>
   </tr>
   
    <tr>
      <td><b> Residence proof -> Upload Document :<b></td>
      <td> <a href="https://www.cbhfl.com/uploads/' . $resi_upload_doc1 . '">Upload Document</a> </td>
   </tr>
   
    <tr>
      <td><b> Submit Date :<b></td>
      <td> ' . $date2 . ' </td>
   </tr>
   
    <tr>
      <td><b> Submit Name :<b></td>
      <td> ' . $sign . ' </td>
   </tr>
   
   
    <tr>
      <td><b> Signature of Customer :<b></td>
      <td> <a href="https://www.cbhfl.com/uploads/' . $upload_sign1 . '">Upload Document</a></td>
   </tr>
   
   
  </table>
</body>
</html>
';

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <' . $ex_email . '>' . "\r\n";

  // Always set content-type when sending HTML email

  if ($insert_query) {
    if (mail($to, $subject, $message, $headers)) {
      echo '<script>alert("Re-KYC Form Submit successfully");</script>';
      header('location:online-form.php');
    }
  } else {
    echo "<script>alert('Failed! Please Try Again');window.location.href='online-form.php'</script>";
  }
}
?>
<style>
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }


    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    textarea {
        resize: none;
    }
</style>

<!-- heared area end -->
<!-- breadcumb-area start -->

<div class="breadcumb-area black-opacity bg-img-10">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Online Form for Re-KYC</h2>
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
                        <li>Online Form for Re-KYC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->




<!-- about-area start -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <section class="about-area ptb-140">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <form method="post" enctype='multipart/form-data' style="border:1px solid black;" action="{{ url('rekyc-online-formSave') }}">
                      @csrf
                        <div class="container">

                            <div><img class="img-responsive;" src="{{ url('front_assests/img/new logo without marathi.jpeg') }}" style="height: 99px;width: 30%;" alt=""></div>
                            <br>
                            <div>
                                <h4 style="text-align:center;"><b>CUSTOMER INFORMATION UPDATION FORM FOR RE- KYC</b></h4>
                            </div>

                            Date : <input type="date" style="border:none;" required name="date1" id="date1">
                            <div class="row">
                                <div class="col-md-9">

                                    <div class="table-responsive">
                                        <table class="table">

                                            <tbody>
                                                <tr>
                                                    <th style="text-align:center;">Name of Branch </th>
                                                    <!--<td><input type="text" name="branch_name" id="branch_name" required /></td>-->
                                                    <td><textarea name="branch_name" id="branch_name" rows="1" cols="40" required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center;">Account Number</th>
                                                    <!--<td><input type="text" name="acc_no" id="acc_no" required /></td>-->
                                                    <td><textarea name="acc_no" id="acc_no" rows="1" cols="40" required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center;">Customer ID </th>
                                                    <!--<td><input type="text" name="cus_id" id="cus_id" required /></td>-->
                                                    <td><textarea name="cus_id" id="cus_id" rows="1" cols="40" required></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center;">Name of the customer </th>
                                                    <!--<td><input type="text" name="cus_name" id="cus_name" required /></td>-->
                                                    <td><textarea rows="1" cols="40" name="cus_name" id="cus_name" required /></textarea> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3" style="border:none; height:165px; width:20%;">

                                    <img src="{{ url('front_assests/images/customer.jpg') }}" height="100" width="150">
                                    <input type="file" name="upload_image" id="upload_image" style="width:150px;" required />

                                </div>
                            </div>

                            <br>
                            <p><i class="fa fa-check"></i><b> Please appropriate box below </b></p>
                            <p> A. <input type="radio" name="box" id="box"> There is no change in my address </p>
                            <p> B. <input type="radio" name="box" id="box"> I wish to change my address/contact detail as below </p>
                            <br>
                            <div class="table-responsive">
                                <table class="table" style="width:97%;">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Existing</th>
                                            <th>Proposed (if B is selected)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="text-align:center;">Address </th>
                                            <td><textarea name="ex_add" id="ex_add" rows="2" cols="40" required></textarea></td>
                                            <td><textarea name="pro_add" id="pro_add" rows="2" cols="40"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;">Mobile No/phone No
                                            </th>
                                            <!--<td><input type="text" name="ex_mobile" id="ex_mobile"></td>-->
                                            <!--<td><input type="text" name="pro_mobile" id="pro_mobile"></td>-->
                                            <td><textarea name="ex_mob" id="ex_mobile" rows="1" cols="40" required></textarea></td>
                                            <td><textarea name="pro_mob" id="pro_mobile" rows="1" cols="40"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;">E-Mail ID </th>
                                            <!--<td><input type="text" name="ex_email" id="ex_email"></td>-->
                                            <!--<td><input type="text" name="pro_email" id="pro_email"></td>-->
                                            <td><textarea name="ex_email" id="ex_email" rows="1" cols="40" required></textarea></td>
                                            <td><textarea name="pro_email" id="pro_email" rows="1" cols="40"></textarea></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>

                            <h5><b>I hereby submit self- attested copy of the following documents:</b></h5>
                            <br>
                            <div class="table-responsive">
                                <table class="table" style="width:97%;">
                                    <thead>
                                        <tr>
                                            <th>Type of Document </th>
                                            <th>Name of Document </th>
                                            <th>Document Expiry Date</th>
                                            <th>Document Number</th>
                                            <th>Upload Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Identity proof </th>
                                            <!--<td><input type="text" name="id_doc_name" id="id_doc_name" required></td>-->
                                            <td><select name="id_doc_name" id="id_doc_name" required style="width:200px;">
                                                    <option value="">--Select--</option>
                                                    <option value="Aadhaar">Aadhaar</option>
                                                    <option value="Pan-card">Pan Card</option>
                                                    <option value="Job-card">Job Card</option>
                                                    <option value="Passport">Passport</option>
                                                    <option value="Voter-id-card">Voter ID Card</option>
                                                    <option value="Driving-license"> Driving License</option>
                                                </select></td>
                                            <!--<td><input type="text" name="id_doc_no" id="id_doc_no" required></td>-->
                                            <td><input type="date" name="expiry_date"></td>
                                            <td><textarea rows="1" cols="25" name="id_doc_no" id="id_doc_no" required /></textarea> </td>
                                            <td><input type="file" name="id_upload_doc" id="id_upload_doc" required></td>
                                        </tr>
                                        <tr>
                                            <th>Residence proof</th>
                                            <!--<td><input type="text" name="resi_doc_name" id="resi_doc_name" required></td>-->
                                            <!--<td><input type="text" name="resi_doc_no" id="resi_doc_no" required></td>-->
                                            <td><select name="resi_doc_name" id="resi_doc_name" required style="width:200px;">
                                                    <option value="">--Select--</option>
                                                    <option value="Aadhaar">Aadhaar</option>
                                                    <!--<option value="Pan-card">Pan Card</option>-->
                                                    <option value="Job-card">Job Card</option>
                                                    <option value="Passport">Passport</option>
                                                    <option value="Voter-id-card">Voter ID Card</option>
                                                    <option value="Driving-license"> Driving License</option>
                                                </select></td>
                                            <td></td>
                                            <td><textarea name="resi_doc_no" id="resi_doc_no" rows="2" cols="25" required></textarea></td>
                                            <td><input type="file" name="resi_upload_doc" id="resi_upload_doc" required accept="image/*"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>

                            <h5><input type="checkbox" name="declare" id="declare" required><b> I do hereby declare that the information provided above with respect to my account is up to date and correct.</b></h5>
                            <br>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <p><b>Date: </b> <input type="date" class="form-contorl" style="border:none;" name="date2" id="date2" required /></p>
                                        </div>
                                        <div class="form-group">

                                            <p><b>Name: </b><textarea class="form-contorl" rows="2" cols="4" name="sign" id="sign" required style="border:none;resize:none;height:30px;width:200px;"></textarea></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3">
                                        <b style="">(signature of customer)</b>
                                        <br>
                                        <input type="file" name="cus_signature" id="cus_signature" accept="image/*" style="" required />
                                    </div>
                                </div>
                            </div>
                            <!--<br>-->

                            <!--<br>-->
                            <!--<hr>-->
                            <h5><b>FOR OFFICE USE: - List of OVDs as per RBI/NHB </b></h5>
                            <table class="table" style="width:97%;">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>KYC Documents (officially valid as per RBI/NHB) </th>
                                        <th>Identity proof</th>
                                        <th>Address proof</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Passport</td>
                                        <td>YES</td>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Driving License </td>
                                        <td>YES</td>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Voters ID card</td>
                                        <td>YES</td>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Aadhaar</td>
                                        <td>YES</td>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Job card by NAREGA duly signed by an offer of the state government</td>
                                        <td>YES</td>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>PAN Card</td>
                                        <td>YES</td>
                                        <td>NO</td>
                                    </tr>

                                </tbody>
                            </table>
                            <p style="color:white;"><b>NOTE : </b>- <br><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> If the customer proposes to give correspondence address different from above said OVDs document/s, a self declared
                                correspondence address to be accepted with positive confirmation by the Branch

                                <br /><i class="fa fa-angle-double-right" style="color:white;font-size:18pt;"></i> Form will be accepted, subject to signature verification from specimen and KYC documents submitted.
                            </p>
                            <br>
                            <div class="col-md-12 pull-center text-center">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-responsive" style="width:150px; height:50px;">
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->


</div>



<!------- Backend Code -------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#id_doc_name').on('change', function() {
            var value = $(this).val();
            //   alert(value);
            //   $("#id_doc_name").datepicker();
        });
    });
</script>
@endsection