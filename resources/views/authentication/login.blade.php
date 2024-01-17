<head>


    @include('navbar.headerlogin')

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="bg-white p-5">
                <div class="login100-pic js-tilt text-center pb-5" data-tilt>
                    <img src="assets/images1/img-01.png" alt="IMG" width="150">
                </div>

                <form action="/login" method="POST" class="validate-form">
                    @csrf

                    <span class="login100-form-title">
                        Login Akun
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
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
                        <a class="txt2" href="/register">
                            <strong>Belum Punya Akun? Register</strong>
                        </a><br>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="assets/vendor1/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor1/bootstrap/js/popper.js"></script>
    <script src="assets/vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor1/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor1/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="assets/js1/main.js"></script>

</body>

</html>
