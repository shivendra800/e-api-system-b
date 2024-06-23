@extends('admin.layouts.layout')

@section('title','E-Nach Customer Details')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>E-Nach Customer Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">E-Nach Customer Details</li>

          </ol>
        </div>



      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> E-Nach Customer Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="forms-sample"  action="{{ url('admin/ENach-New-OnboardingCreatesave') }}"method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                    <div class="row">
                        <div class="form-group col-sm-6 col-xs-12">
                            <label for="">Select Branch</label>
                          <select name="branch_id" id="branch_id" class="form-control">
                            <option value="">Select Branch</option>
                            @foreach ($branch as $branchitem)
                                <option value="{{$branchitem->id}}">{{$branchitem->branch_name}}</option>
                            @endforeach
                          </select>
                       </div>
                        <div class="form-group col-sm-6 col-xs-12">
                             <label for="">Name</label>
                            <input type="text" placeholder="Name of the borrower" class="form-control" name="merchantLegalName"
                                id="fname" required minlength="1" maxlength="100" value="{{$data["user_name"]}}" readonly />
                        </div>
                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Email id" value="{{$data["email"]}}" readonly>
                        </div>


                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">Mobile Number</label>
                            <input type="text" class="form-control" name="mobileNo" minlength="10" maxlength="12" value="7550404066"
                                placeholder="Mobile Number" id="mob_No_" readonly />
                        </div>

                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">Aadhar Number</label>
                            <input type="text" class="form-control" name="aadhar_no" minlength="12" id="aadhar_no" maxlength="12"
                                placeholder="Aadhar No" value="{{$data["aadhar_no"]}}" readonly />

                                {{-- <div class="form-group col-xs-12 pull-center text-center">
                                    <button type="submit" class="form-control" name="submit" id="Verify_aadhar_no" value="Submit"
                                        class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                        class="cont-submit btn-contact btn-primary pull-center"
                                        >Verify</button>
                                </div> --}}
                        </div>

                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">Loan Account Number</label>
                            <input type="text" class="form-control" name="merchantAccountNo" placeholder="Loan Account Number"
                                minlength="1" maxlength="30" value="{{$data["loan_account_no"]}}" readonly />
                        </div>

                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">Emi Amount</label>
                            <input type="text" class="form-control" name="emi_amount" placeholder="EMI Amount" value="{{$data["emi_amount"]}}" readonly  minlength="1" maxlength="100" />
                        </div>
                        <div class="form-group  col-sm-6 col-xs-12">

                            <label for="">Start Date</label>
                            <input type="text" class="form-control" name="validityStart" placeholder="ValidityStart"
                            value="{{$data["emi_start_date"]}}" readonly  />
                        </div>
                        <div class="form-group  col-sm-6 col-xs-12">
                            <label for="">End Date</label>
                            <input type="text" class="form-control" name="validityEnd" placeholder="ValidityEnd"
                            value="{{$data["emi_end_date"]}}" readonly />
                        </div>
                        <div class="form-group   col-sm-6 col-xs-12">
                            <label for="">E-Nach Status</label>
                            <input type="text"  placeholder="ValidityEnd" class="btn btn-success"
                            value="{{$data["status"]}}" readonly />

                        </div>
                        @if($data["status"] == "E-Nach Not Register")
                        <div class="card-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                        @endif

                    </div>
                    </div>
                  </form>
                </div>
                <!-- /.card -->


        </div>

      </div>
    </div>
  </section>


@endsection

