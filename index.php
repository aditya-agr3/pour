<?php
/**
 * The main template file for Perfect Pour Experience theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php if (is_home() || is_front_page()) : ?>
        <!-- Hero Section -->
        <section class="hero-section wine-fade-in-up" style="background-image: url('<?php echo get_theme_file_uri('/assets/wine-hero-bg.jpg'); ?>');">
            <!-- Sophisticated Wine Gradient Overlay -->
            <div class="hero-overlay"></div>
            <div class="hero-wine-overlay"></div>
            
            <!-- Luxury Border with Wine Effect -->
            <div style="position: absolute; inset: 0; border: 4px solid transparent; background: linear-gradient(to right, rgba(127, 29, 29, 0.3), rgba(220, 38, 38, 0.4), rgba(136, 19, 55, 0.3)); margin: 1.5rem; border-radius: 8px; z-index: 1;"></div>
            <div style="position: absolute; inset: 0; border: 1px solid rgba(255, 255, 255, 0.1); margin: 2rem; border-radius: 8px; z-index: 2;"></div>
            
            <!-- Floating Wine Elements -->
            <div style="position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 3;">
                <!-- Wine Glass Icons -->
                <div style="position: absolute; top: 5rem; left: 5rem; color: rgba(255, 255, 255, 0.1);" class="wine-float-bg-1">
                    <svg style="width: 2rem; height: 2rem;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                        <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                    </svg>
                </div>
                
                <div style="position: absolute; top: 10rem; right: 8rem; color: rgba(255, 255, 255, 0.15);" class="wine-float-bg-2">
                    <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24">
                        <circle cx="8" cy="6" r="1"/>
                        <circle cx="10" cy="8" r="1"/>
                        <circle cx="12" cy="6" r="1"/>
                        <circle cx="8" cy="10" r="1"/>
                        <circle cx="10" cy="12" r="1"/>
                        <circle cx="12" cy="10" r="1"/>
                        <circle cx="14" cy="8" r="1"/>
                    </svg>
                </div>
                
                <div style="position: absolute; bottom: 10rem; left: 8rem; color: rgba(255, 255, 255, 0.12);" class="wine-float-bg-3">
                    <svg style="width: 2.5rem; height: 2.5rem;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                        <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                    </svg>
                </div>
            </div>

            <div class="hero-content">
                <h1 class="hero-title wine-shimmer wine-delay-1">
                    <?php echo get_theme_mod('hero_title', 'Perfect Pour Experience'); ?>
                </h1>
                <p class="hero-subtitle wine-fade-in-up wine-delay-2">
                    <?php echo get_theme_mod('hero_subtitle', 'Discover the world of wine through personalized tastings, expert education, and unforgettable experiences in California\'s premier wine regions.'); ?>
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="hero-cta wine-fade-in-up wine-delay-3">
                    <span><?php echo get_theme_mod('hero_cta_text', 'Explore Our Services'); ?></span>
                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            
            <!-- Luxury Scroll Indicator with Wine Animation -->
            <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%);" class="wine-fade-in-up wine-delay-6">
                <div style="width: 1.5rem; height: 2.5rem; border: 2px solid rgba(255, 255, 255, 0.5); border-radius: 9999px; display: flex; justify-content: center;" class="wine-sway">
                    <div style="width: 0.25rem; height: 0.75rem; background: linear-gradient(to bottom, #f87171, #a855f7); border-radius: 9999px; margin-top: 0.5rem;" class="wine-shimmer" style="animation: bounce 1s infinite;"></div>
                </div>
                
                <!-- Wine droplets falling animation -->
                <div style="position: absolute; top: 3rem; left: 50%; transform: translateX(-50%);">
                    <div style="width: 0.125rem; height: 1rem; background: rgba(220, 38, 38, 0.3);" class="wine-pour"></div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section style="padding: 5rem 0; background: #f8fafc;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                <div style="text-align: center; margin-bottom: 4rem;" class="wine-fade-in-up">
                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">Our Wine Services</h2>
                    <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                        Experience wine like never before with our curated selection of personalized services
                    </p>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <?php
                    // Get services from custom post type or use default content
                    $services = get_posts(array(
                        'post_type' => 'wine_service',
                        'posts_per_page' => 3,
                        'post_status' => 'publish'
                    ));
                    
                    if (empty($services)) {
                        // Default services if none are created
                        $default_services = array(
                            array(
                                'title' => 'Private Wine Tastings',
                                'description' => 'Intimate tastings in the comfort of your home or private venue with expert sommelier guidance.',
                                'icon' => 'wine-glass'
                            ),
                            array(
                                'title' => 'Wine Education Classes',
                                'description' => 'Learn about wine regions, varietals, and tasting techniques through interactive educational sessions.',
                                'icon' => 'book'
                            ),
                            array(
                                'title' => 'Vineyard Tours',
                                'description' => 'Curated tours of premium California wineries with behind-the-scenes access and exclusive tastings.',
                                'icon' => 'map'
                            )
                        );
                        
                        foreach ($default_services as $index => $service) : ?>
                            <div class="service-card wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                <div class="service-icon wine-sway">
                                    <?php if ($service['icon'] == 'wine-glass') : ?>
                                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 2.5rem; height: 2.5rem;">
                                            <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                            <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                        </svg>
                                    <?php elseif ($service['icon'] == 'book') : ?>
                                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 2.5rem; height: 2.5rem;">
                                            <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/>
                                        </svg>
                                    <?php else : ?>
                                        <svg fill="currentColor" viewBox="0 0 24 24" style="width: 2.5rem; height: 2.5rem;">
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Wine droplet effect -->
                                <div style="position: absolute; top: 6rem; left: 50%; transform: translateX(-50%); opacity: 0; transition: opacity 0.5s;" class="group-hover:opacity-100">
                                    <div style="width: 0.25rem; height: 0.25rem; background: rgba(127, 29, 29, 0.6); border-radius: 50%;" class="wine-droplet"></div>
                                </div>
                                
                                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);"><?php echo $service['title']; ?></h3>
                                <p style="color: #6b7280; margin-bottom: 1.5rem;"><?php echo $service['description']; ?></p>
                                <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">Learn More →</a>
                            </div>
                        <?php endforeach;
                    } else {
                        foreach ($services as $index => $service) : ?>
                            <div class="service-card wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                <div class="service-icon wine-sway">
                                    <?php echo get_field('service_icon', $service->ID); ?>
                                </div>
                                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);"><?php echo $service->post_title; ?></h3>
                                <p style="color: #6b7280; margin-bottom: 1.5rem;"><?php echo $service->post_excerpt; ?></p>
                                <a href="<?php echo get_permalink($service->ID); ?>" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">Learn More →</a>
                            </div>
                        <?php endforeach;
                    } ?>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section style="padding: 5rem 0;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                <div style="text-align: center; margin-bottom: 4rem;" class="wine-fade-in-up">
                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">Wine Stories & Insights</h2>
                    <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                        Discover wine knowledge, reviews, and travel stories from our wine experts
                    </p>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ));
                    
                    foreach ($recent_posts as $index => $post) : ?>
                        <article class="blog-card wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                            <div style="position: relative; overflow: hidden;">
                                <?php if (has_post_thumbnail($post['ID'])) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url($post['ID'], 'medium'); ?>" alt="<?php echo $post['post_title']; ?>" class="blog-image">
                                <?php else : ?>
                                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--wine-red), var(--wine-rose)); display: flex; align-items: center; justify-content: center;">
                                        <svg style="width: 4rem; height: 4rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                            <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                
                                <span class="blog-category wine-sway">
                                    <?php 
                                    $categories = get_the_category($post['ID']);
                                    echo !empty($categories) ? $categories[0]->name : 'Wine Articles';
                                    ?>
                                </span>
                                
                                <!-- Wine glass overlay on hover -->
                                <div style="position: absolute; top: 1rem; right: 1rem; opacity: 0; transition: opacity 0.5s;" class="group-hover:opacity-30">
                                    <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24" class="wine-pour">
                                        <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                        <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="blog-content">
                                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                    <a href="<?php echo get_permalink($post['ID']); ?>" style="text-decoration: none; color: inherit;">
                                        <?php echo $post['post_title']; ?>
                                    </a>
                                </h3>
                                <p style="color: #6b7280; margin-bottom: 1rem; line-height: 1.6;">
                                    <?php echo wp_trim_words($post['post_content'], 20); ?>
                                </p>
                                <div style="display: flex; align-items: center; justify-content: space-between; font-size: 0.875rem; color: #9ca3af; margin-bottom: 1rem;">
                                    <div style="display: flex; align-items: center;">
                                        <svg style="width: 1rem; height: 1rem; margin-right: 0.25rem; color: var(--wine-rose);" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                        </svg>
                                        <?php echo date('M j, Y', strtotime($post['post_date'])); ?>
                                    </div>
                                    <div style="display: flex; align-items: center;">
                                        <svg style="width: 1rem; height: 1rem; margin-right: 0.25rem; color: var(--wine-burgundy);" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <?php echo get_the_author_meta('display_name', $post['post_author']); ?>
                                    </div>
                                </div>
                                <div style="border-top: 1px solid #f3f4f6; padding-top: 1rem;">
                                    <a href="<?php echo get_permalink($post['ID']); ?>" style="color: var(--wine-red); font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>Read More</span>
                                        <span style="transition: transform 0.3s;" class="group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                
                <div style="text-align: center; margin-top: 3rem;">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                        <span>View All Posts</span>
                        <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    <?php else : ?>
        <!-- Regular blog listing or other content -->
        <div style="max-width: 800px; margin: 0 auto; padding: 2rem;">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card wine-fade-in-up'); ?> style="margin-bottom: 2rem;">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin-bottom: 1.5rem;">
                                <?php the_post_thumbnail('large', array('class' => 'blog-image', 'style' => 'width: 100%; height: auto; border-radius: 8px;')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="blog-content">
                            <h2 style="font-size: 2rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem; color: #6b7280; font-size: 0.875rem;">
                                <span><?php echo get_the_date(); ?></span>
                                <span>by <?php the_author(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span>in <?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div style="color: #374151; line-height: 1.7;">
                                <?php if (is_single()) : ?>
                                    <?php the_content(); ?>
                                <?php else : ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">Read More →</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <!-- Pagination -->
                <div style="text-align: center; margin-top: 3rem;">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div style="text-align: center; padding: 4rem 2rem;">
                    <h2 style="color: var(--wine-red); font-family: var(--font-playfair); margin-bottom: 1rem;">No posts found</h2>
                    <p style="color: #6b7280;">Start creating your wine content!</p>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>