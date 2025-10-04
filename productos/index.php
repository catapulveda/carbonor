<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'productos'; 
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
            <?php include_once '../includes/preloader.php'; ?>

            <!--============================== Mobile Menu ============================== -->
            <?php include_once '../includes/menu-mobile.php'; ?>
            
            <!--============================== Header Area ==============================-->
            <?php include_once '../includes/header.php'; ?>
            
            <!--============================== Service Page Area ==============================-->
            <section class="space-top space-extra2-bottom pb-5">
                <div class="container">
                    <div class="row gy-4">
                        <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-8">
                                    <div class="title-area mb-0">
                                        <span class="sub-title3 before-none"><?php echo translate('services_subtitle'); ?></span>
                                        <h2 class="sec-title"><?php echo translate('services_title'); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center gy-5 mt-0">
                            <!-- Coque 10x30 mm -->
                            <div class="col-md-6 col-xl-4">
                                <div class="property-card6">
                                    <div class="property-card-thumb img-shine">
                                        <img src="/assets/img/carbonor/servicios/2.webp" alt="Coque 10x30 mm">
                                    </div>
                                    <div class="property-card-details">
                                        <h4 class="property-card-title"><a href="/productos/coque-10x30-mm/">Coque 10x30 mm</a></h4>
                                        <div class="property-btn-wrap">
                                            <div class="btn-wrap">
                                                <a href="/productos/coque-10x30-mm/" class="th-btn style-border8 th-btn-icon">Ver Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Coque 2x3 mm -->
                            <div class="col-md-6 col-xl-4">
                                <div class="property-card6">
                                    <div class="property-card-thumb img-shine">
                                        <img src="/assets/img/carbonor/servicios/1.webp" alt="Coque 2x3 mm">
                                    </div>
                                    <div class="property-card-details">
                                        <h4 class="property-card-title"><a href="/productos/coque-2x3-mm/">Coque 2x3 mm</a></h4>
                                        <div class="property-btn-wrap">
                                            <div class="btn-wrap">
                                                <a href="/productos/coque-2x3-mm/" class="th-btn style-border8 th-btn-icon">Ver Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Coque 20x80 mm -->
                            <div class="col-md-6 col-xl-4">
                                <div class="property-card6">
                                    <div class="property-card-thumb img-shine">
                                        <img src="/assets/img/carbonor/servicios/2.webp" alt="Coque 20x80 mm">
                                    </div>
                                    <div class="property-card-details">
                                        <h4 class="property-card-title"><a href="/productos/coque-20x80-mm/">Coque 20x80 mm</a></h4>
                                        <div class="property-btn-wrap">
                                            <div class="btn-wrap">
                                                <a href="/productos/coque-20x80-mm/" class="th-btn style-border8 th-btn-icon">Ver Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Coque 6x10 mm -->
                            <div class="col-md-6 col-xl-4">
                                <div class="property-card6">
                                    <div class="property-card-thumb img-shine">
                                        <img src="/assets/img/carbonor/servicios/1.webp" alt="Coque 6x10 mm">
                                    </div>
                                    <div class="property-card-details">
                                        <h4 class="property-card-title"><a href="/productos/coque-6x10-mm/">Coque 6x10 mm</a></h4>
                                        <div class="property-btn-wrap">
                                            <div class="btn-wrap">
                                                <a href="/productos/coque-6x10-mm/" class="th-btn style-border8 th-btn-icon">Ver Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Fino de Coque Reactivo -->
                            <div class="col-md-6 col-xl-4">
                                <div class="property-card6">
                                    <div class="property-card-thumb img-shine">
                                        <img src="/assets/img/carbonor/servicios/2.webp" alt="Fino de Coque Reactivo">
                                    </div>
                                    <div class="property-card-details">
                                        <h4 class="property-card-title"><a href="/productos/fino-de-coque/">Fino de Coque Reactivo</a></h4>
                                        <div class="property-btn-wrap">
                                            <div class="btn-wrap">
                                                <a href="/productos/fino-de-coque/" class="th-btn style-border8 th-btn-icon">Ver Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--============================== Contact Area ==============================-->
            <div class="overflow-hidden space-bottom contact-area-4-2 z-index-common" id="contact-sec">
                <div class="container th-container2">
                    <div class="contact-wrap4 bg-smoke4">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="appointment-wrap2">
                                    <span class="sub-title3"><?php echo translate('contact_subtitle'); ?></span>
                                    <h2 class="form-title"><?php echo translate('contact_title'); ?></h2>
                                    <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                                        <div class="row">
                                            <div class="form-group style-border2 style-radius col-12">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo translate('form_name_placeholder'); ?>">
                                                <i class="fal fa-user"></i>
                                            </div>
                                            <div class="form-group style-border2 style-radius col-12">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo translate('form_email_placeholder'); ?>">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="form-group style-border2 style-radius col-md-12">
                                                <select name="subject" id="subject" class="form-select">
                                                    <option value="" disabled selected hidden><?php echo translate('form_service_placeholder'); ?></option>
                                                    <option value="Producción de Coque"><?php echo translate('service_option_1'); ?></option>
                                                    <option value="Infraestructura"><?php echo translate('service_option_2'); ?></option>
                                                    <option value="Logística y Exportación"><?php echo translate('service_option_3'); ?></option>
                                                    <option value="Ventas a Terceros"><?php echo translate('service_option_4'); ?></option>
                                                    <option value="Especificaciones Técnicas"><?php echo translate('service_option_5'); ?></option>
                                                </select>
                                                <i class="fal fa-angle-down"></i>
                                            </div>
                                            <div class="col-12 form-group style-border2 style-radius">
                                                <i class="far fa-comments"></i>
                                                <textarea name="message" placeholder="<?php echo translate('form_message_placeholder'); ?>" class="form-control"></textarea>
                                            </div>
                                            <div class="col-12 form-btn mt-4">
                                                <button class="th-btn style3"><?php echo translate('form_submit_btn'); ?> 
                                                    <span class="btn-icon">
                                                        <img src="assets/img/icon/paper-plane.svg" alt="img">
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="form-messages mb-0 mt-3"></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-thumb4-1">
                                    <img class="w-100" src="/assets/img/carbonor/servicios/4.webp" alt="img">
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