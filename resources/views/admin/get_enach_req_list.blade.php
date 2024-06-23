@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">E-NACH Request</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">E-NACH Request List</li>
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
              <h3 class="card-title">E-NACH Request List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Emi Amt</th>
                  <th>Emi Date</th>
                  <th>Loan Acc No</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($getenachreqList as $index=>$enachreq)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td>
                          {{$enachreq['merchantLegalName']}}
                          <br>
                          <a href="{{url('admin/E-NACH-viewdetails/'.$enachreq['id'])}}"class="badge badge-danger">View Details</a>
                        </td>
                        <td>{{$enachreq['email']}}</td>
                        <td>{{$enachreq['mobileNo']}}</td>
                        <td>{{$enachreq['emi_amount']}}</td>
                        <td>{{$enachreq['validityStart']}}<br>{{$enachreq['validityEnd']}}</td>
                        <td>{{$enachreq['merchantAccountNo']}}</td>
                        <td>{{ \Carbon\Carbon::parse($enachreq['created_at'])->isoFormat('MMM Do YYYY')}}</td>
                        <td>
                          <a href="{{url('admin/E-NACH-Modify-Mandate/'.$enachreq['terminalId'])}}"class="badge badge-danger">Modify Mandate</a>
                          <a href="{{url('admin/E-NACH-Revoke-Mandate/'.$enachreq['terminalId'])}}"class="badge badge-danger">Revoke Mandate</a>
                          <a href="{{url('admin/E-NACH-Dynamic-QR-Generation/'.$enachreq['terminalId'])}}"class="badge badge-danger">Dynamic QR Generation</a>
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
