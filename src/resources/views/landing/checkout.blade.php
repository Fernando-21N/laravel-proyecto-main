<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Checkout | La Hierbas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="{{ asset('assets/css/main2.css') }}" rel="stylesheet" type="text/css">
  
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

  <!--====== Logo Icon ======-->

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/slick.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/LineIcons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/materialdesignicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/jquery-ui.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/nice-select.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/default.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/checkout/css/style.css') }}">

</head>

<body>

    <HEAD>
        <link href="{{ url('css/main2.css') }}" rel="stylesheet" type="text/css">
    </HEAD>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" >
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>El sitio web perfecto para el amante de los coches </h1>
            <h2>Disfruta de todas las novedades de todo tipo de coches desde deportivos hasta clásicos y siente la adrenalina de la conducción</h2> 
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/landing/assets/img/Audi.png') }}" class="img-fluid" alt=""> 
            </div>
        
        </div>

    </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CAR RENTING</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1 mt-50">
                        <ul id="checkout-steps">
                            <li data-vjstepno="1">
                                <h6 class="title">Detalles personales </h6>
                                <section class="checkout-steps-form-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Nombre de Usuario</label>
                                                <div class="row">
                                                    <div class="col-md-6 form-input form">
                                                        <input type="text" placeholder="Nombre">
                                                    </div>
                                                    <div class="col-md-6 form-input form">
                                                        <input type="text" placeholder="Apellidos">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Email</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Número de Teléfono</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Teléfono">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Dirección del envío</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Dirección">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Ciudad</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Ciudad">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Código Postal</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Código Postal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Pais</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Pais">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select-elements select-style-2 mt-30">
                                                <label>Región</label>
                                                <div class="select-items select">
                                                    <select>
                                                        <option value="0">seleccionar</option>
                                                        <option value="1">seleccionar opción 01</option>
                                                        <option value="2">seleccionar opción 02</option>
                                                        <option value="3">seleccionar opción 03</option>
                                                        <option value="4">seleccionar opción 04</option>
                                                        <option value="5">seleccionar opción 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-checkbox checkbox-style-3">
                                                <input type="checkbox" id="checkbox-3">
                                                <label for="checkbox-3"><span></span></label>
                                                <p>Mi dirección de envío y de correo es la misma.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="vjsteps_nxt main-btn primary-btn">Siguiente paso</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                            <li data-vjstepno="2">
                                <h6 class="title">Dirección de envío</h6>
                                <section class="checkout-steps-form-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Nombre de Usuario</label>
                                                <div class="row">
                                                    <div class="col-md-6 form-input form">
                                                        <input type="text" placeholder="Nombre">
                                                    </div>
                                                    <div class="col-md-6 form-input form">
                                                        <input type="text" placeholder="Apellidos">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Email</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Número de Teléfono</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Teléfono">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Mailing Address</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Mailing Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Ciudad</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Ciudad">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Código Postal</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Código Postal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Pais</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Pais">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select-elements select-style-2 mt-30">
                                                <label>Región</label>
                                                <div class="select-items select">
                                                    <select>
                                                        <option value="0">seleccionar</option>
                                                        <option value="1">Seleccionar opción 01</option>
                                                        <option value="2">Seleccionar opción 02</option>
                                                        <option value="3">Seleccionar opción 03</option>
                                                        <option value="4">Seleccionar opción 04</option>
                                                        <option value="5">Seleccionar opción 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-payment-option">
                                                <h6 class="heading-6 font-weight-400 payment-title">Select Delivery
                                                    Option
                                                </h6>
                                                <div class="payment-option-wrapper">
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" checked id="shipping-1">
                                                        <label for="shipping-1">
                                                            <img src="assets/images/shiping/shipping-1.png"
                                                                alt="Sipping">
                                                            <p>Standard Shipping</p>
                                                            <span class="price">$10.50</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-2">
                                                        <label for="shipping-2">
                                                            <img src="assets/images/shiping/shipping-2.png"
                                                                alt="Sipping">
                                                            <p>Standard Shipping</p>
                                                            <span class="price">$10.50</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-3">
                                                        <label for="shipping-3">
                                                            <img src="assets/images/shiping/shipping-3.png"
                                                                alt="Sipping">
                                                            <p>Standard Shipping</p>
                                                            <span class="price">$10.50</span>
                                                        </label>
                                                    </div>
                                                    <div class="single-payment-option">
                                                        <input type="radio" name="shipping" id="shipping-4">
                                                        <label for="shipping-4">
                                                            <img src="assets/images/shiping/shipping-4.png"
                                                                alt="Sipping">
                                                            <p>Standard Shipping</p>
                                                            <span class="price">$10.50</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="steps-form-btn">
                                                <button class="vjsteps_prev main-btn primary-btn">previous</button>
                                                <a href="#" class="main-btn primary-btn">Guardar y continuar</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar pt-20">
                        <div class="checkout-sidebar-coupon mt-30">
                            <p>Introducir Cupón de Descuento</p>
                            <form action="#">
                                <div class="single-form form-default">
                                    <div class="form-input form">
                                        <input type="text" placeholder="Código de Descuento">
                                    </div>
                                    <button class="main-btn primary-btn">Comprobar</button>
                                </div>
                            </form>
                        </div>
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class="title">Resumen de Compra</h5>
                            <div class="sub-total-price">
                                <div class="total-price">
                                    <p class="value">Productos:</p>
                                    <p class="price">28.40 €</p>
                                </div>
                                <div class="total-price shipping">
                                    <p class="value">Gastos de Envío:</p>
                                    <p class="price">10.50 €</p>
                                </div>
                                <div class="total-price discount">
                                    <p class="value">Descuento:</p>
                                    <p class="price">10.50 €</p>
                                </div>
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Importe Total:</p>
                                    <p class="price">28.40 €</p>
                                </div>
                            </div>
                            <div class="price-table-btn">
                                <a href="javascript:void(0)" class="main-btn primary-btn btn-block">Verificar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-payment-style-1 mt-50">
                        <h6 class="title">Método de Pago</h6>
                        <div class="checkout-payment-form">
                            <div class="single-form form-default">
                                <label>Titular de la Tarjeta</label>
                                <div class="form-input form">
                                    <input type="text" placeholder="Nombre Titular">
                                </div>
                            </div>
                            <div class="single-form form-default">
                                <label>Número de la Tarjeta</label>
                                <div class="form-input form">
                                    <input id="credit-input" type="text" placeholder="0000 0000 0000 0000">
                                    <img src="{{ asset('assets/landing/assets/img/card.png') }}" alt="card">
                                </div>
                            </div>
                            <div class="payment-card-info">
                                <div class="single-form form-default">
                                    <label>Fecha Expiración</label>
                                    <div class="expiration d-flex">
                                        <div class="form-input form">
                                            <input type="text" placeholder="MM">
                                        </div>
                                        <div class="form-input form">
                                            <input type="text" placeholder="AAAA">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default">
                                    <label>CVC/CVV <span><i class="mdi mdi-alert-circle"></i></span></label>
                                    <div class="form-input form">
                                        <input type="text" placeholder="***">
                                    </div>
                                </div>
                            </div>
                            <div class="single-form form-default">
                                <button class="main-btn primary-btn"><a href="./error500.html">Compra Ahora</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar-accordion mt-50">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">Seleccionar producto</a>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-table table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="assets\images\productos\agave.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title"><a href="#">Agave Azul</a></h5>
                                                                    <ul>
                                                                        <li><span>Eco</span></li>
                                                                        <li><span>Gr</span></li>
                                                                       
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">8.00€</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="assets\images\productos\glucosamine.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title"><a href="#">Glucosamina</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Eco</span></li>
                                                                        <li><span>Gr</span></li>
                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">6.40€</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="assets\images\productos\valeriana.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title"><a href="#">Valeriana</a></h5>
                                                                    <ul>
                                                                        <li><span>Eco</span></li>
                                                                        <li><span>Gr</span></li>
                                                
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">3.00€</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="assets\images\productos\haloperidol.jpg"
                                                                        alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title"><a href="#">Haloperidol</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Eco</span></li>
                                                                        <li><span>Gr</span></li>
                                                      
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">11.00€</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="pricing-table">
                                            <div class="sub-total-price">
                                                <div class="total-price">
                                                    <p class="value">Total:</p>
                                                    <p class="price">28.40€</p>
                                                </div>
                        
                                                <div class="total-price discount">
                                                    <p class="value">Promociones:</p>
                                                    <p class="price">0.00€</p>
                                                </div>
                                            </div>
                                            <div class="total-payable">
                                                <div class="payable-price">
                                                    <p class="value">Resumen:</p>
                                                    <p class="price">28.40€</p>
                                                </div>
                                            </div>
                                            <div class="price-table-btn">
                                                <a href="javascript:void(0)" class="main-btn primary-btn-border">Editar método de pago</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Detalles</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-sidebar-details">
                                            <div class="single-details">
                                                <p class="info">Elba Jinazo</p>
                                                <p class="info"><a href="/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="01656e646b696e6f41646c60686d2f626e6c">[email&#160;protected]</a>
                                                </p>
                                                <p class="info">+34 656 789 0234</p>
                                            </div>
                                            <div class="single-details">
                                                <h6 class="title">Dirección de Envío</h6>
                                                <p class="info">Calle de Matias Prats nº 5<br> Cuenca.
                                                </p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="javascript:void(0)" class="main-btn primary-btn-border">Editar
                                                    información</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Dirección de Envío</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="checkout-sidebar-details">
                                            <div class="single-details">
                                                <p class="info">Jhon Elpo</p>
                                                <p class="info"><a href="/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="e1858e848b898e8fa1848c80888dcf828e8c">[email&#160;protected]</a>
                                                </p>
                                                <p class="info">+34 656 789 0234</p>
                                            </div>
                                            <div class="single-details">
                                                <h6 class="title">Dirección de Envío</h6>
                                                <p class="info">Calle de Santiago Abascal <br> Cataluña profunda.
                                                    </p>
                                            </div>
                                            <div class="details-btn">
                                                <a href="javascript:void(0)" class="main-btn primary-btn-border">Editar
                                                    información</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
 <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

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

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
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


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/checkout/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/checkout/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <script src="{{ asset('assets/checkout/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery-vj-accordion-steps.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/jquery.formatter.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/checkout/js/main.js') }}"></script>


</body>

</html>