@extends('admin.layouts.layout')



@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ENACH Dynamic QR Generation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/admin">Home</a></li>
                        <li class="breadcrumb-item active">ENACH Dynamic QR Generation</li>

                    </ol>
                </div>



            </div>
        </div><!-- /.container-fluid -->
    </section>

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
   

    <section class="content">
        <div class="container-fluid">
            <div class="row " >
                <div class="col-md-4"></div>
                <!--new form-->
                    <div class="col-md-4 text-center">
    
                    
                        <?php echo DNS2D::getBarcodeHTML($showGernareDyQr['qrData'], 'QRCODE',3,3);  ?>
                        <br>
                       
                    </div>
    
                    <div class="col-md-4"></div>
                   
                </div>
            </div>
            <div class="row">
               

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> ENACH Dynamic QR Generation</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        
                        <div class="card-body">
                            <div class="row">
                               
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Entity Id</label>
                                            <input type="text" class="form-control" id=""
                                                @if (!empty($showGernareDyQr['entityId'])) value="{{ $showGernareDyQr['entityId'] }}"  @else value="{{ old('entityId') }}" @endif
                                                readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Payment Address</label>
                                            <input type="text" class="form-control" id="" name="paymentAddress"
                                                @if (!empty($showGernareDyQr['paymentAddress'])) value="{{ $showGernareDyQr['paymentAddress'] }}"  @else value="{{ old('paymentAddress') }}" @endif
                                                readonly>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant LegalName</label>
                                            <input type="text" class="form-control" id=""
                                                name="merchantLegalName"
                                                @if (!empty($showGernareDyQr['merchantLegalName'])) value="{{ $showGernareDyQr['merchantLegalName'] }}"  @else value="{{ old('merchantLegalName') }}" @endif
                                                readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merchant Id</label>
                                            <input type="text" class="form-control" id="" name="merchantId"
                                                @if (!empty($showGernareDyQr['merchantId'])) value="{{ $showGernareDyQr['merchantId'] }}"  @else value="{{ old('merchantId') }}" @endif
                                                readonly>

                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Terminal Id</label>
                                            <input type="text" class="form-control" id="" name="terminalId"
                                                @if (!empty($showGernareDyQr['terminalId'])) value="{{ $showGernareDyQr['terminalId'] }}"  @else value="{{ old('terminalId') }}" @endif
                                                readonly>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Txn Amount</label>
                                            <input type="number" class="form-control" id="" name="txnAmount"
                                                min="0" step="0.001"
                                                @if (!empty($showGernareDyQr['txnAmount'])) value="{{ $showGernareDyQr['txnAmount'] }}"  @else value="{{ old('txnAmount') }}" @endif
                                                required  readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Purpose</label>
                                            <input type="text" class="form-control" id="" name="purpose"
                                                @if (!empty($showGernareDyQr['purpose'])) value="{{ $showGernareDyQr['purpose'] }}"  @else value="{{ old('purpose') }}" @endif
                                                required readonly>

                                        </div>
                                    </div>
                                    
                               
                           
                                </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                   
                            <a href="{{url()->previous() }}" class="btn btn-secondary">Back</a>
                            
                        </div>
                       

                    </div>
                    <!-- /.card -->


                </div>

            </div>
        </div>
    </section>
@endsection
