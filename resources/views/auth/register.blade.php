<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Portfolio SignUp</title>
    <link rel="stylesheet" href="{{ asset('design/css/register.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('design/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

</head>

<body>
    @include('sweetalert::alert')
    <div class="container-register">
        <div class="js-tilt" data-tilt>
            <dotlottie-player src="https://lottie.host/0f8d0f76-a52b-45c8-ac99-1455d64cda79/lsuXkXvwNO.json"
                background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                autoplay></dotlottie-player>
        </div>
        <div class="container">
            <header>Signup Form</header>
            <div class="progress-bar">
                <div class="step">
                    <p>Identity</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>

                <div class="step">
                    <p>Submit</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>
            <div class="form-outer">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="page slide-page">
                        <div class="title">Basic Info:</div>
                        <div class="field form-step">
                            <div class="label">Full Name</div>
                            <input type="text" name="full_name" required>
                        </div>
                        <div class="field form-step">
                            <div class="label">Email Address</div>
                            <input type="email" name="email" required>
                        </div>
                        <div class="field form-step">
                            <div class="label">Password</div>
                            <input type="password" name="password" required>
                        </div>
                        <div class="field">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Other:</div>
                        <div class="field form-step">
                            <div class="label">Phone Number</div>
                            <input type="text" name="phone_number" required>
                        </div>
                        <div class="field form-step">
                            <div class="label">Date</div>
                            <input type="date" name="birthday" required>
                        </div>
                        <div class="field form-step">
                            <div class="label">Gender</div>
                            <select name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

            <a class="txt2" href="{{ route('login') }}">
                <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                Login to your Account
            </a>

        </div>
    </div>
    <script src="{{ asset('design/js/register.js') }}"></script>
    <script src="{{ asset('design/js/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('design/js/popper.js') }}"></script>
    <script src="{{ asset('design/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('design/js/select2.min.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="{{ asset('design/js/tilt.jquery.min.js') }}"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.5
        })
    </script>


</body>

</html>
