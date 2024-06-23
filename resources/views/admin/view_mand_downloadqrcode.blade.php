@extends('admin.layouts.layout')

@section('title','Customer Wise QR Code ')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Wise QR Code </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Customer Wise QR Code </li>

          </ol>
        </div>



      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> Customer Wise QR Code </h3>
                    @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors:</strong> {{Session::get('error_message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> {{Session::get('success_message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if($errors->any(''))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> <?php echo implode('',$errors->all('<div>:message</div>')); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                  </div>
                  <br>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="col-md-12" align="center">


                    <?php echo DNS2D::getBarcodeHTML($getloanQrcode['res_mandateqrdata'], 'QRCODE',3,3);  ?>
                    {{-- {!! QrCode::generate($getloanQrcode['res_mandateqrdata']); !!} --}}

                </div>
                <br>

                    <!-- /.card-body -->


                </div>
                <!-- /.card -->


        </div>

      </div>
    </div>
  </section>


@endsection

