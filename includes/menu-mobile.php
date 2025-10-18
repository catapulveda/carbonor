<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="/">
                <img src="/assets/img/carbonor/logo-principal.webp" alt="Carbonor">
            </a>
        </div>
        <div class="th-mobile-menu allow-natural-scroll">
            <ul>
                <li><a href="/"><?php echo translate('menu_home'); ?></a></li>
                <li><a href="/quienes-somos"><?php echo translate('menu_about'); ?></a></li>
                <li><a href="/productos"><?php echo translate('menu_products'); ?></a></li>
                <li><a href="/mineria"><?php echo translate('menu_mining'); ?></a></li>
                <li><a href="/contacto"><?php echo translate('menu_contact'); ?></a></li>
            </ul>
            
            <!-- Mobile Language Selector -->
            <div class="mobile-language-selector mt-4 pt-3 border-top">
                <div class="text-center mb-2">
                    <small class="text-muted"><?php echo translate('lang_spanish'); ?></small>
                </div>
                <div class="language-selector d-flex justify-content-center align-items-center gap-3">
                    <a href="?lang=es" class="language-flag <?php echo (LANG === 'es') ? 'active' : ''; ?>" title="Español">
                        <img src="https://flagcdn.com/24x18/co.png" alt="Español" class="flag-img">
                    </a>
                    <a href="?lang=br" class="language-flag <?php echo (LANG === 'br') ? 'active' : ''; ?>" title="Português">
                        <img src="https://flagcdn.com/24x18/br.png" alt="Português" class="flag-img">
                    </a>
                    <a href="?lang=en" class="language-flag <?php echo (LANG === 'en') ? 'active' : ''; ?>" title="English">
                        <img src="https://flagcdn.com/24x18/us.png" alt="English" class="flag-img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>