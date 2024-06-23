@extends('admin.layouts.layout')

@section('title','Customer Mobile No Wise Loan Account No ')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Mobile No Wise Loan Account No </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Home</a></li>
            <li class="breadcrumb-item active">Customer Mobile No Wise Loan Account No </li>

          </ol>
        </div>



      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> Customer Mobile No Wise Loan Account No </h3>
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
                    @if($errors->any(''))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> <?php echo implode('',$errors->all('<div>:message</div>')); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="forms-sample"  action="{{ url('admin/ENach-New-Onboarding-getloanaccnosubmit') }}"method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile No </label>
                        <select name="loan_acc_no" id="" class="form-control" required>
                            <option value="">Select Loan Account No</option>
                            <?php foreach($data['detail'] as $country){ ?>
                                <option value="<?php echo $country['loan_acc_no'];?>"><?php echo $country['loan_acc_no'];?>
                                </option>
                             <?php } ?>
                           </select>

                      </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->


        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </section>


@endsection

