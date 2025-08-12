
<?php
/**
 * Perfect Pour Experience Theme Functions
 */

// Theme setup
function perfect_pour_setup() {
    // Add theme support for various features
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    
    // Custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'perfect-pour'),
        'footer'  => esc_html__('Footer Menu', 'perfect-pour'),
    ));
}
add_action('after_setup_theme', 'perfect_pour_setup');

// Enqueue styles and scripts
function perfect_pour_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('perfect-pour-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('perfect-pour-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue theme JavaScript
    wp_enqueue_script('perfect-pour-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
    
    // Enqueue comment reply script if needed
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'perfect_pour_scripts');

// Custom post types
function perfect_pour_custom_post_types() {
    // Wine Services post type
    register_post_type('wine_service', array(
        'labels' => array(
            'name'               => 'Wine Services',
            'singular_name'      => 'Wine Service',
            'menu_name'          => 'Wine Services',
            'add_new'            => 'Add New Service',
            'add_new_item'       => 'Add New Wine Service',
            'edit_item'          => 'Edit Wine Service',
            'new_item'           => 'New Wine Service',
            'view_item'          => 'View Wine Service',
            'search_items'       => 'Search Wine Services',
            'not_found'          => 'No wine services found',
            'not_found_in_trash' => 'No wine services found in trash',
        ),
        'public'        => true,
        'menu_icon'     => 'dashicons-products',
        'menu_position' => 20,
        'supports'      => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'services'),
        'show_in_rest'  => true,
    ));

    // Wine Events post type
    register_post_type('wine_event', array(
        'labels' => array(
            'name'               => 'Wine Events',
            'singular_name'      => 'Wine Event',
            'menu_name'          => 'Wine Events',
            'add_new'            => 'Add New Event',
            'add_new_item'       => 'Add New Wine Event',
            'edit_item'          => 'Edit Wine Event',
            'new_item'           => 'New Wine Event',
            'view_item'          => 'View Wine Event',
            'search_items'       => 'Search Wine Events',
            'not_found'          => 'No wine events found',
            'not_found_in_trash' => 'No wine events found in trash',
        ),
        'public'        => true,
        'menu_icon'     => 'dashicons-calendar-alt',
        'menu_position' => 21,
        'supports'      => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'events'),
        'show_in_rest'  => true,
    ));
}
add_action('init', 'perfect_pour_custom_post_types');

// Custom taxonomies
function perfect_pour_custom_taxonomies() {
    // Wine Region taxonomy
    register_taxonomy('wine_region', array('post', 'wine_service'), array(
        'labels' => array(
            'name'          => 'Wine Regions',
            'singular_name' => 'Wine Region',
            'menu_name'     => 'Wine Regions',
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'wine-region'),
    ));

    // Service Type taxonomy
    register_taxonomy('service_type', 'wine_service', array(
        'labels' => array(
            'name'          => 'Service Types',
            'singular_name' => 'Service Type',
            'menu_name'     => 'Service Types',
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'service-type'),
    ));
}
add_action('init', 'perfect_pour_custom_taxonomies');

// Widget areas
function perfect_pour_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'perfect-pour'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'perfect-pour'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'perfect-pour'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets to the footer area.', 'perfect-pour'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'perfect_pour_widgets_init');

