<head>


    @include('navbar.headeradminlogin')


</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form action="{{ route('adminregister.store') }}" method="POST" class="login100-form validate-form">
                    @csrf


                    <span class="login100-form-title p-b-26">
                        Buat Akun Admin
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <!-- Add Nama (name) field -->
                    <div class="wrap-input100 validate-input" data-validate="Nama is required">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="Nama"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-35">
                        <span class="txt1">
                            Sudah Punya Akun?
                        </span>
                        <a class="txt2" href="/adminlogin">
                            <strong>Login Akun</strong>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/buatadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/buatadmin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/buatadmin/js/main.js"></script>

</body>

</html>
