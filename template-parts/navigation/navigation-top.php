<nav class="navbar fixed-top navbar-expand-md bg-dark navbar-dark" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'top',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )
            );
            ?>
    </div>
</nav>