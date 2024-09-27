<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <h2>Register</h2>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new member</p>
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
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
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
                            <div class="input-group-text" id="togglePassword1" style="cursor: pointer;">
                                <span class="fas fa-eye" id="eyeIcon1"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password"
                            id="password_confirmation" name="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text" id="togglePassword2" style="cursor: pointer;">
                                <span class="fas fa-eye" id="eyeIcon2"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <!-- /.col -->
                        <div class="col-8 reg-sub-btn">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    {{-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a> --}}
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google
                    </a>
                </div>

                <a href="{{route('login')}}" class="text-center d-block">I already have a member</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{asset('backEndAsset')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backEndAsset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backEndAsset')}}/js/adminlte.min.js"></script>
    <script>
    // password show
    $(document).ready(function() {
        // Toggle for the first password field
        $('#togglePassword1').on('click', function() {
            const passwordInput = $('#password');
            const eyeIcon = $('#eyeIcon1');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text'); 
                eyeIcon.removeClass('fa-eye').addClass('fa-eye-slash'); 
            } else {
                passwordInput.attr('type', 'password'); 
                eyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

        // Toggle for the confirmation password field
        $('#togglePassword2').on('click', function() {
            const passwordInput = $('#password_confirmation');
            const eyeIcon = $('#eyeIcon2');

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