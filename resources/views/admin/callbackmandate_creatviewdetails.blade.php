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
                                        <label for="exampleInputEmail1">EntityId</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['entityId'])) value="{{ base64_decode($CallbackMandateCreation['entityId']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">UMN</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['umn'])) value="{{ base64_decode($CallbackMandateCreation['umn']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MerchantId</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['merchant_id'])) value="{{ base64_decode($CallbackMandateCreation['merchant_id']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PayerName</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['payer_name'])) value="{{ base64_decode($CallbackMandateCreation['payer_name']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PayeeName</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['payee_name'])) value="{{ base64_decode($CallbackMandateCreation['payee_name']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PayeeVpa</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['payeevpa'])) value="{{ base64_decode($CallbackMandateCreation['payeevpa']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PayerVpa</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['payervpa'])) value="{{ base64_decode($CallbackMandateCreation['payervpa']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">TxnNote</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['txnnote'])) value="{{ base64_decode($CallbackMandateCreation['txnnote']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">TransactionTimeStamp</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['transactiontimestamp'])) value="{{ base64_decode($CallbackMandateCreation['transactiontimestamp']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MandateAmount</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['mandateamount'])) value="{{ base64_decode($CallbackMandateCreation['mandateamount']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ResponseCode</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['responsecode'])) value="{{ base64_decode($CallbackMandateCreation['responsecode']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ResponseMessage</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['responsemessage'])) value="{{ base64_decode($CallbackMandateCreation['responsemessage']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MandatetxnId</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['mandatetxnid'])) value="{{ base64_decode($CallbackMandateCreation['mandatetxnid']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">RefId</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['refId'])) value="{{ base64_decode($CallbackMandateCreation['refId']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Frequency</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['frequency'])) value="{{ base64_decode($CallbackMandateCreation['frequency']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ValidityStart</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['validitystart'])) value="{{ base64_decode($CallbackMandateCreation['validitystart']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ValidityEnd</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['validityend'])) value="{{ base64_decode($CallbackMandateCreation['validityend']) }}"  @else value="" @endif>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">RRN</label>
                                        <input type="text" class="form-control" id="" readonly 
                                            @if (!empty($CallbackMandateCreation['rrn'])) value="{{ base64_decode($CallbackMandateCreation['rrn']) }}"  @else value="" @endif>

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
