<script src="/assets/js/vendor/jquery-3.7.1.min.js"></script>
<!-- Swiper Js -->
<script src="/assets/js/swiper-bundle.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Magnific Popup -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<!-- Range Slider -->
<script src="/assets/js/jquery-ui.min.js"></script>
<!-- Isotope Filter -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<!-- Gsap -->
<script src="/assets/js/gsap.min.js"></script>
<!-- Scroll Trigger -->
<script src="/assets/js/ScrollTrigger.min.js"></script>
<!-- Lenis Smooth Scroll -->
<script src="/assets/js/lenis.min.js"></script>
<!-- DateTime JS -->
<script src="/assets/js/jquery.datetimepicker.min.js"></script>
<!-- Main Js File -->
<script src="/assets/js/main.js"></script>
<!-- Floating-WhatsApp-Message-Button-jQuery -->
<script src="/assets/js/floating-wpp.min.js"></script>

<script>
    $(function () {
        $('.floating-wpp').floatingWhatsApp({
            phone: '573112936388',
            popupMessage: '<?php echo translate('whatsapp_message'); ?>',
            showPopup: true,
            message: '<?php echo translate('whatsapp_default'); ?>',
            headerTitle: '<?php echo translate('whatsapp_title'); ?>',
            position: 'left',
            showOnIE: false,
            size: '60px',
            backgroundColor: '#25D366',
            headerColor: '#128C7E',
            zIndex: 9999999
        });
    });
</script>