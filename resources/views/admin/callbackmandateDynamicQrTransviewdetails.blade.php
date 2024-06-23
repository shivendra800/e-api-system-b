@extends('admin.layouts.layout')



@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CallBack Mandate Created Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">CallBack Mandate Created Details</li>

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
                            <h3 class="card-title"> CallBack Mandate Created Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MerchId</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['merchId'])) value="{{ base64_decode($CallBackDynamicQrTrans['merchId']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Merchantvpa</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['merchantvpa'])) value="{{ base64_decode($CallBackDynamicQrTrans['merchantvpa']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customervpa</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['customervpa'])) value="{{ base64_decode($CallBackDynamicQrTrans['customervpa']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Merchanttransactionid</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['merchanttransactionid'])) value="{{ base64_decode($CallBackDynamicQrTrans['merchanttransactionid']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Transactiontimestamp</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['transactiontimestamp'])) value="{{ base64_decode($CallBackDynamicQrTrans['transactiontimestamp']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Transactionamount</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['transactionamount'])) value="{{ base64_decode($CallBackDynamicQrTrans['transactionamount']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">RRN</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallBackDynamicQrTrans['rrn'])) value="{{ base64_decode($CallBackDynamicQrTrans['rrn']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                               
                               
                               
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                            <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>

            </div>
        </div>
    </section>
@endsection
