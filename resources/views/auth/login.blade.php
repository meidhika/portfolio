<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
</head>

<body>
@include('sweetalert::alert')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <dotlottie-player src="https://lottie.host/0f8d0f76-a52b-45c8-ac99-1455d64cda79/lsuXkXvwNO.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                        autoplay></dotlottie-player>
                </div>

                <form class="login100-form validate-form login" method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="title-text">
                        <div class="title login login100-form-title">Login To Our Portfolio</div>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>
                    <div class="text-center p-t-50">
                        <a class="txt2" href="{{ route('register') }}">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script src="{{ asset('design/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('design/js/main.js') }}"></script>
    <script src="{{ asset('design/js/popper.js') }}"></script>
    <script src="{{ asset('design/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('design/js/select2.min.js') }}"></script>
     @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="{{ asset('design/js/tilt.jquery.min.js') }}"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script src="{{ asset('design/js/tilt.js') }}"></script>
</body>

</html>
