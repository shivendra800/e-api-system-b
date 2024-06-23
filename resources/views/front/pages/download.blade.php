@extends('front.layout.layouts')
@section('title', 'Downloads')

@section('main_content')
<!-- heared area end -->

@php
    use App\Models\PolicyOtherDoc;

    $getpolicy = PolicyOtherDoc::where('type','File')->where('other_type','Policy')->get()->toArray();
    $getOtherDocuments= PolicyOtherDoc::where('type','File')->where('other_type','Other Documents')->get()->toArray();
    $getOtherDocumentsModel= PolicyOtherDoc::where('type','Model')->where('other_type','Other Documents')->get()->toArray();


@endphp


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Downloads</h2>
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
                        <li>Downloads</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->


    <section class="service-area pb-140"><br />
        <!--<h2 style="color:#296dc1; text-align:center;"><b>Downloads</b></h2>-->
        <!--<br>-->
        <div class="container">
            <div class="row">
                <!--other section -->
                <div class="col-md-5" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Policy</b></h3>
                    <hr>
                    <ul style="color:white;">
                        @foreach ($getpolicy as $index=>$polfile )
                        <a href="{{ $polfile['download_file'] }}" target="_blank" style="color:#296dc1;">
                            <li style="color:white;">{{ $index+1 }}. {{ $polfile['title'] }}</li>
                        </a>
                        @endforeach


                    </ul>
                    <br>
                    <br>
                </div>

                <div class="col-md-2"></div>
                <div class="col-md-5" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Other Documents</b></h3>
                    <hr>
                    <ul style="color:white;">
                        @foreach ($getOtherDocuments as $index=>$Othfile )



                        <a href="{{ $Othfile['download_file'] }}" target="_blank" style="color:#296dc1;">
                            <li style="color:white;">{{ $index+1 }}. {{ $Othfile['title'] }}</li>
                        </a>


                        @endforeach
                        @foreach ($getOtherDocumentsModel as $getnod )
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-target-id="{{ $getnod['id'] }}" data-target-date="{{ $getnod['date'] }}">
                            <li style="color:white;">{{ $index+2 }}. {{ $getnod['title'] }}</li>
                        </a>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#296dc1;color:white;">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style='color:white;text-align:center;'><b>Range of APR and RoI as on {{$getnod['date']}}</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">




                    <h4 style='color:white;text-align:center;'><b>Range of RoI</b></h4>
                    <table class="table table-border" style="border:1px solid white">
                        <thead>
                            <tr>
                                
                                <th scope="col"></th>
                                <th scope="col">Minimum</th>
                                <th scope="col">Maximum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Housing</td>
                                <td>{{ $getnod['hou_minimum'] }}</td>
                                <td>{{$getnod['hou_maximum']}} </td>
                            </tr>
                            <tr>
                                <td>Non-housing</td>
                                <td>{{$getnod['non_minimum']}}</td>
                                <td>{{$getnod['non_maximum']}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 style='color:white;text-align:center;'><b>Average RoI </b></h4>
                    <table class="table table-border" style="border:1px solid white">

                        <tbody>
                            <tr>
                                <td>Housing</td>
                                <td colspan="2">{{$getnod['average_roI_hous']}}</td>
                            </tr>
                            <tr>
                                <td>Non-housing</td>
                                <td colspan="2">{{$getnod['averageroInonhous']}}</td>
                            </tr>
                        </tbody>
                    </table>



                </div>


                <div class="row">
                    <!--<div class="col-md-1"></div>-->

                    <div class="col-md-12">
                        <p style='color:white;margin-left:38%;font-size:20px;'><b>APR Calculator</b></p>
                        <br>
                        <table class="table table-border" style="border:0px solid white">

                            <tbody>
                                <tr>
                                    <td>APR Calculator Format</td>
                                    <td colspan="2"><a href="{{url('/')}}/front_assests/pdf/APR- CALCULATOR.xlsx" style="color:white;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:white;"></i></a></td>
                                </tr>

                            </tbody>
                        </table>



                        <h4 id="text" style="color:#296dc1;background:white;"></h4><br>
                    </div>
                    <!--<div class="col-md-1"></div>-->


                </div>

                <div class="row">
                    <!--<div class="col-md-1"></div>-->

                    <div class="col-md-12">
                        <p style='color:white;'><b>Note:</b></p>
                        <ul>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> The APR depends on various factors like rate of interest, processing fee etc. This calculator is provided to compute annualized credit cost which includes rate of interest and charges, applicable at the time of loan processing.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> The APR calculator does not include charges like stamp duty, prepayment charges, CERSAI charges etc.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> To calculate APR, please provide input for Loan Amount in INR, Tenure in months, rate of interest (without %) and processing fee of your Loan.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> Basis the four fields, calculator will show the APR in output field.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> You need to use the calculator without making any changes to the calculator. CBHFL shall not be responsible for any output produced due to changes in the calculator or incorrect input.</li>
                        </ul>

                    </div>
                    <!--<div class="col-md-1"></div>-->


                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>
                        @endforeach



                    </ul>
                    <br>
                </div>


            </div>
        </div>
    </section>
    <!-- about-area end -->
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" >-->
    <!--Launch demo modal-->
    <!--</button>-->


    <!--.service-area start -->

</div>
<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#296dc1;color:white;">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style='color:white;text-align:center;'><b>Range of APR and RoI as on 30.09.2023</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">




                    <h4 style='color:white;text-align:center;'><b>Range of RoI</b></h4>
                    <table class="table table-border" style="border:1px solid white">
                        <thead>
                            <tr>
                                
                                <th scope="col"></th>
                                <th scope="col">Minimum</th>
                                <th scope="col">Maximum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Housing</td>
                                <td>9.95%</td>
                                <td>11.15% </td>
                            </tr>
                            <tr>
                                <td>Non-housing</td>
                                <td>10.45%</td>
                                <td>12.65%</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 style='color:white;text-align:center;'><b>Average RoI </b></h4>
                    <table class="table table-border" style="border:1px solid white">

                        <tbody>
                            <tr>
                                <td>Housing</td>
                                <td colspan="2">10.28%</td>
                            </tr>
                            <tr>
                                <td>Non-housing</td>
                                <td colspan="2">11.74%</td>
                            </tr>
                        </tbody>
                    </table>



                </div>


                <div class="row">
                    <!--<div class="col-md-1"></div>-->

                    <div class="col-md-12">
                        <p style='color:white;margin-left:38%;font-size:20px;'><b>APR Calculator</b></p>
                        <br>
                        <table class="table table-border" style="border:0px solid white">

                            <tbody>
                                <tr>
                                    <td>APR Calculator Format</td>
                                    <td colspan="2"><a href="{{url('/')}}/front_assests/pdf/APR- CALCULATOR.xlsx" style="color:white;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:white;"></i></a></td>
                                </tr>

                            </tbody>
                        </table>



                        <h4 id="text" style="color:#296dc1;background:white;"></h4><br>
                    </div>
                    <!--<div class="col-md-1"></div>-->


                </div>

                <div class="row">
                    <!--<div class="col-md-1"></div>-->

                    <div class="col-md-12">
                        <p style='color:white;'><b>Note:</b></p>
                        <ul>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> The APR depends on various factors like rate of interest, processing fee etc. This calculator is provided to compute annualized credit cost which includes rate of interest and charges, applicable at the time of loan processing.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> The APR calculator does not include charges like stamp duty, prepayment charges, CERSAI charges etc.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> To calculate APR, please provide input for Loan Amount in INR, Tenure in months, rate of interest (without %) and processing fee of your Loan.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> Basis the four fields, calculator will show the APR in output field.</li>
                            <li style="text-align:justify;"><i class="fa fa-angle-double-right" style="font-size:15pt;"></i> You need to use the calculator without making any changes to the calculator. CBHFL shall not be responsible for any output produced due to changes in the calculator or incorrect input.</li>
                        </ul>

                    </div>
                    <!--<div class="col-md-1"></div>-->


                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>
<!--end model-->
<script type="text/javascript">
    function CalculateLoan() {


        // var x = parseFloat(document.getElementById('la').value);
        // var y = parseFloat(document.getElementById('ir').value);
        // var fees = parseFloat(document.getElementById('dp').value);
        // var z = parseInt(document.getElementById('lt').value);
        // var yr = z / 12;

        // var A = x( 1 + (y*yr));

        // var rateofinterest = A - x ;

        // var APR = ((rateofinterest + fees / x ) / (yr*365)) * 365 * 100;

        // var loanAmount = x - fees;
        // var interestRate = y / 100;
        // var periodicRate = interestRate / 12;
        // var monthlyPayment = loanAmount * (periodicRate / (1 - Math.pow(((1 + periodicRate)), (-z))));

        // document.getElementById('text').innerHTML = "The total APR of your loan is % "  + APR + " with a monthly payment of Rs "  + monthlyPayment.toFixed(2);




        var x = parseFloat(document.getElementById('la').value);
        var y = parseFloat(document.getElementById('dp').value);
        var loanAmount = x - y;
        var loanTerm = parseInt(document.getElementById('lt').value);
        var interestRate = parseFloat(document.getElementById('ir').value) / 100;
        var periodicRate = interestRate / 12;
        var monthlyPayment = loanAmount * (periodicRate / (1 - Math.pow(((1 + periodicRate)), (-loanTerm))));
        var totalLoan = monthlyPayment * loanTerm;

        document.getElementById('text').innerHTML = "The total cost of your loan is Rs " + totalLoan.toFixed(2) +
            " with a monthly payment of Rs " + monthlyPayment.toFixed(2);

    }
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#exampleModalCenter").on("show.bs.modal", function (e) {
            var id = $(e.relatedTarget).data('target-id');
            $('#pass_id').val(id);
        });
    });

</script>
<!-- footer-area start  -->
@endsection
