<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'fino-de-coque';  // Cambiado de 'quienes-somos' a 'fino-de-coque'
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
        <?php include_once '../../includes/head.php'; ?>
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
    <?php include_once '../../includes/preloader.php'; ?>

    <!--============================== Mobile Menu ============================== -->
    <?php include_once '../../includes/menu-mobile.php'; ?>

    <!--============================== Header Area ==============================-->
    <?php include_once '../../includes/header.php'; ?>

    <!--============================== Service Page Area ==============================-->
    <section class="space-top space-extra2-bottom bg-smoke2">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-12 col-lg-12">
                    <div class="page-single mb-40">
                        <!-- <div class="page-img mb-25">
                            <img src="/assets/img/carbonor/servicios/2.webp" alt="Service Image">
                        </div> -->
                        <div class="page-content">
                            <h2 class="page-title fw-semibold"><?php echo translate('page_title'); ?></h2>
                            <p class="mb-30 text-justify"><?php echo translate('main_description_1'); ?></p>
                            <p class="mb-50 text-justify"><?php echo translate('main_description_2'); ?></p>
                            
                            <!-- <p class="mb-30">We have the experience and expertise to deliver a variety of building designs for a wide range of clients. We are used to working on complex building projects with challenging programmers and high customer expectations. Our team works closely with our clients and professional advisors to understand the requirements.</p> -->
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <h4 class="fw-semibold"><?php echo translate('process_title'); ?></h4>
                                    <p class="mb-30 text-justify">
                                        <?php echo translate('process_description'); ?>
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="fw-semibold"><?php echo translate('specs_title'); ?></h4>
                                    <div class="checklist style5">
                                        <ul>
                                            <li><?php echo translate('spec_ash'); ?></li>
                                            <li><?php echo translate('spec_volatiles'); ?></li>
                                            <li><?php echo translate('spec_sulfur'); ?></li>
                                            <li><?php echo translate('spec_phosphorus'); ?></li>
                                            <li><?php echo translate('spec_fixed_carbon'); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row gy-40 pt-50">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="process-card3">
                                        <div class="box-icon">
                                            <i class="fal fa-file-lines"></i>
                                        </div>
                                        <h2 class="box-title"><?php echo translate('step_1_title'); ?></h2>
                                        <p class="box-text"><?php echo translate('step_1_description'); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="process-card3">
                                        <div class="box-icon">
                                            <i class="fal fa-pen-ruler"></i>
                                        </div>
                                        <h2 class="box-title"><?php echo translate('step_2_title'); ?></h2>
                                        <p class="box-text"><?php echo translate('step_2_description'); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="process-card3">
                                        <div class="box-icon">
                                            <i class="fal fa-circle-dollar"></i>
                                        </div>
                                        <h2 class="box-title"><?php echo translate('step_3_title'); ?></h2>
                                        <p class="box-text"><?php echo translate('step_3_description'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-semibold mb-25 mt-50"><?php echo translate('sizes_title'); ?></h4>
                            <!-- <p class="mb-30">Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Objectively envisioned high in convergence through collaborative networks. Interactively generate B2C tailers for business data restore fully researched relationships through</p> -->
                            <div class="row gy-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img">
                                        <img src="/assets/img/carbonor/servicios/1.webp" alt="Service Image">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!-- <p class="mt-n2">An architecture company thrives on innovation and creativity. Designers explore new materials, technologies, and design trends to deliver fresh and unique solutions.</p> -->
                                    <div class="checklist style5">
                                        <ul>
                                            <li><?php echo translate('size_1'); ?></li>
                                            <li><?php echo translate('size_2'); ?></li>
                                            
                                        </ul>
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
    <?php include_once '../../includes/footer.php'; ?>

    <!--******************************** Code End  Here ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--============================== All Js File ============================== -->
   <?php include_once '../../includes/script.php'; ?>
</body>

</html>