<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  $pageId   = 'mineria'; 
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
        <?php include_once '../includes/head.php'; ?>
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
    <!-- <?php include_once '../includes/preloader.php'; ?> -->

    <!--============================== Mobile Menu ============================== -->
    <?php include_once '../includes/menu-mobile.php'; ?>
    
    <!--============================== Header Area ==============================-->
    <?php include_once '../includes/header.php'; ?>
    
    <!--============================== Project Page Area  ==============================-->
    <section class="space-top space-extra2-bottom">
        <div class="th-hero-wrapper hero-2" id="hero">
            <div class="container">
                <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade","loop":false,"thumbs":{"swiper":".hero-grid-thumb"}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-inner">
                                <div class="row gx-60 gy-50">
                                    <div class="col-xl-5">
                                        <div class="hero-thumb2-1">
                                            <img src="/assets/img/carbonor/mineria/2.webp" alt="Producción de coque">
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title">
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                    <?php echo translate('hero_1_title_1'); ?></span>
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.5s">
                                                    <?php echo translate('hero_1_title_2'); ?></span>
                                            </h1>
                                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                                <?php echo translate('hero_1_text'); ?>
                                            </p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                                <a href="contacto" class="th-btn style4 th-btn-icon"><?php echo translate('hero_1_btn'); ?></a>
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
                                            <img src="/assets/img/carbonor/mineria/1.webp" alt="Infraestructura propia">
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title">
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                    <?php echo translate('hero_2_title_1'); ?></span>
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.5s">
                                                    <?php echo translate('hero_2_title_2'); ?></span>
                                            </h1>
                                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                                <?php echo translate('hero_2_text'); ?>
                                            </p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                                <a href="contacto" class="th-btn style4 th-btn-icon"><?php echo translate('hero_2_btn'); ?></a>
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
                                            <img src="/assets/img/carbonor/mineria/3.webp" alt="Minería">
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title">
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                    <?php echo translate('hero_3_title_1'); ?></span>
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.5s">
                                                    <?php echo translate('hero_3_title_2'); ?></span>
                                            </h1>
                                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">
                                                <?php echo translate('hero_3_text'); ?>
                                            </p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                                <a href="contacto" class="th-btn style4 th-btn-icon"><?php echo translate('hero_3_btn'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- miniaturas del slider -->
                <div class="row gx-60 justify-content-end">
                    <div class="col-xl-7">
                        <div class="slider-area hero-slider-thumb-wrap">
                            <div class="swiper th-slider hero-grid-thumb" data-slider-options='{"effect":"slide","loop":false,"slidesPerView":"3"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-img">
                                            <img src="/assets/img/carbonor/mineria/2.webp" alt="Producción">
                                            <span class="slider-number">01</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-img">
                                            <img src="/assets/img/carbonor/mineria/1.webp" alt="Infraestructura">
                                            <span class="slider-number">02</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-img">
                                            <img src="/assets/img/carbonor/mineria/3.webp" alt="Minería">
                                            <span class="slider-number">03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-slider-prev="#heroSlide1" class="slider-arrow style2"><img src="/assets/img/icon/arrow-left.svg" alt="prev"></button>
                            <button data-slider-next="#heroSlide1" class="slider-arrow style2 slider-next"><img src="/assets/img/icon/arrow-right.svg" alt="next"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-area-9 space overflow-hidden" id="about-sec">
                <div class="container">
                    <div class="row gx-60 align-items-center">
                        <div class="col-xl-6">
                            <div class="img-box9 mb-50 mb-xl-0">
                                <div class="img1">
                                    <img src="/assets/img/carbonor/mineria/4.webp" alt="Coque de alta calidad">
                                    <div class="img2">
                                        <img src="/assets/img/carbonor/mineria/5.webp" alt="Producción">
                                    </div>
                                </div>
                                <div class="img3">
                                    <img src="/assets/img/carbonor/mineria/6.webp" alt="Minería">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="title-area mb-15">
                                <span class="sub-title4"><?php echo translate('about_subtitle'); ?></span>
                                <h2 class="sec-title"><?php echo translate('about_title'); ?></h2>
                            </div>
                            <p class="sec-text mb-20">
                                <?php echo translate('about_text'); ?>
                            </p>
                            <h5 class="fw-medium mb-10"><?php echo translate('coal_characteristics_title'); ?></h5>
                            <p class="sec-text mb-30">
                                - <?php echo translate('coal_moisture'); ?> <br>
                                - <?php echo translate('coal_ash'); ?> <br>
                                - <?php echo translate('coal_volatile'); ?> <br>
                                - <?php echo translate('coal_fsi'); ?> <br>
                                - <?php echo translate('coal_sulfur'); ?>
                            </p>
                            <div class="about-wrap2">
                                <div class="checklist style5">
                                    <ul>
                                        <li><?php echo translate('feature_1'); ?></li>
                                        <li><?php echo translate('feature_2'); ?></li>
                                        <li><?php echo translate('feature_3'); ?></li>
                                        <li><?php echo translate('feature_4'); ?></li>
                                    </ul>
                                </div>
                                <div class="call-btn">
                                    <div class="icon-btn bg-theme">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="btn-content">
                                        <h6 class="btn-title"><?php echo translate('contact_title'); ?></h6>
                                        <span class="btn-text"><a href="tel:+573112936388">+57 311-293-6388</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!--============================== Footer Area ==============================-->
    <?php include_once '../includes/footer.php'; ?>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <?php include_once '../includes/script.php'; ?>

</body>

</html>