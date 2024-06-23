@extends('admin.layouts.layout')

@section('title',$title.'Branch')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Branch</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Home</a></li>
            <li class="breadcrumb-item active">{{$title}}-Branch</li>

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
                    <h3 class="card-title">{{$title}} Branch</h3>
                    <a style="max-width: 150px; float:right; display:inline-block;" href="{{ url('admin/Branch-List') }}" class="btn btn-block btn-info">Back</a>
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
                  <form class="forms-sample" @if(empty($branch['id'])) action="{{ url('admin/add-Edit-Branch') }}"
                            @else action="{{ url('admin/add-Edit-Branch/'.$branch['id']) }}"   @endif
                         method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Branch Type </label>
                            <select class="form-control @error('branch_type') is-invalid @enderror" name="branch_type">
                                <option value="">Select  Type</option>
                                <option @if(!empty($branch['branch_type'])&& $branch['branch_type']=="All-Branches")
                                selected="" @endif value="All-Branches">All Branches</option>
                                <option @if(!empty($branch['branch_type'])&& $branch['branch_type']=="Satellite-Branches")
                                selected="" @endif value="Satellite-Branches">Satellite Branches</option>

                            </select>
                            @error('branch_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        </div>


                    <div class="card-body">
                      <div class="form-group">
                        <label for="">Branch Name</label>
                        <input type="text" class="form-control @error('branch_name') is-invalid @enderror" id="" placeholder="Enter Branch Name" name="branch_name"
                        @if(!empty($branch['branch_name']))
                                 value="{{ $branch['branch_name'] }}"  @else value="{{ old('branch_name') }}" @endif>
                        @error('branch_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>



                        <div class="card-body">
                        <div class="form-group">
                            <label class="exampleInputEmail1">Branch Address</label>
                                <textarea id="w3review" class="form-control"   name="branch_address" rows="4" cols="50">
                                    @if(!empty($branch['branch_address']))
                                {{ $branch['branch_address'] }}"  @else {{ old('branch_address') }}" @endif
                                </textarea>
                        </div>
                    </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">

                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{url('/') }}/admin/Branch-List" class="btn btn-secondary">Back</a>
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

