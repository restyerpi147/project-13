<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url ('public')}}/assets/img/favicon.png" rel="icon">
  <link href="{{ url ('public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url ('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url ('public')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> 08967522451
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="home">Restaurant 24</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="{{url('/')}}">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ url('login')}}">Login</a></li>
          <li><a href="#menu">Check Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          @include('template.utils.notif')
          <h1>Welcome to <span>Restaurant 24 </span></h1>
          <h2>Enjoy the menu available at Restaurant 24</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Check Out</a>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Daftar Pesanan Anda</p>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 menu-item filter-starters">
            <table class="table bg-light">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Nama Makanan</th>
                  <th>Harga Makanan</th>
                  <th>Jumlah Pesanan</th>
                  <th>Total Harga Pesanan</th>
                </tr>
              </thead>
              <tbody>
@foreach($list_pesanan as $pesanan)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{url('bayar', $pesanan->id)}}/edit" class="btn btn-warning btn-sm"><i class="icofont-edit"></i></a>
                      @include('template.utils.clientdel', ['url' => url('bayar', $pesanan->id)])
                    </div>
                  </td>
                  <td>{{$pesanan->nama}}</td>
                  <td>Rp. {{number_format($pesanan->harga)}}</td>
                  <td>{{$pesanan->jumlah}}</td>
                  <td>Rp. {{number_format($pesanan->harga*$pesanan->jumlah)}}</td>
                </tr>
@endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurant 24</h3>
              <p>
                Jalan Gatot Subroto <br>
                Kab. Ketapang<br><br>
                <strong>Phone:</strong> 08967522451<br>
                <strong>Email:</strong> info@example.com<br>
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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurant 24</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url ('public')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ url ('public')}}/assets/js/main.js"></script>

</body>

</html>