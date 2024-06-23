@extends('admin.layouts.layout')

@section('title',$title.'Slider & Our Event')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Slider & Our Event</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Home</a></li>
            <li class="breadcrumb-item active">{{$title}}-Slider & Our Event</li>

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
                    <h3 class="card-title">{{$title}} Slider & Our Event</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="forms-sample"action="{{ url('admin/add-Edit-slider-envent') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image Type</label>
                        <select class="form-control" id="type" name="type" required="">
                            <option value="">Select Slider OR Our-Event Type</option>
                            <option @if(!empty($SliderEvent['type'])&& $SliderEvent['type']=="Slider")
                            selected="" @endif value="Slider">Slider</option>
                            <option @if(!empty($SliderEvent['type'])&& $SliderEvent['type']=="Our-Event")
                            selected="" @endif value="Our-Event">Our-Event</option>

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Upload  Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="multiImg" placeholder="Enter Unit Name" name="image[]" multiple="">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">

                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{url('/') }}/admin/Slider-OurEventList" class="btn btn-secondary">Back</a>
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

