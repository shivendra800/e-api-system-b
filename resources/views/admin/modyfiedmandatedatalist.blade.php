@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Modyfied Mandate List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Modyfied Mandate List List</li>
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
              <h3 class="card-title">Modyfied Mandate List List</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <!--<th>mandate_txnid</th>-->
                  <!--<th>RRN</th>-->
                  <th>umn</th>
                  <th>VALIDITY_END</th>
                  <th>Amount</th>
                  <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($modyfiedmandatelist as $index=>$modyfiedmandatelists)
                        <tr>


                        <td>{{$index+1}}</td>
                        <!--<td> {{$modyfiedmandatelists['mandate_txnid']}}</td>-->
                        <!--<td>{{$modyfiedmandatelists['rrn']}}</td>-->
                        <td>{{$modyfiedmandatelists['umn']}}</td>
                        <td>{{$modyfiedmandatelists['endDate']}}</td>
                        <td>{{$modyfiedmandatelists['amount']}}</td>

                        <td>{{ \Carbon\Carbon::parse($modyfiedmandatelists['created_at'])->isoFormat('MMM Do YYYY')}}</td>


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
