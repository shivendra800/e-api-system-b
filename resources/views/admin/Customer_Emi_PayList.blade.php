@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Online EMI Payment</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Online EMI Payment List</li>
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
              <h3 class="card-title"> Online EMI Payment List</h3>
              
            </div>
            <!-- /.card-header -->
            
            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>
                 
             
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Loan A/C No</th>
                  <th>Payment Id</th>
                  <th>Payment Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($getEmiPayUer as $index=>$getpayUser)
                    <tr>
                   
                    
                    <td>{{$index+1}}</td>
                    <td>{{$getpayUser['cust_name']}}</td>
                    <td>{{$getpayUser['cust_mobile']}}</td>
                    <td>{{$getpayUser['loan_ac_number']}}</td>
                    <td>{{$getpayUser['payment_id']}}</td>
                    <td>{{ \Carbon\Carbon::parse( $getpayUser['created_at'])->isoFormat('MMM Do YYYY')}}</td>
                    <td><a href="{{url('admin/cust-wise-emi-payment-details/'.$getpayUser['id'])}}"class="badge badge-danger">View Details</a></td>
                        

                         
                        
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