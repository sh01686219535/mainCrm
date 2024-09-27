<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backEndAsset')}}/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('backEndAsset')}}/css/custom.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>Login</h2>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <!-- error message -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password"
                            name="password">
                        <div class="input-group-append">
                            <div class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                <span class="fas fa-eye" id="eyeIcon"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <!-- /.col -->
                        <div class="col-8 reg-sub-btn">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-info px-3" id="adminLogin">Admin Login</a>
                        <a class="btn btn-success px-3" id="clientLogin">Client Login</a>
                    </div>
                    <hr>
                    <a href="{{ url('/google/redirect')}}" class="btn btn-block btn-primary">
                        <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                    {{-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a> --}}

                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1 text-center">
                    <a href="{{route('forgot.password')}}">I forgot my password</a>
                </p>
                <p class="mb-0 text-center">
                    <a href="{{route('register')}}" class="text-center">Register a new member</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('backEndAsset')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backEndAsset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backEndAsset')}}js/adminlte.min.js"></script>
    <!-- button click  -->
    <script>
    $(document).ready(function() {
        $('#adminLogin').on('click', function() {
            $('#email').val('admin@gmail.com');
            $('#password').val('123456789');
        });
    });
    $(document).ready(function() {
        $('#clientLogin').on('click', function() {
            $('#email').val('client@gmail.com');
            $('#password').val('123456789');
        });
    });
    // password show
    $(document).ready(function() {
        $('#togglePassword').on('click', function() {
            const passwordInput = $('#password');
            const eyeIcon = $('#eyeIcon');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text'); 
                eyeIcon.removeClass('fa-eye').addClass('fa-eye-slash'); 
            } else {
                passwordInput.attr('type', 'password'); 
                eyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
    </script>
</body>

</html>