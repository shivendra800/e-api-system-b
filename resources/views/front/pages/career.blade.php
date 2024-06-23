@extends('front.layout.layouts')
@section('title', 'Career')

@section('main_content')


    <!-- breadcumb-area start -->
    <div class="breadcumb-area black-opacity bg-img-16">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">

                        <h2>Career</h2>
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
                            <li>Career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcumb-area end -->
    <div
        style="background-image: url({{ asset('front_assets/images/about2.jpg') }});  background-repeat: no-repeat; background-size: cover; height: 100%;">
        <br>
        <br>
        <!--about-area start -->

        <!--<marquee >-->
        <!--<b style=background-color:red;"> Result For The Post Of Chief Risk Officer Declared </marquee>-->
        <section class="service-area pb-140">
            <h2 style="color:#296dc1; text-align:center;"><b>Career</b></h2>
            <br>
            <!--<div class="container">-->
            <!--    <div class="row">-->
            <!--        <div class="col-md-12">-->
            <!--            <div class="table-responsive">-->


            <!--                <table border="2px" style="padding: 5px; width: 100%">-->
            <!--                    <thead style="background-color:#296dc1; color:#FFFFFF;">-->
            <!--                        <tr style="background-color:#000000;">-->
            <!--                            <th width="60px">Sl No.</th>-->
            <!--                            <th class="text-center">Job Title</th>-->
            <!--                            <th>Start Date</th>-->
            <!--                            <th>End Date</th>-->
            <!--                            <th>Action</th>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td>1</td>-->
            <!--                            <td><b>RECRUITMENT OF SENIOR MANAGER</b>-->
            <!--                            </td>-->
            <!--                            <td>26/09/2023</td>-->
            <!--                            <td>15/10/2023</td>-->
            <!--                            <td><a href="{{ url('/') }}/pdf/UPLOAD SENIOR MANAGER.pdf" target="_blank" style="font-size:19px;color:#FFFFFF; "><i class="fa fa-file-pdf-o" style="font-size:19px;color:#FFFFFF; ">&nbsp;</i> Apply</a></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td>2</td>-->
            <!--                            <td><b>RECRUITMENT OF MANAGER</b>-->
            <!--                            </td>-->
            <!--                          <td>26/09/2023</td>-->
            <!--                            <td>15/10/2023</td>-->
            <!--                            <td><a href="{{ url('/') }}/pdf/UPLOAD MANAGER.pdf" target="_blank" style="font-size:19px;color:#FFFFFF; "><i class="fa fa-file-pdf-o" style="font-size:19px;color:#FFFFFF; ">&nbsp;</i> Apply</a></td>-->
            <!--                        </tr>-->
            <!--                    <tr>-->
            <!--                            <td>3</td>-->
            <!--                            <td><b>RECRUITMENT OF MANAGER - LAW</b>-->
            <!--                            </td>-->
            <!--                           <td>26/09/2023</td>-->
            <!--                            <td>15/10/2023</td>-->
            <!--                            <td><a href="{{ url('/') }}/pdf/UPLOAD MANAGER LAW.pdf" target="_blank" style="font-size:19px;color:#FFFFFF; "><i class="fa fa-file-pdf-o" style="font-size:19px;color:#FFFFFF; ">&nbsp;</i> Apply</a></td>-->
            <!--                        </tr>-->

            <!--                            <tr>-->
            <!--                            <td>4</td>-->
            <!--                            <td><b>RECRUITMENT OF ASSISTANT MANAGER</b>-->
            <!--                            </td>-->
            <!--                           <td>26/09/2023</td>-->
            <!--                            <td>15/10/2023</td>-->
            <!--                            <td><a href="{{ url('/') }}/pdf/UPLOAD ASSTT MANAGER.pdf" target="_blank" style="font-size:19px;color:#FFFFFF; "><i class="fa fa-file-pdf-o" style="font-size:19px;color:#FFFFFF; ">&nbsp;</i> Apply</a></td>-->
            <!--                        </tr>-->



            <!--                    </thead>-->
            <!--                </table>-->



            <!--            </div>-->

            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">


                            <table border="2px" style="padding: 5px; width: 100%">
                                <thead style="background-color:#296dc1; color:#FFFFFF;">
                                    <tr style="background-color:#000000;">
                                        <th width="60px">Sl No.</th>
                                        <th class="text-center">Job Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Recruitment for the post of Company Secretary</b>
                                        </td>
                                        <td><b>21/12/2023</b></td>
                                        <td><b> 05/01/2024</b></td>
                                        <td>
                                            <a href="{{ url('/') }}/front_assests/pdf/Notification CS Updated.pdf" target="_blank"
                                                style="font-size:19px;color:#FFFFFF; "><i class="fa fa-file-pdf-o"
                                                    style="font-size:19px;color:#FFFFFF; ">&nbsp;</i> NOTIFICATION </a>
                                            <br>
                                        </td>
                                    </tr>




                                </thead>
                            </table>



                        </div>

                    </div>
                </div>
            </div>
            <br>

        </section>
        <!-- about-area end -->

    </div>


    <!--<div id="myModal" class="modal fade pull-center text-center">-->
    <!--    <style>-->
    <!--        .popup_2 {-->
    <!--    position: relative;-->
    <!--}-->
    <!--.modal-dialog {-->
    <!--    margin: auto !important;-->
    <!--}-->
    <!--    </style>-->
    <!--    <div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">-->

    <!--<div class="modal-content"  >-->
    <!--<div class="modal-header">-->

    <!--</div>-->
    <!--<div class="modal-body" style="width:400px;">-->
    <!--                <div class="popup_2">-->
    <!--                <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;width: 35px;height: 35px;background: #000;opacity: 1;border-radius: 0px 0px 0px 10px;"><i class="fa fa-times" style="font-size: 18px;color:white;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;margin-top: -2px;" aria-hidden="true"></i></span>-->
    <!--				 <img src="assets/IMG-20230110-WA0000.jpg" class="img-responsive" style="max-height:500px;height:100%;">-->
    <!--				 </div>-->
    <!--</di.v>-->
    <!--</div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<script>
        -- >
        <
        !--$(document).ready(function() {
            -- >
            <
            !--$("#myModal").modal('show');
            -- >
            <
            !--
        });
        -- >
        <
        !--
    </script>-->

@endsection
