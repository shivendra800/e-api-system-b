@extends('admin.layouts.layout')

@section('content')

<style>

</style>

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Payment Collection Report</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Payment Collection Report List</li>
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
              <h3 class="card-title">Payment Collection Report List</h3>

            </div>
            <!-- /.card-header -->
            <div class="card card-primary card-outline">
                <h2 class="btn btn-warning">Search Data Wise Payment Collection Report</h2>
                <div class="card-header">
                   <form action="{{ url('/admin/DateWise-search-PaymentCollRep') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="date" name="start_date" class="form-control" placeholder="Enter Start Date" value="{{ Request::get('start_date')  }}" required>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="end_date" class="form-control" placeholder="Enter End Date" value="{{ Request::get('end_date')  }}" required>
                        </div>

                        <div class="col-md-4 mt-1">
                            <button type="submit">Search</button>
                        </div>

                    </div>


                   </form>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>NO</th>
                  <th>ITEM TYPE</th>
                  <th>ITEM REFERENCE</th>
                  <th>ITEM SEQUENCE NUMBER</th>
                  <th>STATUS</th>
                  <th>CLEARING STATUS</th>
                  <th>VALUE DATE</th>
                  <th>SENDER</th>
                  <th>RECEIVER</th>
                  <th>REASON CODE</th>
                  <th>CURRENCY</th>
                  <th>AMOUNT</th>
                  <th>RECEIVER ACCOUNT</th>
                  <th>NAME</th>
                  <th>UMRN</th>



                </tr>
                </thead>
                <tbody>
                    @foreach ($CallbackMandateCreation as $index=>$CallbaMandateCreat)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td>SI Autopay</td>
                        <td>{{base64_decode($CallbaMandateCreat['merchant_id'])}}</td>
                        <td>{{base64_decode($CallbaMandateCreat['rrn'])}}</td>
                        <td>ACCEPTED</td>
                        <td>SETTLED</td>
                        <td>{{base64_decode($CallbaMandateCreat['transactiontimestamp'])}}</td>
                        <td>Collection account IFSC</td>
                        <td>Customer IFSC</td>
                        <td>ACCEPTED</td>
                        <td>INR</td>
                        <td>{{base64_decode($CallbaMandateCreat['mandateamount'])}}</td>
                        <td>Customer bank account number </td>
                        <td> {{base64_decode($CallbaMandateCreat['payer_name'])}}</td>
                        <td>{{base64_decode($CallbaMandateCreat['umn'])}}</td>
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
