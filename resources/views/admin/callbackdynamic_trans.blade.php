@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Callback Dynamic QR Transection</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Callback Dynamic QR Transection List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Callback Dynamic QR Transection List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>MerchantId</th>
                  <!--<th>RRN</th>-->
                  {{-- <th>MerchantVpa</th> --}}
                  <th>CustomerVpa</th>
                  {{-- <th>TransactionId</th>                --}}
                  <th>GatewayResponseMessage</th>
                  <th>TransactionTimestamp</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($CallbackDynamicQRTransection as $index=>$CallBacDynQRTraslist)
                        <tr>


                        <td>{{$index+1}}</td>

                        <td> {{base64_decode($CallBacDynQRTraslist['merchId'])}}</td>
                        <!--<td>{{base64_decode($CallBacDynQRTraslist['rrn'])}}</td>-->
                        {{-- <td>{{base64_decode($CallBacDynQRTraslist['merchantvpa'])}}</td> --}}
                        <td>{{base64_decode($CallBacDynQRTraslist['customervpa'])}}</td>
                        {{-- <td>{{base64_decode($CallBacDynQRTraslist['merchanttransactionid'])}}</td> --}}

                        <td>{{base64_decode($CallBacDynQRTraslist['gatewayresponsemessage'])}}</td>
                        <td>{{base64_decode($CallBacDynQRTraslist['transactiontimestamp'])}}</td>
                        <td>{{ \Carbon\Carbon::parse($CallBacDynQRTraslist['created_at'])->isoFormat('MMM Do YYYY')}}</td>

                        <td>
                          <a href="{{url('admin/callbackmandatDynamicQrTransviewdetails/'.$CallBacDynQRTraslist['id'])}}" class="badge badge-primary">View Details</a>

                        </td>




                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>



@endsection
