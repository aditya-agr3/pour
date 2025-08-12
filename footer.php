</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="footer-content">
        <div class="footer-section" style="position: relative;">
            <h3 style="display: flex; align-items: center;" class="wine-fade-in-up">
                <svg style="width: 2rem; height: 2rem; color: var(--wine-rose); margin-right: 0.75rem;" fill="currentColor" viewBox="0 0 24 24" class="wine-sway">
                    <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                    <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                </svg>
                <?php bloginfo('name'); ?>
            </h3>
            <p style="opacity: 0.9; margin-bottom: 1rem;" class="wine-fade-in-up wine-delay-1">
                <?php echo get_theme_mod('footer_description', 'Creating unforgettable wine experiences through expertise, passion, and personalized service. Join us on a journey to discover your perfect pour.'); ?>
            </p>
            
            <!-- Social Media Icons with Wine Animations -->
            <div style="display: flex; gap: 1rem;" class="wine-fade-in-up wine-delay-2">
                <?php if (get_theme_mod('facebook_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" style="color: var(--wine-cream); transition: color 0.3s;" class="wine-card-hover">
                        <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24" class="grape-float">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                <?php endif; ?>
                
                <?php if (get_theme_mod('instagram_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" style="color: var(--wine-cream); transition: color 0.3s;" class="wine-card-hover">
                        <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24" class="wine-sway">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986s11.987-5.368 11.987-11.986C24.014 5.367 18.635.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.326-1.297-.878-.808-1.297-1.959-1.297-3.256 0-1.297.419-2.448 1.297-3.326.878-.878 2.029-1.297 3.326-1.297 1.297 0 2.448.419 3.326 1.297.878.878 1.297 2.029 1.297 3.326 0 1.297-.419 2.448-1.297 3.256-.878.807-2.029 1.297-3.326 1.297zm7.83-9.404c-.878 0-1.587-.709-1.587-1.587 0-.878.709-1.587 1.587-1.587.878 0 1.587.709 1.587 1.587 0 .878-.709 1.587-1.587 1.587z"/>
                        </svg>
                    </a>
                <?php endif; ?>
                
                <?php if (get_theme_mod('twitter_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" style="color: var(--wine-cream); transition: color 0.3s;" class="wine-card-hover">
                        <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24" class="grape-float wine-delay-1">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Floating wine elements in footer -->
            <div style="position: absolute; top: 0; right: 0; opacity: 0.2; pointer-events: none;">
                <svg style="width: 3rem; height: 3rem; color: var(--wine-rose);" fill="currentColor" viewBox="0 0 24 24" class="wine-float-bg-1">
                    <circle cx="8" cy="8" r="1"/>
                    <circle cx="12" cy="6" r="1"/>
                    <circle cx="16" cy="8" r="1"/>
                    <circle cx="10" cy="12" r="1"/>
                    <circle cx="14" cy="10" r="1"/>
                    <circle cx="12" cy="16" r="1"/>
                </svg>
            </div>
        </div>

        <div class="footer-section wine-fade-in-up wine-delay-1">
            <h4 style="color: var(--wine-rose); margin-bottom: 1rem; font-family: var(--font-playfair);">Quick Links</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => function() {
                    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_permalink(get_page_by_path('about')) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">About Us</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_permalink(get_page_by_path('services')) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">Services</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_permalink(get_option('page_for_posts')) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">Blog</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_permalink(get_page_by_path('events')) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">Events</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_permalink(get_page_by_path('contact')) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">Contact</a></li>';
                    echo '</ul>';
                }
            ));
            ?>
        </div>

        <div class="footer-section wine-fade-in-up wine-delay-2">
            <h4 style="color: var(--wine-rose); margin-bottom: 1rem; font-family: var(--font-playfair);">Contact Info</h4>
            <div style="color: var(--wine-cream); opacity: 0.9; line-height: 1.6;">
                <p style="margin-bottom: 0.5rem;">
                    <strong>Email:</strong> <?php echo get_theme_mod('contact_email', 'hello@perfectpourexperience.com'); ?>
                </p>
                <p style="margin-bottom: 0.5rem;">
                    <strong>Phone:</strong> <?php echo get_theme_mod('contact_phone', '(555) 123-WINE'); ?>
                </p>
                <p style="margin-bottom: 0.5rem;">
                    <strong>Location:</strong><br>
                    <?php echo get_theme_mod('contact_location', 'San Francisco Bay Area<br>& Wine Country'); ?>
                </p>
            </div>
        </div>

        <div class="footer-section wine-fade-in-up wine-delay-3">
            <h4 style="color: var(--wine-rose); margin-bottom: 1rem; font-family: var(--font-playfair);">Wine Categories</h4>
            <div style="color: var(--wine-cream); opacity: 0.9; line-height: 1.6;">
                <?php
                $categories = get_categories(array('number' => 5));
                if ($categories) {
                    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
                    foreach ($categories as $category) {
                        echo '<li style="margin-bottom: 0.5rem;"><a href="' . get_category_link($category->term_id) . '" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9; transition: opacity 0.3s;">' . $category->name . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="#" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9;">Wine Education</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="#" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9;">Wine Reviews</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="#" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9;">Wine Trips</a></li>';
                    echo '<li style="margin-bottom: 0.5rem;"><a href="#" style="color: var(--wine-cream); text-decoration: none; opacity: 0.9;">Tasting Notes</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>

    <div style="border-top: 1px solid rgba(220, 38, 38, 0.3); margin-top: 2rem; padding-top: 2rem; text-align: center;">
        <p style="color: var(--wine-cream); opacity: 0.75; margin: 0;">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            <?php if (get_theme_mod('show_theme_credit', true)) : ?>
                | Powered by <a href="https://wordpress.org" style="color: var(--wine-rose); text-decoration: none;">WordPress</a>
            <?php endif; ?>
        </p>
    </div>
</footer>
</div><!-- #page -->

<!-- Mobile Menu Script -->
<script>
// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Mobile menu toggle
const mobileToggle = document.getElementById('mobile-menu-toggle');
const navigation = document.querySelector('.main-navigation');

if (mobileToggle && navigation) {
    mobileToggle.addEventListener('click', function() {
        navigation.classList.toggle('mobile-open');
    });
}

// Wine animation enhancements
document.addEventListener('DOMContentLoaded', function() {
    // Add staggered animation delays to elements
    const fadeElements = document.querySelectorAll('.wine-fade-in-up');
    fadeElements.forEach((element, index) => {
        if (!element.classList.contains('wine-delay-1') && 
            !element.classList.contains('wine-delay-2') && 
            !element.classList.contains('wine-delay-3')) {
            element.style.animationDelay = (index * 0.1) + 's';
        }
    });

    // Enhanced hover effects for wine cards
    const wineCards = document.querySelectorAll('.wine-card-hover');
    wineCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(127, 29, 29, 0.2), 0 0 0 1px rgba(127, 29, 29, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
});
</script>

<!-- Responsive Styles -->
<style>
@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: block !important;
    }
    
    .main-navigation {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 12px 12px;
        z-index: 1000;
    }
    
    .main-navigation.mobile-open {
        display: block;
    }
    
    .main-navigation ul {
        flex-direction: column;
        padding: 1rem;
        gap: 0;
    }
    
    .main-navigation li {
        margin-bottom: 0.5rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 3rem;
    }
    
    .hero-title {
        font-size: 2.5rem !important;
    }
    
    .hero-content {
        padding: 0 1rem;
    }
}
</style>

<?php wp_footer(); ?>
</body>
</html>