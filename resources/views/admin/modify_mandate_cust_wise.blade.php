@extends('admin.layouts.layout')



@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ENACH Modify Mandate</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/admin">Home</a></li>
                        <li class="breadcrumb-item active">ENACH Modify Mandate</li>

                    </ol>
                </div>



            </div>
        </div><!-- /.container-fluid -->
    </section>

    @if(Session::has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Errors:</strong> {{Session::get('error_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success:</strong> {{Session::get('success_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
   

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> ENACH Modify Mandate</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/E-NACH-Modify-Mandate/' . $checkreqt['terminalId']) }}"
                        method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Umn</label>
                                            <input type="text" class="form-control" id="" name="umn"  value="{{ old('umn') }}" >

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">RefId</label>
                                            <input type="text" class="form-control" id="" name="refId" value="{{ old('refId') }}"   >

                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Amount</label>
                                            <input type="number" class="form-control" id="" name="amount" min="0" step="0.001"  value="{{ old('amount') }}"
                                                required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">EndDate</label>
                                            <input type="date" class="form-control" id="" name="endDate" value="{{ old('endDate') }}" required>

                                        </div>
                                    </div>



                                </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('/') }}/admin/Enach-Request" class="btn btn-secondary">Back</a>

                        </div>
                        </form>

                    </div>
                    <!-- /.card -->


                </div>

            </div>
        </div>
    </section>
@endsection
txnAmount
