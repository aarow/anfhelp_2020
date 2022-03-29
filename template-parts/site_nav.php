<div class="site-nav--container container-fluid px-md-5 <?php echo is_front_page() ?  " light-on-dark " : " dark-on-light " ?>">
    <nav class="site-nav d-flex justify-content-between align-items-center">
        <button class="menu-panel--left--toggle  py-2 px-3 border-0 " type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            MENU
        </button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site--home-link d-block " >
            <?php echo file_get_contents( get_template_directory() . '/assets/_src/images/anf-logo.svg' ); ?>
            <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
        </a>
    </nav>
</div>

<div class="menu-panel--left bg-dark fixed-top d-none">
    <div class="d-flex justify-content-end position-absolute w-100">
        <button class="menu-panel--left--toggle bg-transparent border-0 text-decoration-none text-white h1 py-3 px-4"  type="button" aria-label="Close site navigation">&times;<span class="sr-only">Close</span></button>
    </div>
    <div class="vh-100 vw-100  d-flex justify-content-center align-items-center container-fluid">
        <div>
            <h2>ANF Pages</h2>
            <?php wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'link_before' => '<span class="site-menu--link--text">',
                    'link_after' => '</span>',
                    'items_wrap' => '<nav class="list-unstyled">%3$s</nav>',
                )
            ); ?>
        </div>
    </div>
</div>