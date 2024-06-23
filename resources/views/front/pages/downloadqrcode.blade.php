@extends('front.layout.layouts')

@section('main_content')
<div class="breadcumb-area black-opacity bg-img-10">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>E-Nach Qr Code</h2>
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
                        <li>E-Nach QR Code Download</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url('assets/images/about2.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row ">
                <div class="col-md-4"></div>
                <!--new form-->
                <div class="col-md-4">


                    <?php echo DNS2D::getBarcodeHTML($getloanQrcode['res_mandateqrdata'], 'QRCODE',3,3);  ?>
                    {{-- {!! QrCode::generate($getloanQrcode['res_mandateqrdata']); !!} --}}

                </div>

                <div class="col-md-4"></div>

            </div>
        </div>

</section>
</div>




@endsection
