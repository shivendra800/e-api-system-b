@extends('admin.layouts.layout')

@section('title', 'Add New Auction')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<section class="content-header">
    <div class="container-fluid">
        @if (Session::has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> {{ Session::get('error_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- error meg with close button---- --}}
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- error meg --}}
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New Auction</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add New Auction</li>

                </ol>
            </div>



        </div>
    </div><!-- /.container-fluid -->
</section>



<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> Add New Auction</h3>
                <a style="max-width: 150px; float:right; display:inline-block;" href="{{ url('admin/Download-List') }}" class="btn btn-block btn-info">Back</a>

            </div>
            <div class="card-body">
                <form class="forms-sample" @if(empty($PolicyOtherDoc['id'])) action="{{ url('admin/add-Edit-Download') }}" @else action="{{ url('admin/add-Edit-Download/'.$PolicyOtherDoc['id']) }}" @endif method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Contect Type </label>
                            <select class="form-control @error('type') is-invalid @enderror" name="type" id="type"  onchange="showDiv(this)">
                                <option value="">Select Type</option>
                                <option @if(!empty($PolicyOtherDoc['type'])&& $PolicyOtherDoc['type']=="File" ) selected="" @endif value="File">File</option>
                                <option @if(!empty($PolicyOtherDoc['type'])&& $PolicyOtherDoc['type']=="Model" ) selected="" @endif value="Model">Model</option>

                            </select>
                            @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Document Type </label>
                            <select class="form-control @error('other_type') is-invalid @enderror" name="other_type">
                                <option value="">Select Type</option>
                                <option @if(!empty($PolicyOtherDoc['other_type'])&& $PolicyOtherDoc['other_type']=="Policy" ) selected="" @endif value="Policy">Policy</option>
                                <option @if(!empty($PolicyOtherDoc['other_type'])&& $PolicyOtherDoc['other_type']=="Other Documents" ) selected="" @endif value="Other Documents">Other Documents</option>

                            </select>
                            @error('other_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div id="titlefile" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title"
                                @if(!empty($PolicyOtherDoc['title']))
                                     value="{{ $PolicyOtherDoc['title'] }}"  @else value="{{ old('title') }}" @endif
                                />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Upload File</label>
                                <input type="file" class="form-control" placeholder="Enter img1" name="download_file" />
                                @if(!empty($PolicyOtherDoc->download_file))
                                <a target="_blank" href="{{ url($PolicyOtherDoc->download_file) }}">View File</a>&nbsp;&nbsp;

                                @endif

                            </div>
                        </div>
                    </div>
                    <div style=" display:inline-block;"  class="btn btn-block btn-info">Range of RoI</div>

                    <div id="Modeldata" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date</label>
                                <input type="text" class="form-control" placeholder="Enter Date" name="date"
                                @if(!empty($PolicyOtherDoc['date']))
                                     value="{{ $PolicyOtherDoc['date'] }}"  @else value="{{ old('date') }}" @endif
                                />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Housing  Minimum</label>
                                <input type="text" class="form-control" placeholder="Enter Housing Minimum" name="hou_minimum"
                                @if(!empty($PolicyOtherDoc['hou_minimum']))
                                     value="{{ $PolicyOtherDoc['hou_minimum'] }}"  @else value="{{ old('hou_minimum') }}" @endif
                                />

                                <label class="control-label">Housing  Maximum</label>
                                <input type="text" class="form-control" placeholder="Enter Housing Maximum" name="hou_maximum"
                                @if(!empty($PolicyOtherDoc['hou_maximum']))
                                     value="{{ $PolicyOtherDoc['hou_maximum'] }}"  @else value="{{ old('hou_maximum') }}" @endif
                                />
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Non-Housing  Minimum</label>
                                <input type="text" class="form-control" placeholder="Enter Housing Minimum" name="non_minimum"
                                @if(!empty($PolicyOtherDoc['non_minimum']))
                                     value="{{ $PolicyOtherDoc['non_minimum'] }}"  @else value="{{ old('non_minimum') }}" @endif
                                />

                                <label class="control-label">Housing  Maximum</label>
                                <input type="text" class="form-control" placeholder="Enter Housing Maximum" name="non_maximum"
                                @if(!empty($PolicyOtherDoc['non_maximum']))
                                     value="{{ $PolicyOtherDoc['non_maximum'] }}"  @else value="{{ old('non_maximum') }}" @endif
                                />
                            </div>
                        </div>
                        <hr>

                        <div style=" display:inline-block;"  class="btn btn-block btn-info">Average RoI</div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Housing</label>
                                <input type="text" class="form-control" placeholder="Enter Average RoI Housing" name="average_roI_hous"
                                @if(!empty($PolicyOtherDoc['average_roI_hous']))
                                     value="{{ $PolicyOtherDoc['average_roI_hous'] }}"  @else value="{{ old('average_roI_hous') }}" @endif
                                />
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Non-housing</label>
                                <input type="text" class="form-control" placeholder="Enter Average RoI Non-housing" name="averageroInonhous"
                                @if(!empty($PolicyOtherDoc['averageroInonhous']))
                                     value="{{ $PolicyOtherDoc['averageroInonhous'] }}"  @else value="{{ old('averageroInonhous') }}" @endif
                                />
                            </div>
                        </div>

                    </div>





                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/') }}/admin/Download-List" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>

<script>
    $(document).ready(function(){
        $('#type').on('change', function() {
          if ( this.value == 'File')
          {
            $("#titlefile").show();
            $("#Modeldata").hide();
          }
          else
          {
            $("#Modeldata").show();
            $("#titlefile").hide();
          }
        });
    });
    </script>


@endsection
@section('script')




@endsection
