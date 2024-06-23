@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Callback MandateExecutions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Callback MandateExecutions List</li>
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
              <h3 class="card-title">Callback MandateExecutions List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>MerchantId</th>
                  <th>RRN</th>
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
                    @foreach ($CallbackMandateExecutions as $index=>$CallBacmandateexe)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td> {{base64_decode($CallBacmandateexe['merchId'])}}</td>
                        <td>{{base64_decode($CallBacmandateexe['rrn'])}}</td>
                        {{-- <td>{{base64_decode($CallBacmandateexe['merchantvpa'])}}</td> --}}
                        <td>{{base64_decode($CallBacmandateexe['customervpa'])}}</td>
                        {{-- <td>{{base64_decode($CallBacmandateexe['merchanttransactionid'])}}</td> --}}

                        <td>{{base64_decode($CallBacmandateexe['gatewayresponsemessage'])}}</td>
                        <td>{{base64_decode($CallBacmandateexe['transactiontimestamp'])}}</td>
                        <td>{{ \Carbon\Carbon::parse($CallBacmandateexe['created_at'])->isoFormat('MMM Do YYYY')}}</td>

                        <td>
                          <a href="{{url('admin/callbackmandatExtecutionviewdetails/'.$CallBacmandateexe['id'])}}" class="badge badge-primary">View Details</a>

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
