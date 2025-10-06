<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'coque-2x3-mm';  
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
                        <div class="page-content">
                            <h2 class="page-title fw-semibold">Coque 2x3 mm</h2>
                            <p class="mb-30 text-justify">El Coque 2x3 mm es un producto de alta calidad con especificaciones técnicas optimizadas para procesos industriales que requieren granulometría fina.</p>
                            
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <h4 class="fw-semibold">Especificaciones Técnicas</h4>
                                    <p class="mb-30 text-justify">
                                        Nuestro Coque 2x3 mm cumple con los más altos estándares de calidad para garantizar un rendimiento óptimo en sus procesos industriales.
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="fw-semibold">Especificaciones</h4>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>Humedad: 1,7% máx</li>
                                            <li>Ceniza: 24% máx</li>
                                            <li>Materia Volátil: 3% máx</li>
                                            <li>Azufre: 0,70%</li>
                                            <li>Carbono Fijo: 73%</li>
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
                                        <h2 class="box-title">Análisis Químico</h2>
                                        <p class="box-text">Realizamos análisis químicos exhaustivos para garantizar la calidad del producto.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="process-card3">
                                        <div class="box-icon">
                                            <i class="fal fa-pen-ruler"></i>
                                        </div>
                                        <h2 class="box-title">Control de Tamaño</h2>
                                        <p class="box-text">Cumplimiento estricto de las dimensiones especificadas para cada aplicación.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="process-card3">
                                        <div class="box-icon">
                                            <i class="fal fa-circle-dollar"></i>
                                        </div>
                                        <h2 class="box-title">Entrega Garantizada</h2>
                                        <p class="box-text">Compromiso con la entrega puntual y en las cantidades solicitadas.</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-semibold mb-25 mt-50">Aplicaciones</h4>
                            <div class="row gy-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img">
                                        <img src="/assets/img/carbonor/servicios/1.webp" alt="Coque 2x3 mm">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checklist style5">
                                        <ul>
                                            <li>Industria metalúrgica</li>
                                            <li>Fundiciones especializadas</li>
                                            <li>Producción de hierro y acero</li>
                                            <li>Aplicaciones que requieren granulometría fina</li>
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
