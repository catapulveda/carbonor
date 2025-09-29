<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'quienes-somos';
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


    <!--******************************** Code Start From Here ******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>
    
    <!--============================== Preloader  ==============================-->
    <?php include_once '../includes/preloader.php'; ?>

    <!--============================== Mobile Menu ============================== -->
    <?php include_once '../includes/menu-mobile.php'; ?>
    
    <!--============================== Header Area ==============================-->
    <?php include_once '../includes/header.php'; ?>

    <!--============================== About Area ==============================-->
    <div class="overflow-hidden space-top space-bottom bg-smoke2" id="about-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title"><?php echo translate('about_title'); ?></h2>
                        <p class="sec-text">
                            <?php echo translate('about_text'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="/contacto" class="th-btn style4 btn-sm th-btn-icon"><?php echo translate('about_btn'); ?></a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="img-box1">
                        <div class="img1 img-shine" data-mask-src="/assets/img/shape/about-1-mask.png">
                            <img src="/assets/img/carbonor/quienes-somos/1.webp" alt="Producción de coque en Carbónor">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-box1">
                        <div class="img1 img-shine" data-mask-src="/assets/img/shape/about-1-mask.png">
                            <img src="/assets/img/carbonor/quienes-somos/2.webp" alt="Hornos tipo colmena Carbónor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-60">
                <div class="row gy-40 flex-row-reverse">
                    <div class="col-xl-3 text-xl-end">
                        <div class="about-tag">
                            <div class="about-experience-tag">
                                <span class="circle-title-anime text-title"><?php echo translate('about_experience'); ?></span>
                            </div>
                            <div class="about-tag-thumb">
                                <img src="/assets/img/carbonor/quienes-somos/5.webp" alt="Experiencia Carbónor">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-wrap1">
                            <p class="about-text text-title text-justify">
                                <?php echo translate('about_production_text'); ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--============================== Service Area ==============================-->
    <section class="service-area-1 overflow-hidden space-bottom pt-80">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="/assets/img/icon/service-icon1-4.png" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a class="text-title" href="service-details.html"><?php echo translate('service_1_title'); ?></a></h3>
                            <p class="box-text text-body text-justify"><?php echo translate('service_1_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="/assets/img/icon/service-icon1-5.png" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a class="text-title" href="service-details.html"><?php echo translate('service_2_title'); ?></a></h3>
                            <p class="box-text text-body text-justify"><?php echo translate('service_2_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="/assets/img/icon/service-icon1-6.png" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a class="text-title" href="service-details.html"><?php echo translate('service_3_title'); ?></a></h3>
                            <p class="box-text text-body text-justify"><?php echo translate('service_3_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================== Process Area ==============================-->
    <section class="space bg-black2 position-relative" id="process-area2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-white"><?php echo translate('process_title'); ?></h2>
                        <p class="sec-text text-white text-justify"><?php echo translate('process_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="process-card2" data-bg-src="/assets/img/bg/process-card2-bg.png">
                        <div class="box-icon">
                            <img src="/assets/img/icon/process_card_2_1.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><?php echo translate('process_1_title'); ?></h3>
                            <p class="box-text text-justify"><?php echo translate('process_1_text'); ?></p>
                            <p class="box-number"><?php echo translate('process_1_step'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="process-card2" data-bg-src="/assets/img/bg/process-card2-bg.png">
                        <div class="box-icon">
                            <img src="/assets/img/icon/process_card_2_2.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><?php echo translate('process_2_title'); ?></h3>
                            <p class="box-text text-justify"><?php echo translate('process_2_text'); ?></p>
                            <p class="box-number"><?php echo translate('process_2_step'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="process-card2" data-bg-src="/assets/img/bg/process-card2-bg.png">
                        <div class="box-icon">
                            <img src="/assets/img/icon/process_card_2_3.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><?php echo translate('process_3_title'); ?></h3>
                            <p class="box-text text-justify"><?php echo translate('process_3_text'); ?></p>
                            <p class="box-number"><?php echo translate('process_3_step'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================== Video Area ==============================-->
    <div class="bg-smoke3">
        <div class="container">
            <div class="video-area-1-1 space-bottom position-relative" data-sec-pos="top-half" data-pos-for="#process-area2">
                <div class="video-wrap1 style2 overflow-hidden">
                <div class="video-box1" data-overlay="black2" data-opacity="3">
                        <img src="/assets/img/carbonor/quienes-somos/3.webp" alt="Carbónor Video">
                        <a href="https://www.youtube.com/watch?v=j6T3Y0KnwPA" class="play-btn style3 popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="video-wrap-details bg-white">
                        <div class="title-area mb-45">
                            <h2 class="sec-title"><?php echo translate('why_title'); ?></h2>
                            <p class="sec-text"><?php echo translate('why_text'); ?></p>
                        </div>
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="why-info-card style2">
                                    <div class="box-icon">
                                        <img src="/assets/img/icon/checkmark2.svg" alt="img">
                                    </div>
                                    <h4 class="box-title"><?php echo translate('why_1'); ?></h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-info-card style2">
                                    <div class="box-icon">
                                        <img src="/assets/img/icon/checkmark2.svg" alt="img">
                                    </div> 
                                    <h4 class="box-title"><?php echo translate('why_2'); ?></h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-info-card style2">
                                    <div class="box-icon">
                                        <img src="/assets/img/icon/checkmark2.svg" alt="img">
                                    </div>
                                    <h4 class="box-title"><?php echo translate('why_3'); ?></h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-info-card style2">
                                    <div class="box-icon">
                                        <img src="/assets/img/icon/checkmark2.svg" alt="img">
                                    </div>
                                    <h4 class="box-title"><?php echo translate('why_4'); ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!--============================== All Js File ============================== -->
    <?php include_once '../includes/script.php'; ?>
</body>

</html>