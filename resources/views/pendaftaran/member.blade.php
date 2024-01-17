<head>


    @include('navbar.headermember')



</head>
<body>
    <div class="wrapper" style="background-image: url('assets/img/orang.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="assets/img/gymcard.png" alt="">
            </div>
          <form action="{{ route('member.store') }}" method="POST">
            @csrf
                <h3><strong>Daftar Member Baru di Gym Centra Fitness</strong></h3>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control" name="username">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Nama" class="form-control" name="nama">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="email" placeholder="Email Address" class="form-control" name="email">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="tel" placeholder="Nomor Telepon" class="form-control" name="telepon">
                    <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="form-wrapper">
                    <textarea placeholder="Alamat" class="form-control" name="alamat"></textarea>
                    <i class="zmdi zmdi-pin"></i>
                </div>
                <button type="submit">Daftar <i class="zmdi zmdi-arrow-right"></i></button>
            </form>
        </div>
    </div>
</body>
</html>
