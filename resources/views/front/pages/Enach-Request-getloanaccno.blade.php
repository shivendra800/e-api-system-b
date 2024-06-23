@extends('front.layout.layouts')

@section('main_content')
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


    <div class="breadcumb-area black-opacity bg-img-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">
                        <h2>E-Nach Request Get Loan Account No List</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcumb-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>/</li>
                            <li>E-Nach Request Get Loan Account No List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->




    <!-- about-area start -->
    <div
        style="background-image: url('assets/images/about2.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row" style="border:2px solid #296dc1;">
                    <!--new form-->
                    <div class="col-md-12">
                        <br />
                        <h3 style='color:#296dc1;' class="text-center pull-center"><b>E-Nach Request Get Loan Account No List</b></h3>


                        <div class="contact-wrap form-style">
                            <div class="cf-msg"></div>
                            <div><img class="img-responsive;" src="assets/img/logo_2.png" style="height:80px;"
                                    alt=""></div>
                            <br /><br />
                            <div class="login-wrap p-4 p-lg-5">
                                
                                 <div id="otpverifydiv">
                                    <form method="post" id="form-data" enctype='multipart/form-data'
                                        action="{{ url('Enach-Request-getloanaccnosubmit') }}" >
                                        @csrf
    
                                   
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4">
                                                <div class="form-group  ">
                                                   
                                                       

                                                   <select name="loan_acc_no" id="" class="form-control" required>
                                                    <option value="">Select Loan Account No</option>
                                                    <?php foreach($data['detail'] as $country){ ?>
                                                        <option value="<?php echo $country['loan_acc_no'];?>"><?php echo $country['loan_acc_no'];?>
                                                        </option>
                                                     <?php } ?> 
                                                   </select>

                                                  
                                                    
                                                </div>
                                            </div>
                                         

                                            <div class="col-lg-4">
                                                <div class="form-group  pull-center text-center">
                                                    <button type="submit" name="submit" value="Submit"
                                                        class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                                        class="cont-submit btn-contact btn-primary pull-center">Submit</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
    
    
    
    
                                    </form>
                                </div>
                           
                             
                           

                            </div>


                        </div>
                    </div>


                    <!--end new form-->

                </div>
            </div>
        </section>
        <!-- about-area end -->





    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        
      

      
    </script>
@endsection