// Customizer settings
function perfect_pour_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'       => 'Hero Section',
        'description' => 'Customize the homepage hero section',
        'priority'    => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Perfect Pour Experience',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => 'Hero Title',
        'section' => 'hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Discover the world of wine through personalized tastings, expert education, and unforgettable experiences in California\'s premier wine regions.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => 'Hero Subtitle',
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('hero_cta_text', array(
        'default'           => 'Explore Our Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_cta_text', array(
        'label'   => 'Call to Action Text',
        'section' => 'hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('hero_background_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label'   => 'Hero Background Image',
        'section' => 'hero_section',
    )));

    // Contact Information
    $wp_customize->add_section('contact_info', array(
        'title'       => 'Contact Information',
        'description' => 'Add your contact details',
        'priority'    => 31,
    ));

    $wp_customize->add_setting('contact_email', array(
        'default'           => 'hello@perfectpourexperience.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => 'Contact Email',
        'section' => 'contact_info',
        'type'    => 'email',
    ));

    $wp_customize->add_setting('contact_phone', array(
        'default'           => '(555) 123-WINE',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'   => 'Contact Phone',
        'section' => 'contact_info',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('contact_location', array(
        'default'           => 'San Francisco Bay Area<br>& Wine Country',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contact_location', array(
        'label'   => 'Location',
        'section' => 'contact_info',
        'type'    => 'textarea',
    ));

    // Social Media
    $wp_customize->add_section('social_media', array(
        'title'       => 'Social Media',
        'description' => 'Add your social media links',
        'priority'    => 32,
    ));

    $social_networks = array(
        'facebook'  => 'Facebook URL',
        'instagram' => 'Instagram URL',
        'twitter'   => 'Twitter URL',
        'linkedin'  => 'LinkedIn URL',
        'youtube'   => 'YouTube URL',
    );

    foreach ($social_networks as $network => $label) {
        $wp_customize->add_setting($network . '_url', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($network . '_url', array(
            'label'   => $label,
            'section' => 'social_media',
            'type'    => 'url',
        ));
    }

    // Footer Settings
    $wp_customize->add_setting('footer_description', array(
        'default'           => 'Creating unforgettable wine experiences through expertise, passion, and personalized service. Join us on a journey to discover your perfect pour.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_description', array(
        'label'   => 'Footer Description',
        'section' => 'title_tagline',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('show_theme_credit', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    $wp_customize->add_control('show_theme_credit', array(
        'label'   => 'Show Theme Credit',
        'section' => 'title_tagline',
        'type'    => 'checkbox',
    ));
}
add_action('customize_register', 'perfect_pour_customize_register');

// Custom excerpt length
function perfect_pour_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'perfect_pour_excerpt_length');

// Custom excerpt more
function perfect_pour_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'perfect_pour_excerpt_more');

// Add wine-themed body classes
function perfect_pour_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'wine-homepage';
    }
    
    if (is_singular('wine_service')) {
        $classes[] = 'wine-service-page';
    }
    
    if (is_singular('wine_event')) {
        $classes[] = 'wine-event-page';
    }
    
    return $classes;
}
add_filter('body_class', 'perfect_pour_body_classes');

// Add wine animation classes to posts
function perfect_pour_post_class($classes, $class, $post_id) {
    if (is_home() || is_archive()) {
        $classes[] = 'wine-fade-in-up';
        $classes[] = 'wine-card-hover';
    }
    
    return $classes;
}
add_filter('post_class', 'perfect_pour_post_class', 10, 3);

// Enqueue block editor styles
function perfect_pour_block_editor_styles() {
    wp_enqueue_style('perfect-pour-block-editor-styles', get_template_directory_uri() . '/block-editor-style.css', array(), '1.0.0');
}
add_action('enqueue_block_editor_assets', 'perfect_pour_block_editor_styles');

// Add wine-themed color palette to block editor
function perfect_pour_block_editor_colors() {
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => 'Wine Red',
            'slug'  => 'wine-red',
            'color' => '#7f1d1d',
        ),
        array(
            'name'  => 'Wine Rose',
            'slug'  => 'wine-rose',
            'color' => '#dc2626',
        ),
        array(
            'name'  => 'Wine Burgundy',
            'slug'  => 'wine-burgundy',
            'color' => '#881337',
        ),
        array(
            'name'  => 'Wine Deep',
            'slug'  => 'wine-deep',
            'color' => '#450a0a',
        ),
        array(
            'name'  => 'Wine Light',
            'slug'  => 'wine-light',
            'color' => '#fecaca',
        ),
        array(
            'name'  => 'Wine Cream',
            'slug'  => 'wine-cream',
            'color' => '#fef7cd',
        ),
        array(
            'name'  => 'Wine Brown',
            'slug'  => 'wine-brown',
            'color' => '#44403c',
        ),
    ));
}
add_action('after_setup_theme', 'perfect_pour_block_editor_colors');

