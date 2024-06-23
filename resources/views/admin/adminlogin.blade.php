<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/admin_assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/admin_assets/toastr.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{url('/')}}/admin_assets/icon.jpg" alt="Cent Bank LTD" height="60" width="60">
  </div>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1">
        <img src="{{url('/')}}/admin_assets/logo_2.png" style="width:250px;height:65px;" class="img-responsive" ></a>
    </div>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
     
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if(Session::has('error_message'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error:</strong> {{Session::get('error_message')}}
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
      {{-- error meg with close button---- --}}
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
   
      <form action="{{url('/')}}/admin" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
           
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block"> Login</button>
              </div>
              <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('/')}}/admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/admin_assets/dist/js/adminlte.min.js"></script>


<script type="text/javascript" src="{{ url('/') }}/admin_assets/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>
</html>
