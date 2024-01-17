<head>

	@include('navbar.headerhome')



</head>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Gym Centra Fitness</a></h1>
      <!-- Hapus komentar di bawah jika Anda lebih memilih menggunakan logo gambar -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          @if (!Auth::check())
            <li><a class="getstarted scrollto" href="./login">Login</a></li>
          @else
            <li>
                <form action="/home" method="POST">
                    @csrf

                    <button class="getstarted scrollto" type="submit" style="background-color: rgb(168, 86, 14);">Logout ({{ auth()->user()->name }})</button>
                </form>
            </li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>welcom to centra gym fitness</h1>
      <h2>"Tubuh yang kuat bukanlah hadiah, tetapi merupakan hasil dari usaha yang tak kenal lelah di gym."</h2>
      <div class="d-flex">
        @auth
            <a href="/member" class="btn-get-started scrollto">Daftar Member</a>
        @endauth
        <a href="https://youtu.be/HQfF5XRVXjU?si=Fj_sMfSOzcu9M5JE" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
              <div class="row justify-content-end">

                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="bi bi-emoji-smile"></i>
                          <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Klien Bahagia</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="bi bi-journal-richtext"></i>
                          <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Proyek</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="bi bi-clock"></i>
                          <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Tahun Pengalaman</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="bi bi-award"></i>
                          <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Penghargaan</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>


        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/HQfF5XRVXjU?si=Fj_sMfSOzcu9M5JE" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
              <h3>Transformasi Tubuh dan Kesejahteraan</h3>
               <p class="fst-italic">
                Selamat datang di tempat di mana perubahan besar dimulai, di mana tubuh sehat dan kesejahteraan menjadi prioritas.
              </p>
            <ul>
            <li><i class="bx bx-check-double"></i> Program latihan yang dipersonalisasi untuk meraih tujuan kebugaran dan penampilan yang Anda impikan.</li>
            <li><i class="bx bx-check-double"></i> Tim pelatih profesional yang akan memandu Anda melalui perjalanan transformasi Anda.</li>
           <li><i class="bx bx-check-double"></i> Fasilitas modern dengan peralatan terbaru untuk menjadikan latihan Anda lebih efektif dan menyenangkan.</li>
          <li><i class="bx bx-check-double"></i> Komunitas yang solid, energik, dan penuh semangat untuk memberikan dukungan dan inspirasi sepanjang perjalanan Anda.</li>
         </ul>
         <p>
               Kami memahami bahwa kebugaran bukan hanya tentang berat badan dan otot, tetapi juga tentang kesehatan mental dan kesejahteraan Anda. Bergabunglah dengan kami untuk mengubah hidup Anda, mencapai tubuh yang Anda impikan, dan menjalani kehidupan yang lebih sehat. Bersama, kita akan mencapai hasil yang luar biasa dan mewujudkan potensi terbaik Anda.
         </p>
      </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Cek Layanan Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="fas fa-dumbbell"></i>
              <h4><a href="#">Program Latihan</a></h4>
              <p>Rencanakan latihan yang efektif untuk mencapai tujuan kebugaran Anda.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Pemantauan Kemajuan</a></h4>
              <p>Pantau dan analisis kemajuan Anda secara teratur untuk mencapai hasil optimal.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fas fa-carrot"></i>
              <h4><a href="#">Panduan Gizi</a></h4>
              <p>Dapatkan panduan gizi yang sesuai dengan kebutuhan latihan dan tujuan Anda.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-person"></i>
              <h4><a href="#">Pelatih Pribadi</a></h4>
              <p>Ambil langkah ekstra dengan pelatih pribadi untuk bimbingan yang lebih intensif.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-heart"></i>
              <h4><a href="#">Kebugaran Kardiovaskular</a></h4>
              <p>Kembangkan kebugaran jantung dan paru-paru Anda dengan latihan kardiovaskular.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fas fa-bed"></i>
              <h4><a href="#">Pentingnya Istirahat</a></h4>
              <p>Ketahui pentingnya istirahat dan pemulihan dalam program kebugaran Anda.</p>
            </div>
          </div>
        </div>

    </section>

    <!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Fasilitas</h2>
          <p>Semua Fasilitas</p>
        </div>

        <!-- Hapus bagian filter -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/air-bikes.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sepeda Udara</h4>
              <a href="assets/img/portfolio/air-bikes.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sepeda Udara"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/dumbbells.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dumbbell</h4>
              <a href="assets/img/portfolio/dumbbells.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dumbbell"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/functional-trainer.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Functional Trainer </h4>
              <a href="assets/img/portfolio/functional-trainer.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Functional Trainer "><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/jump-rope-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jump Rope </h4>
              <a href="assets/img/portfolio/jump-rope-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jump Rope "><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/lat-pulldown-machine.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lat Pulldown Machine</h4>
              <a href="assets/img/portfolio/lat-pulldown-machine.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lat Pulldown Machine"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/leg-extension-machine.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Leg Extension Machine</h4>
              <a href="assets/img/portfolio/leg-extension-machine" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Leg Extension Machine"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/reverse-hyper.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Reverse Hyper </h4>
              <a href="assets/img/portfolio/reverse-hyper.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Reverse Hyper"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/smith-machine.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Smith Machine</h4>
              <a href="assets/img/portfolio/smith-machine.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Smith Machine"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/squat-rack-power-cage.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Squat Rack/Power Cage</h4>
              <a href="assets/img/portfolio/squat-rack-power-cage.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Squat Rack/Power Cage "><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Kontak Kami</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Denah lokasi</h3>
                <!-- Ganti URL di bawah ini dengan URL peta Google Maps yang sesuai dengan lokasi Anda -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3921192093558!2d105.24241577482523!3d-5.356987453624339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c53827ed30ed%3A0xe88b97a52ff5256e!2sJl.%20Soekarno%20Hatta%20Jl.%20Centra%20No.7%2C%20Rajabasa%20Raya%2C%20Kec.%20Rajabasa%2C%20Kota%20Bandar%20Lampung%2C%20Lampung%2035142!5e0!3m2!1sid!2sid!4v1699035305447!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>Hubungi Email<br>centragym@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>No Handphone</h3>
                <p>Hubungi Nomor Ini<br>085233412355</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>


      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>GYM</h3>
              <p>
                Jl. Soekarno Hatta Jl. Centra No.7, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35142<br>
                <br>
                <strong>Telepon:</strong> 085233412355 <br>
                <strong>Email:</strong> centragym@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengembangan Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Manajemen Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemasaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desain Grafis</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter Kami</h4>
            <p>Tetapi siapa pun yang membaca banyak teks ini akan merasa bersalah karena tidak menyelesaikan tugasnya dengan baik.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Berlangganan">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Hak Cipta <strong><span>Romza Web Developer</span></strong>. Seluruh Hak Dilindungi Undang-Undang
      </div>
      <div class="credits">
        <!-- Semua tautan di footer harus tetap utuh. -->
        <!-- Anda dapat menghapus tautan hanya jika Anda membeli versi pro. -->
        <!-- Informasi lisensi: https://bootstrapmade.com/license/ -->
        <!-- Beli versi pro dengan formulir kontak PHP/AJAX berfungsi: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