// Custom admin styles for wine theme
function perfect_pour_admin_styles() {
    echo '<style>
        .wine-admin-icon {
            background-color: #7f1d1d;
            color: white;
            padding: 8px;
            border-radius: 4px;
            margin-right: 8px;
        }
        
        .wine-service-meta,
        .wine-event-meta {
            background: linear-gradient(135deg, #7f1d1d, #dc2626);
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .wine-service-meta h3,
        .wine-event-meta h3 {
            color: white;
            margin-top: 0;
        }
    </style>';
}
add_action('admin_head', 'perfect_pour_admin_styles');

// Add meta boxes for wine services
function perfect_pour_service_meta_boxes() {
    add_meta_box(
        'wine-service-details',
        'Wine Service Details',
        'perfect_pour_service_meta_box_callback',
        'wine_service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'perfect_pour_service_meta_boxes');

function perfect_pour_service_meta_box_callback($post) {
    wp_nonce_field('perfect_pour_service_meta_box', 'perfect_pour_service_meta_box_nonce');
    
    $price = get_post_meta($post->ID, '_service_price', true);
    $duration = get_post_meta($post->ID, '_service_duration', true);
    $location = get_post_meta($post->ID, '_service_location', true);
    $capacity = get_post_meta($post->ID, '_service_capacity', true);
    $icon = get_post_meta($post->ID, '_service_icon', true);
    
    echo '<div class="wine-service-meta">';
    echo '<h3>Service Information</h3>';
    echo '<table class="form-table">';
    
    echo '<tr>';
    echo '<th><label for="service_price">Price</label></th>';
    echo '<td><input type="text" id="service_price" name="service_price" value="' . esc_attr($price) . '" placeholder="e.g., $150 per person" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_duration">Duration</label></th>';
    echo '<td><input type="text" id="service_duration" name="service_duration" value="' . esc_attr($duration) . '" placeholder="e.g., 2 hours" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_location">Location</label></th>';
    echo '<td><input type="text" id="service_location" name="service_location" value="' . esc_attr($location) . '" placeholder="e.g., Your home or venue" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_capacity">Max Capacity</label></th>';
    echo '<td><input type="number" id="service_capacity" name="service_capacity" value="' . esc_attr($capacity) . '" placeholder="e.g., 12" /></td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<th><label for="service_icon">Service Icon</label></th>';
    echo '<td>';
    echo '<select id="service_icon" name="service_icon">';
    echo '<option value="wine-glass"' . selected($icon, 'wine-glass', false) . '>Wine Glass</option>';
    echo '<option value="grapes"' . selected($icon, 'grapes', false) . '>Grapes</option>';
    echo '<option value="education"' . selected($icon, 'education', false) . '>Education</option>';
    echo '<option value="tour"' . selected($icon, 'tour', false) . '>Tour</option>';
    echo '</select>';
    echo '</td>';
    echo '</tr>';
    
    echo '</table>';
    echo '</div>';
}

// Save service meta data
function perfect_pour_save_service_meta($post_id) {
    if (!isset($_POST['perfect_pour_service_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['perfect_pour_service_meta_box_nonce'], 'perfect_pour_service_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $fields = array('service_price', 'service_duration', 'service_location', 'service_capacity', 'service_icon');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'perfect_pour_save_service_meta');

// Initialize sample content on theme activation
function perfect_pour_init_sample_content() {
    // Create sample wine categories
    if (!term_exists('Wine Education', 'category')) {
        wp_insert_term('Wine Education', 'category', array(
            'description' => 'Educational content about wine tasting, regions, and techniques',
            'slug' => 'wine-education'
        ));
    }
    
    if (!term_exists('Wine Reviews', 'category')) {
        wp_insert_term('Wine Reviews', 'category', array(
            'description' => 'Reviews and recommendations of specific wines',
            'slug' => 'wine-reviews'
        ));
    }
    
    if (!term_exists('Wine Trips', 'category')) {
        wp_insert_term('Wine Trips', 'category', array(
            'description' => 'Travel experiences and wine region guides',
            'slug' => 'wine-trips'
        ));
    }
}
add_action('after_switch_theme', 'perfect_pour_init_sample_content');

// Custom shortcodes for wine content
function perfect_pour_wine_service_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
        'limit' => 3,
        'type' => ''
    ), $atts);
    
    $args = array(
        'post_type' => 'wine_service',
        'posts_per_page' => $atts['limit'],
        'post_status' => 'publish'
    );
    
    if (!empty($atts['id'])) {
        $args['p'] = $atts['id'];
    }
    
    if (!empty($atts['type'])) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'service_type',
                'field' => 'slug',
                'terms' => $atts['type']
            )
        );
    }
    
    $services = new WP_Query($args);
    
    if (!$services->have_posts()) {
        return '<p>No wine services found.</p>';
    }
    
    ob_start();
    echo '<div class="wine-services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 2rem 0;">';
    
    while ($services->have_posts()) {
        $services->the_post();
        $price = get_post_meta(get_the_ID(), '_service_price', true);
        $duration = get_post_meta(get_the_ID(), '_service_duration', true);
        
        echo '<div class="service-card wine-card-hover wine-fade-in-up">';
        echo '<div class="service-icon wine-sway">';
        echo '<svg style="width: 2.5rem; height: 2.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">';
        echo '<path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>';
        echo '<path d="M11 14v6H8v2h8v-2h-3v-6"/>';
        echo '</svg>';
        echo '</div>';
        echo '<h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">' . get_the_title() . '</h3>';
        echo '<p style="color: #6b7280; margin-bottom: 1rem;">' . get_the_excerpt() . '</p>';
        if ($price) echo '<p style="font-weight: 600; color: var(--wine-rose); margin-bottom: 0.5rem;">Price: ' . esc_html($price) . '</p>';
        if ($duration) echo '<p style="color: #6b7280; margin-bottom: 1.5rem;">Duration: ' . esc_html($duration) . '</p>';
        echo '<a href="' . get_permalink() . '" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">Learn More →</a>';
        echo '</div>';
    }
    
    echo '</div>';
    wp_reset_postdata();
    
    return ob_get_clean();
}
add_shortcode('wine_services', 'perfect_pour_wine_service_shortcode');

// Wine animation utility function
function perfect_pour_add_wine_animations($content) {
    // Add wine animation classes to headings
    $content = preg_replace('/<h([1-6])([^>]*)>/', '<h$1$2 class="wine-fade-in-up">', $content);
    
    // Add wine animation classes to images
    $content = preg_replace('/<img([^>]*)>/', '<img$1 class="wine-fade-in-up">', $content);
    
    return $content;
}
add_filter('the_content', 'perfect_pour_add_wine_animations');

// Custom login page styling
function perfect_pour_login_styles() {
    echo '<style>
        body.login {
            background: linear-gradient(135deg, #7f1d1d 0%, #dc2626 50%, #881337 100%);
            background-size: cover;
        }
        
        .login h1 a {
            background-image: none !important;
            color: white;
            font-family: "Playfair Display", serif;
            font-size: 2rem;
            font-weight: 700;
            text-decoration: none;
            width: auto;
            height: auto;
            text-indent: 0;
        }
        
        .login h1 a:before {
            content: "🍷 ";
            display: inline-block;
            margin-right: 0.5rem;
            animation: wine-sway 4s ease-in-out infinite;
        }
        
        .login form {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(127, 29, 29, 0.2);
            border-radius: 12px;
        }
        
        .login .button-primary {
            background: linear-gradient(135deg, #7f1d1d, #dc2626);
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .login .button-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(127, 29, 29, 0.3);
        }
        
        @keyframes wine-sway {
            0%, 100% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
        }
    </style>';
}
add_action('login_head', 'perfect_pour_login_styles');

// Change login logo URL
function perfect_pour_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'perfect_pour_login_logo_url');

// Change login logo title
function perfect_pour_login_logo_url_title() {
    return get_bloginfo('name') . ' - Perfect Pour Experience';
}
add_filter('login_headertext', 'perfect_pour_login_logo_url_title');