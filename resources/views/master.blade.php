<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title') | Crypto Market Today</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <meta property="og:title" content="@yield('og-title') | Crypto Market Today" />
<meta name="description" content="@yield('meta-description')" />
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/cryptofont.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  @include('tpl.nav')

  @yield('intro')

  <main id="main">

  @yield('content')

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>Crypto Market Today</h3>
            <p>At CMT we believe blockchains and cryptos will have a firm place in our landscape of emerging technologies.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="/about">About Us</a></li>
          <li class="{{ (request()->is('news')) ? 'active' : '' }}"><a href="/news">News</a></li>
          <li class="{{ (request()->is('crypto')) ? 'active' : '' }}"><a href="/crypto">Cryptos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            71-75 Shelton St  <br>
            Covent Garden<br>
              United States <br>
              London, WC2H 9JQ<br/>
              <strong>Email:</strong> info@crytpomarket.today<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/CryptoMarketEye" class="twitter"><i class="fa fa-twitter"></i></a>
            </div>

          </div>

         

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Crypto Market Today</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Powered by <a href="https://ke-i.co.uk">KEi Media</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/easing.min.js') }}"></script>
  <script src="{{ asset('js/mobile-nav.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <script src="{{ asset('js/counterup.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/lightbox.min.js') }}"></script>
  
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
