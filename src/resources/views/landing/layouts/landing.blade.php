<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Car Renting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/landing/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
<<<<<<< HEAD
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CAR RENTING</a></h1>
=======
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">CAR RENTING</a></h1>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
<<<<<<< HEAD
          <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li class="dropdown"><a href="#"><span>Veh??culos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#alquilaa">FERRARI TESTARROSA</a></li>
              <li><a href="#alquilaa">FORD MUSTANG SHELBY GT500</a></li>
              <li><a href="#alquilaa">LAMBORGHINI CENTENARIO ROADSTER</a></li>
              <li><a href="#alquilaa">BUGATTI VEYRON</a></li>
              <li><a href="#alquilaa">AUDI R8</a></li>
            </ul>
          </li>
=======
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('contenido')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscr??bete</h4>
            <p>Dejanos tu correo electr??nico para ser el primero en recibir informaci??n acerca de nuestos coches.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscr??bete">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Car Renting</h3>
            <p>
              Santa Engracia 123<br>
              Madrid, 28053<br>
              Espa??a <br><br>
              <strong>Phone:</strong> +34 6589 554 885<br>
              <strong>Email:</strong> info_email@carenting.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informaci??n Legal</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Condiciones del servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Pol??tica de Privacidad</a></li>
            </ul>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pol??tica de Privacidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    A trav??s de este sitio web no se recaban datos de car??cter personal de los usuarios sin su conocimiento, ni se ceden a terceros.<br/>

                    En este sentido, el Titular garantiza el cumplimiento de la normativa vigente en materia de protecci??n de datos personales, reflejada en la Ley Org??nica 3/2018, de 5 de diciembre, de Protecci??n de Datos Personales y de Garant??a de Derechos Digitales (LOPD GDD). Cumple tambi??n con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protecci??n de las personas f??sicas (RGPD).<br/><br/>

                    El uso de sitio Web implica la aceptaci??n de esta Pol??tica de Privacidad as?? como las condiciones incluidas en el Aviso Legal.<br/><br/>

                    Seg??n la directiva de la UE, las Cookies que requieren el consentimiento informado por parte del usuario son las Cookies de anal??tica y las de publicidad y afiliaci??n, quedando exceptuadas las de car??cter t??cnico y las necesarias para el funcionamiento del sitio Web o la prestaci??n de servicios expresamente solicitados por el usuario.
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes sociales</h4>
            <p>Siguenos en nuestras redes sociales.</p>
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

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Car Renting</span></strong>.
      </div>
      <div class="credits"> All Rights Reserved </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/landing/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/landing/assets/js/main.js') }}"></script>

  



</body>

</html>