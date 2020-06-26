<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecotech</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('anyar') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('anyar') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('anyar') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v2.1.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">ecotech@gmail.com</a></li>
          <li><i class="icofont-phone"></i> +62813 6388 3325</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 5pm Sat 9am-3pm</li>
        </ul>
      </div>
      <div class="cta">
        <a href="#about" class="scrollto">Daftar</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

<h1 class="logo mr-auto"><a href="#header" class="scrollto">Ecotech</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
    <li class="{{ request()->is('daftar/daftar_form') ? 'active' : '' }}"><a href="{{ route('daftar.form') }}">Pendaftaran</a></li>
    <li class="{{ request()->is('form-login') ? 'active' : '' }}"><a href="{{ url('form-login') }}">Login</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="#team">Team</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li class="drop-down"><a href="">Services </a>
    
      <ul>

        <li class="drop-down"><a href="#">Web Development</a>
          <ul>
            <li><a href="#">Website Company Profile</a></li>
            <li><a href="#">Website E-Commerce</a></li>
           
          </ul>
        </li>
        <li class="drop-down"><a href="#">Video & Graphic Design</a>
          <ul>
            <li><a href="#">Website Design</a></li>
            <li><a href="#">Logo Design</a></li>
            <li><a href="#">Banner Design</a></li>
            <li><a href="#">Brocure Design</a></li>
            <li><a href="#">Card Design</a></li>
            <li><a href="#">Custom Design</a></li>           
          </ul>
          <li class="drop-down"><a href="#">Digital Marketing</a>
          <ul>
            <li><a href="#">Search Engine Optimization</a></li>
            <li><a href="#">Social Media Ads</a></li>
            <li><a href="#">Video Animation</a></li>
            <li><a href="#">Website Management</a></li>
            <li><a href="#">Social Media Management</a></li>
           
          </ul>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>

  </ul>
</nav><!-- .nav-menu -->

</div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Kenapa  <span>Ecotech?</span></h2>
          <p class="animate__animated animate__fadeInUp">Kami Membantu anda dalam dunia digital.Membangun Website,Desain Grafik,Membangun Brand bisnis dan Digital Marketing untuk bisnis Anda.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Layanan It Profesional</h2>
          <p class="animate__animated animate__fadeInUp">We formed ideas and help build brand & technology into profitable business by delivers meaningful impact in everything we do.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
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

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                Jl.Barau-Barau 1 <br>
               Jambi , 36132<br>
               Indonesia <br><br>
              <strong>Phone:</strong> +62 813 6388 3325<br>
              <strong>Email:</strong> ecotech@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Ecotech</h3>
            <p>Layanan Design,Web Development & Digital Marketing Berkualitas dan Terpercaya..</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ecotech</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        Login Admin <a href="{{url('login')}}">Login</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('anyar') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('anyar') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('anyar') }}/assets/js/main.js"></script>

</body>

</html>