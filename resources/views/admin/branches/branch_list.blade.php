@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Branch</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Branch List</li>
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

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title ">
                       <a href="{{url('/')}}/admin/add-Edit-Branch"> <button type="button" class="btn btn-block btn-info btn-flat ">Create Branch</button></a>
                    </h3>
                </div>
             </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Branch List</h3>
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

            <div class="card-body">
              <table id="example1" class="  table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example1_info">
                <thead>
                <tr>


                  <th>ID</th>
                  <th>Branch Type</th>
                  <th>Branch Name</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($branch as $index=>$type)
                        <tr>


                        <td>{{$index+1}}</td>
                        <td>
                          {{$type['branch_type']}}

                        </td>
                        <td>
                            {{$type['branch_name']}}

                          </td>
                        <td>{{ \Carbon\Carbon::parse($type['created_at'])->isoFormat('MMM Do YYYY')}}</td>

                        <td>
                            <div style="display:inline-flex;">
                            <a href="{{url('admin/add-Edit-Branch/'.$type['id'])}}"class="badge badge-primary">Edit</a>&nbsp;&nbsp;

                            <form method="POST" action="{{ url('/') }}/admin/Delete-Branch/{{ $type['id'] }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                            </div>
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

@section('script')



@endsection
