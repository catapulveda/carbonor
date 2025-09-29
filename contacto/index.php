<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

  // Ahora cargo las traducciones específicas de esta página:
  $pageId   = 'contacto';
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
    
    <!--==============================
    Contact Area   
    ==============================-->
    <div class="space" id="contact-sec">
        <div class="contact-bg-shape1-1 jump shape-mockup" data-bottom="30%" data-left="2%">
            <img src="/assets/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-5">
                    <div class="title-area">
                        <h2 class="sec-title"><?php echo translate('contact_title'); ?></h2>
                        <p><?php echo translate('contact_description'); ?></p>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="/assets/img/icon/location-dot.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title"><?php echo translate('location_title'); ?></h6>
                            <p class="about-contact-details-text"><?php echo translate('location_1'); ?></p>
                            <p class="about-contact-details-text"><?php echo translate('location_2'); ?></p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="/assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title"><?php echo translate('phone_title'); ?></h6>
                            <p class="about-contact-details-text"><a href="tel:+573112936388">+57 311-293-6388</a></p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="/assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title"><?php echo translate('email_title'); ?></h6>
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
                    <img src="/assets/img/property/property_inner_1.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title"><?php echo translate('address_title'); ?></h4>
                    <p class="text"><?php echo translate('address_text'); ?></p>
                    <h4 class="title"><?php echo translate('ceo_title'); ?></h4>
                    <p class="text"><?php echo translate('ceo_name'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Contact Area   
    ==============================-->
    <div class="space contact-area-5 z-index-common" id="contact-sec">
        <div class="contact-thumb6-1">
            <img src="/assets/img/carbonor/contacto/2.webp" alt="img">
        </div>
        <div class="container">
            <div class="row gx-60 gy-60 justify-content-end">
                <div class="col-lg-6">
                    <div class="appointment-wrap">
                        <h2 class="form-title fw-semibold mb-35"><?php echo translate('form_title'); ?></h2>
                        <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo translate('form_name_placeholder'); ?>">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo translate('form_email_placeholder'); ?>">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden><?php echo translate('form_subject_placeholder'); ?></option>
                                        <option value="Información de productos"><?php echo translate('option_1'); ?></option>
                                        <option value="Cotización"><?php echo translate('option_2'); ?></option>
                                        <option value="Logística y entregas"><?php echo translate('option_3'); ?></option>
                                        <option value="Otro"><?php echo translate('option_4'); ?></option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="number" class="form-control" name="number" id="number" placeholder="<?php echo translate('form_phone_placeholder'); ?>">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="col-12 form-group style-border2 style-radius">
                                    <i class="far fa-comments"></i>
                                    <textarea name="message" id="message" placeholder="<?php echo translate('form_message_placeholder'); ?>" class="form-control"></textarea>
                                </div>
                                <div class="col-12 form-btn">
                                    <button class="th-btn style4"><?php echo translate('form_submit_btn'); ?> <span class="btn-icon"><img src="/assets/img/icon/paper-plane.svg" alt="img"></span></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://wa.me/+573112936388?text=Hola%20quiero%20más%20información" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
    </a>

    
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