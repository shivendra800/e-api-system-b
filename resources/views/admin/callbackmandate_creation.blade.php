@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Callback MandateCreation</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Callback MandateCreation List</li>
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
              <h3 class="card-title">Callback MandateCreation List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>PayerName</th>

                  <th>MerchantID</th>
                  <th>TrasTimestamp</th>
                  <th>MandateAmt</th>
                  <th>Frequency</th>
                  <!--<th>ValidityStart/End</th>-->
                  <th>Created At</th>
                  <th>Action</th>


                </tr>
                </thead>
                <tbody>
                    @foreach ($CallbackMandateCreation as $index=>$CallbaMandateCreat)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td> {{base64_decode($CallbaMandateCreat['payer_name'])}}</td>



                        <td>{{base64_decode($CallbaMandateCreat['merchant_id'])}}</td>
                        <td>{{base64_decode($CallbaMandateCreat['transactiontimestamp'])}}</td>
                        <td>{{base64_decode($CallbaMandateCreat['mandateamount'])}}</td>
                        <td>{{base64_decode($CallbaMandateCreat['frequency'])}}</td>
                        <!--<td>{{base64_decode($CallbaMandateCreat['validitystart'])}}-{{base64_decode($CallbaMandateCreat['validityend'])}}</td>-->
                        <td>{{ \Carbon\Carbon::parse($CallbaMandateCreat['created_at'])->isoFormat('MMM Do YYYY')}}</td>

                        <td>
                          <a href="{{url('admin/callbackmandate_create-viewdetails/'.$CallbaMandateCreat['id'])}}" class="badge badge-primary">View Details</a>
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
