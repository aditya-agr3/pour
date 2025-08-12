<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'perfect-pour'); ?></a>

        <header id="masthead" class="site-header">
            <div class="header-container">
                <!-- Logo with Wine Animation -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo wine-fade-in-up">
                    <svg class="logo-icon wine-sway" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                        <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                    </svg>
                    
                    <!-- Wine droplet under logo -->
                    <div style="position: absolute; top: 100%; left: 50%; transform: translateX(-50%); opacity: 0; transition: opacity 0.5s;" class="group-hover:opacity-100">
                        <div style="width: 0.25rem; height: 0.25rem; background: var(--wine-rose); border-radius: 50%;" class="wine-droplet"></div>
                    </div>
                    
                    <?php bloginfo('name'); ?>
                </a>

                <!-- Navigation -->
                <nav id="site-navigation" class="main-navigation wine-fade-in-up wine-delay-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => '',
                        'fallback_cb'    => function() {
                            // Default menu if none is set
                            echo '<ul>';
                            echo '<li><a href="' . home_url('/') . '">Home</a></li>';
                            echo '<li><a href="' . get_permalink(get_page_by_path('about')) . '">About</a></li>';
                            echo '<li><a href="' . get_permalink(get_page_by_path('services')) . '">Services</a></li>';
                            echo '<li><a href="' . get_permalink(get_option('page_for_posts')) . '">Blog</a></li>';
                            echo '<li><a href="' . get_permalink(get_page_by_path('events')) . '">Events</a></li>';
                            echo '<li><a href="' . get_permalink(get_page_by_path('contact')) . '">Contact</a></li>';
                            echo '</ul>';
                        }
                    ));
                    ?>
                    
                    <!-- Floating grape decoration -->
                    <div style="position: absolute; top: -10px; right: -10px; opacity: 20%; pointer-events: none;" class="wine-float-bg-2">
                        <svg style="width: 1rem; height: 1rem; color: var(--wine-rose);" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="8" cy="8" r="1"/>
                            <circle cx="12" cy="6" r="1"/>
                            <circle cx="10" cy="12" r="1"/>
                        </svg>
                    </div>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" style="display: none; background: none; border: none; color: var(--wine-red); font-size: 1.5rem; cursor: pointer;">
                    <svg style="width: 1.5rem; height: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </header>

        <div id="content" class="site-content">