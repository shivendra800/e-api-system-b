@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Generated Dynamic QR</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Generated Dynamic QR List</li>
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
              <h3 class="card-title">Generated Dynamic QR List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>MerchantId</th>
                  <th>MerchantLegalName</th>
                  <th>TxnAmount</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($showGernareDyQr as $index=>$showGernareDyQrlist)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td> {{$showGernareDyQrlist['merchantId']}}</td>
                        <td>{{$showGernareDyQrlist['merchantLegalName']}}</td>
                        <td>{{$showGernareDyQrlist['txnAmount']}}</td>
                        <td>{{ \Carbon\Carbon::parse($showGernareDyQrlist['created_at'])->isoFormat('MMM Do YYYY')}}</td>
                       <td>
                        <a href="{{url('admin/show-generatedDynamciQR/'.$showGernareDyQrlist['id'])}}"class="badge badge-danger">Dynamic QR Show</a>

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
