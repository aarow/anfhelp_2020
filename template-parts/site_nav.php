<div class="site-nav--container">
    <div class="site-nav--bar d-flex justify-content-between px-2">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site--home-link d-block " >
            <?php echo file_get_contents( get_template_directory() . '/assets/_src/images/anf-logo.svg' ); ?>
            <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
        </a>
        <button class="menu-trigger d-md-none">Menu</button>
        <nav class="site-nav list-unstyled d-none d-md-flex align-items-center">
            <?php wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'link_before' => '<span class="text-white px-3 border-right">',
                    'link_after' => '</span>',
                    'items_wrap' => '%3$s',
                    'container' => '',
                )
            ); ?>
        </nav>
    </div>

    <nav class="site-nav menu-item-list list-unstyled px-2 d-md-none">
        <?php wp_nav_menu(
            array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'link_before' => '<span class="text-white p-1">',
                'link_after' => '</span>',
                'items_wrap' => '%3$s',
                'container' => '',
            )
        ); ?>
    </nav>
</div>
