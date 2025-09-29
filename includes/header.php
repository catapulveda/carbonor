 <header class="th-header header-layout2">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/">
                                <img src="/assets/img/carbonor/logo-principal.webp" alt="CARBONOR" width="190">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="/"><?php echo translate('menu_home'); ?></a></li>
                                <li><a href="/quienes-somos"><?php echo translate('menu_about'); ?></a></li>
                                <li><a href="/servicios"><?php echo translate('menu_services'); ?></a></li>
                                <li><a href="/mineria"><?php echo translate('menu_mining'); ?></a></li>
                                <li><a href="/contacto"><?php echo translate('menu_contact'); ?></a></li>
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xxl-block">
                        <div class="header-button">
                            <!-- Selector de idiomas -->
                            <div class="language-selector d-flex align-items-center">
                                <a href="?lang=es" class="language-flag <?php echo (LANG === 'es') ? 'active' : ''; ?>" title="Español">
                                    <img src="https://flagcdn.com/24x18/co.png" alt="Español" class="flag-img">
                                </a>
                                <span class="language-separator mx-2">|</span>
                                <a href="?lang=br" class="language-flag <?php echo (LANG === 'br') ? 'active' : ''; ?>" title="Português">
                                    <img src="https://flagcdn.com/24x18/br.png" alt="Português" class="flag-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    
