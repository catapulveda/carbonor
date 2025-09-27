<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'index';  // o 'index', 'servicios', etc.
  $pageFile = LANG_DIR . '/' . LANG . '/' . $pageId . '.php';
  if (file_exists($pageFile)) {
    $pageTrans = include $pageFile; 
    if (is_array($pageTrans)) {
      $translations = array_merge($translations, $pageTrans);
    }
  }
?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

    <head>
        <?php include_once './includes/head.php'; ?>
    </head>

    <body class="">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--******************************** Code Start From Here  ******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>

    <!--============================== Preloader  ==============================-->
    <?php include_once './includes/preloader.php'; ?>

    <!--============================== Mobile Menu ============================== -->
    <?php include_once './includes/menu-mobile.php'; ?>
    
    <!--============================== Header Area ==============================-->
    <?php include_once './includes/header.php'; ?>
    
    <!--============================== Hero Area ==============================-->
    <div class="th-hero-wrapper hero-2 space  bg-smoke2" id="hero">
        <div class="container">
            <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade","loop":false,"thumbs":{"swiper":".hero-grid-thumb"}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="row gx-60 gy-50">
                                <div class="col-xl-5">
                                    <div class="hero-thumb2-1">
                                        <img src="/assets/img/carbonor/inicio/1.webp" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="hero-style2">
                                        <h1 class="hero-title">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            Producción y comercialización
                                        </h1>
                                        <p class="hero-text text-justify" data-ani="slideinup" data-ani-delay="0.6s">Coque reactivo ultra bajo en fósforo (ULP < 0,015%), con calidad certificada SGS y COA por lote. Control integral de la cadena – desde la mina y la preparación, hasta hornos, cribado y despacho – para asegurar volumen, homogeneidad y continuidad.</p>
                                        <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                            <a href="/contacto" class="th-btn style4 th-btn-icon">Descurbir más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="row gx-60 gy-50">
                                <div class="col-xl-5">
                                    <div class="hero-thumb2-1">
                                        <img src="/assets/img/carbonor/inicio/2.webp" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="hero-style2">
                                        <h1 class="hero-title">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">Preparación y cribado a medida</span>
                                        </h1>
                                        <p class="hero-text text-justify" data-ani="slideinup" data-ani-delay="0.6s">Ajustamos la granulometría del coque según las necesidades de cada cliente. Contamos con áreas de cribado y despacho con báscula propia, lo que asegura precisión en cada embarque y homogeneidad en las fracciones entregadas.</p>
                                        <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                            <a href="/contacto" class="th-btn style4 th-btn-icon">Descurbir más</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="row gx-60 gy-50">
                                <div class="col-xl-5">
                                    <div class="hero-thumb2-1">
                                        <img src="/assets/img/carbonor/inicio/3.webp" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="hero-style2">
                                        <h1 class="hero-title">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">Logística nacional e internacional</span>
                                        </h1>
                                        <p class="hero-text text-justify" data-ani="slideinup" data-ani-delay="0.6s">Despachamos pedidos en Colombia por vía terrestre y realizamos exportaciones a través de los puertos de Barranquilla y Cartagena. Ofrecemos condiciones FOB y CIF, con opciones de embarque en contenedor de 40’ (big-bag) o a granel en bodega de buque.</p>
                                        <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                            <a href="/contacto" class="th-btn style4 th-btn-icon">Descurbir más</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-60 justify-content-end">
                <div class="col-xl-7">
                    <div class="slider-area hero-slider-thumb-wrap">
                        <div class="swiper th-slider hero-grid-thumb" data-slider-options='{"effect":"slide","loop":false,"slidesPerView":"3"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/carbonor/inicio/1.webp" alt="Image">
                                        <span class="slider-number">01</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/carbonor/inicio/2.webp" alt="Image">
                                        <span class="slider-number">02</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/carbonor/inicio/3.webp" alt="Image">
                                        <span class="slider-number">03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button data-slider-prev="#heroSlide1" class="slider-arrow style2"><img src="/assets/img/icon/arrow-left.svg" alt="img"></button>
                        <button data-slider-next="#heroSlide1" class="slider-arrow style2 slider-next"><img src="/assets/img/icon/arrow-right.svg" alt="img"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="about-tag">
            <div class="about-experience-tag">
                <span class="circle-title-anime">Carbonor * Energía que mueve el progreso</span>
            </div>
            <div class="about-tag-thumb">
                <img src="/assets/img/carbonor/inicio/4.webp" alt="img">
            </div>
        </div> -->
        <div class="hero-bg-shape2-1 spin shape-mockup" data-top="14%" data-left="1%">
            <img src="/assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
    </div>
    <!--======== / Hero Section ========-->
    
    <!--============================== About Area  ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="9%" data-right="13%">
            <img src="/assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xl-7 mb-50 mb-xl-0">
                    <div class="img-box2">
                        <div class="slider-area">
                            <div class="swiper th-slider about-thumb-slider" id="aboutSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1","effect":"fade"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"350","depth":"215","modifier":"1"},"centeredSlides":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img1">
                                            <img src="/assets/img/carbonor/inicio/quienes-somos/1.webp" alt="About">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img1">
                                            <img src="/assets/img/carbonor/inicio/quienes-somos/2.webp" alt="About">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img1">
                                            <img src="/assets/img/carbonor/inicio/quienes-somos/3.webp" alt="About">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img1">
                                            <img src="/assets/img/carbonor/inicio/quienes-somos/4.webp" alt="About">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-slider-next="#aboutSlider1" class="slider-arrow slider-next"><img src="/assets/img/icon/arrow-right.svg" alt="icon"></button>
                        </div>
                        <div class="about-tag">
                            <div class="about-experience-tag">
                                <span class="circle-title-anime">Carbonor * Energía que mueve el progreso</span>
                            </div>
                            <a href="https://www.youtube.com/watch?v=j6T3Y0KnwPA" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-32">
                        <span class="sub-title5 text-title"><span class="line line1"></span> Quiénes somos</span>
                        <h2 class="sec-title style2">Carbonor * Energía que mueve el progreso</h2>
                        <p class="sec-text">Carbonor es una empresa colombiana dedicada a la producción y comercialización de coque reactivo ultra bajo en fósforo (ULP < 0,015%), con calidad certificada SGS y COA por lote. Control integral de la cadena – desde la mina y la preparación, hasta hornos, cribado y despacho – para asegurar volumen, homogeneidad y continuidad.</p>
                    </div>
                    <div class="about-wrap2">
                        <div class="checklist style2">
                            <ul>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">Producción y comercialización</li>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">Preparación y cribado a medida</li>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">Logística nacional e internacional</li>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">100% Satisfaction guarantee</li>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">Calidad certificada SGS y COA por lote</li>
                                <li><img src="/assets/img/icon/checkmark.svg" alt="img">Control integral de la cadena</li>
                            </ul>
                        </div>
                        <div class="call-btn">
                            <div class="icon-btn bg-theme">
                                <img src="/assets/img/icon/phone.svg" alt="img">
                            </div>
                            <div class="btn-content">
                                <h6 class="btn-title">Llamanos 24/7</h6>
                                <span class="btn-text"><a href="tel:+57 311-293-6388">+57 311-293-6388</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-5">
                        <a href="/quienes-somos" class="th-btn style2 th-btn-icon">Más sobre Carbonor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============================== Service Area  ==============================-->
    <section class="service-area-2 space bg-smoke2" id="service-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="5%" data-left="12%">
            <img src="/assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none" data-top="-3%" data-left="5%" data-bg-src="/assets/img/shape/section_shape_2_2.jpg">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="10%" data-right="2%">
            <img src="/assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="title-area">
                        <span class="sub-title5 text-title"><span class="line line1"></span> Nuestros Servicios</span>
                        <h2 class="sec-title">Servicios que ofrecemos</h2>
                        <p class="sec-text">En Carbónor ofrecemos soluciones integrales que garantizan productividad, sostenibilidad y calidad en la extracción, comercialización y distribución de carbón mineral.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="/servicios" class="th-btn style2 th-btn-icon">Ver todos los servicios</a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-card style2">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon3-6.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="#">Sostenibilidad ambiental</a></h3>
                            <p class="box-text">Prácticas responsables que minimizan el impacto ambiental en nuestras operaciones.</p>
                            <div class="service-img img-shine">
                                <img src="/assets/img/carbonor/inicio/servicios/1.webp" alt="img">   
                                <!-- <a href="service-details.html" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="img">
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style2">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon3-6.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="#">Transporte y logística</a></h3>
                            <p class="box-text">Gestión eficiente del transporte para garantizar entregas puntuales.</p>
                            <div class="service-img img-shine">
                                <img src="/assets/img/carbonor/inicio/servicios/2.webp" alt="img">   
                                <!-- <a href="service-details.html" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="img">
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style2">
                            <div class="service-card-icon">
                                <img src="/assets/img/icon/service-icon2-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="service-details.html">Extracción y producción</a></h3>
                            <p class="box-text">Procesos eficientes y seguros en la extracción y preparación del carbón mineral.</p>
                            <div class="service-img img-shine">
                                <img src="/assets/img/carbonor/inicio/servicios/3.webp" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style2">
                        <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon3-5.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="#">Comercialización</a></h3>
                            <p class="box-text">Suministro confiable de carbón para diferentes sectores industriales y energéticos.</p>
                            <div class="service-img img-shine">
                                <img src="/assets/img/carbonor/inicio/servicios/4.webp" alt="img">
                                <!-- <a href="service-details.html" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="img">
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--============================== Gallery Area  ==============================-->
    <div class="">
        <div class="bg-white space">
            <div class="gallery-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="32%" data-right="37%">
                <img src="/assets/img/shape/section_shape_2_1.jpg" alt="img">
            </div>
            <div class="gallery-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none" data-top="16%" data-right="22%" data-bg-src="/assets/img/shape/section_shape_2_2.jpg"></div>
            <div class="gallery-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="18%" data-left="10%">
                <img src="/assets/img/shape/section_shape_2_3.jpg" alt="img">
            </div>
            <div class="gallery-bg-shape2-4 wave-anim shape-mockup d-xl-block d-none" data-bottom="16%" data-left="10%" data-bg-src="/assets/img/shape/section_shape_2_2.jpg"></div>
            <div class="gallery-bg-shape2-5 spin shape-mockup d-xl-block d-none" data-bottom="15%" data-right="32%">
                <img src="/assets/img/shape/section_shape_2_1.jpg" alt="img">
            </div>
            <div class="container th-container">
                <div class="gallery-wrap1">
                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-8 order-md-2">
                            <div class="title-area mb-md-0 text-center">
                                <span class="sub-title5 text-title justify-content-center"><span class="line line1"></span> Trabaja con nosotros<span class="line line2"></span></span>
                                <h2 class="sec-title">Contacta con nosotros</h2>
                                <div class="btn-wrap mt-4 justify-content-center">
                                    <a href="/contacto" class="th-btn mb-0 style4 th-btn-icon">Contacta con nosotros</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 order-md-1">
                            <ul class="gallery-list-1">
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/1.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/1.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/2.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/2.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/3.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/3.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 order-md-3">
                            <ul class="gallery-list-2">
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/4.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/4.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/5.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/5.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                                <li class="gallery-card">
                                    <a class="popup-image" href="/assets/img/carbonor/inicio/galeria/6.webp">
                                        <img src="/assets/img/carbonor/inicio/galeria/6.webp" alt="img">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--============================== Contact Area ==============================-->
    <div class="space bg-smoke2 position-relative overflow-hidden" id="contact-sec">
        <div class="contact-bg-shape1-1 jump shape-mockup" data-bottom="30%" data-left="2%">
            <img src="/assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-5">
                    <div class="title-area">
                            <h2 class="sec-title">Información de Contacto</h2>
                            <p class="text-justify">En Carbones Norte-Santandereanos S.A.S. (Carbónor) estamos comprometidos con la calidad, la sostenibilidad y la eficiencia en la producción y distribución de coque. Contáctanos para más información.</p>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/location-dot.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Ubicación:</h6>
                            <p class="about-contact-details-text">Cúcuta, Norte de Santander</p>
                            <p class="about-contact-details-text">Colombia</p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Teléfono:</h6>
                            <p class="about-contact-details-text"><a href="tel:+573112936388">+57 311-293-6388</a></p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Correo:</h6>
                            <p class="about-contact-details-text"><a href="mailto:comercial@carbonor.com.co">comercial@carbonor.com.co</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map">
            <div class="contact-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.417394317908!2d-72.49638482633819!3d7.955745204867489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e665aec7d6f040d%3A0xbecdf4e4219c276e!2sCarbonor%20S.A.S!5e0!3m2!1ses-419!2sco!4v1757257495640!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-map-address">
                <div class="thumb">
                    <img src="assets/img/property/property_inner_1.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">Dirección:</h4>
                    <p class="text">Cúcuta, Norte de Santander – Colombia</p>
                    <h4 class="title">CEO:</h4>
                    <p class="text">Arturo González</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--============================== Popup Modal v1 ============================== -->
    <div class="th-modal modal fade allow-natural-scroll" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="icon-btn btn-close bg-title-dark" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                    <div class="page-single bg-title-dark">
                        <div class="page-img mb-30">
                            <img class="w-100 rounded-20" src="/assets/img/project/project_pop1_1.png" alt="portfolio Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title text-white fw-medium">Where Visibility Meets Success</h2>
                            <div class="row gy-30">
                                <div class="col-xl-7">
                                    <p class="mb-20 text-light">The timeline varies depending on the complexity of the project. Simple projects may take a few weeks, while more complex ones could extend to several months. Timelines are influenced by factors like scope, feedback iterations, and client responsiveness.</p>

                                    <p class="mb-xl-4 mb-0 text-light">Project timelines vary based on complexity and scope. Small projects may take a few weeks, while larger ones could span several months. Timelines are established during project kickoff. We use a range of industry-standard tools such as Sketch.</p>
                                </div>
                                <div class="col-xl-5">
                                    <div class="checklist">
                                        <ul>
                                            <li class="text-light"><strong>Service Category:</strong> Rubix Carabil Tower</li>
                                            <li class="text-light"><strong>Clients:</strong> David Malan</li>
                                            <li class="text-light"><strong>Project Date:</strong> 13 June, 2020</li>
                                            <li class="text-light"><strong>Avenue End Date:</strong> 22 July, 2023</li>
                                            <li class="text-light"><strong>Locations:</strong> NewYork - 2546 Firs, USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-30 gx-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img mb-0">
                                        <img class="w-100 rounded-20" src="/assets/img/project/project_pop2_1.png" alt="portfolio Image">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="box-title text-white fw-medium">Services Benefits:</h4>
                                    <p class="text-light">We can do both. We can adhere to existing brand guidelines, ensuring consistency, or help develop new ones if a client is looking for a fresh identity. Our goal is to align the UI/UX design with the brand's overall strategy product meets the needs.</p>
                                    <div class="checklist style3">
                                        <ul>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We use the latest diagnostic equipment</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Automotive service our clients receive</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We are a member of Professional Service</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Digital how will activities impact traditional</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Architect and technical engineer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--============================== Footer Area ==============================-->
    <?php include_once './includes/footer.php'; ?>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <div class="floating-wpp"></div>

    <!--============================== All Js File ============================== -->
    <?php include_once './includes/script.php'; ?>
    <script>
        // $(document).ready(function() {
        //     $('.floating-wpp').floatingWhatsApp({
        //         phone: '+573112936388',
        //         popupMessage: 'Hola, ¿en qué podemos ayudarte?',
        //     });
        // });

        $(function () {
            $('.floating-wpp').floatingWhatsApp({
                phone: '573112936388',
                popupMessage: 'Hola, ¿en qué podemos ayudarte?',
                showPopup: true,
                message: 'Hola, me interesa conocer más sobre los servicios de CARBONOR',
                headerTitle: 'CARBONOR - WhatsApp',
                position: 'left',
                showOnIE: false,
                size: '60px',
                backgroundColor: '#25D366',
                headerColor: '#128C7E',
                zIndex: 9999999
            });
        });
    </script>
    </body>

</html>