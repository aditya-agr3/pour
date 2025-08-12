<?php
/**
 * Template for Services Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="padding-top: 6rem;">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hero Section for Services -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, rgba(127, 29, 29, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up">
                        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            <?php the_title(); ?>
                        </h1>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                            Discover our premium wine experiences designed to educate, delight, and create lasting memories
                        </p>
                        <div style="width: 100px; height: 3px; background: var(--wine-gradient); margin: 2rem auto 0; border-radius: 2px;"></div>
                    </div>
                </div>
            </section>

            <!-- Services Content -->
            <section style="padding: 4rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    
                    <!-- Featured Services -->
                    <div style="margin-bottom: 4rem;">
                        <?php
                        $services = get_posts(array(
                            'post_type' => 'wine_service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'meta_query' => array(
                                array(
                                    'key' => '_featured_service',
                                    'value' => '1',
                                    'compare' => '='
                                )
                            )
                        ));
                        
                        if (empty($services)) {
                            // Default services if none created
                            $default_services = array(
                                array(
                                    'title' => 'Private Wine Tastings',
                                    'description' => 'Intimate wine tastings in the comfort of your home or private venue. Our expert sommelier guides you through carefully selected wines, sharing insights about regions, varietals, and tasting techniques.',
                                    'price' => '$150 per person',
                                    'duration' => '2-3 hours',
                                    'capacity' => '4-12 guests',
                                    'features' => array(
                                        'Professional sommelier guidance',
                                        '6-8 premium wine tastings',
                                        'Wine education and tasting notes',
                                        'Cheese and charcuterie pairings',
                                        'Customized wine selection'
                                    )
                                ),
                                array(
                                    'title' => 'Wine Education Classes',
                                    'description' => 'Comprehensive wine education sessions covering everything from grape varieties to wine regions. Perfect for beginners and enthusiasts looking to deepen their wine knowledge.',
                                    'price' => '$85 per person',
                                    'duration' => '1.5 hours',
                                    'capacity' => '6-15 guests',
                                    'features' => array(
                                        'Interactive learning sessions',
                                        'Wine region exploration',
                                        'Tasting technique instruction',
                                        'Food pairing fundamentals',
                                        'Take-home tasting notes'
                                    )
                                ),
                                array(
                                    'title' => 'Vineyard Tours & Experiences',
                                    'description' => 'Curated tours of California\'s premier wine regions with exclusive access to boutique wineries. Experience the winemaking process from vine to bottle.',
                                    'price' => '$250 per person',
                                    'duration' => 'Full day',
                                    'capacity' => '4-8 guests',
                                    'features' => array(
                                        'Private transportation',
                                        '3-4 boutique winery visits',
                                        'Behind-the-scenes access',
                                        'Gourmet lunch included',
                                        'Exclusive wine purchases'
                                    )
                                )
                            );
                            
                            foreach ($default_services as $index => $service) : ?>
                                <div style="display: grid; grid-template-columns: <?php echo $index % 2 == 0 ? '1fr 1fr' : '1fr 1fr'; ?>; gap: 4rem; align-items: center; margin-bottom: 6rem; <?php echo $index % 2 == 1 ? 'direction: rtl;' : ''; ?>" class="wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                    
                                    <div style="<?php echo $index % 2 == 1 ? 'direction: ltr;' : ''; ?>">
                                        <div style="display: inline-flex; align-items: center; background: var(--wine-red); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.875rem; margin-bottom: 1rem;" class="wine-sway">
                                            <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                                <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                            </svg>
                                            Premium Service
                                        </div>
                                        
                                        <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                            <?php echo $service['title']; ?>
                                        </h2>
                                        
                                        <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.7; margin-bottom: 2rem;">
                                            <?php echo $service['description']; ?>
                                        </p>
                                        
                                        <!-- Service Details -->
                                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
                                            <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                <div style="font-weight: 700; color: var(--wine-red); margin-bottom: 0.25rem;">Price</div>
                                                <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $service['price']; ?></div>
                                            </div>
                                            <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                <div style="font-weight: 700; color: var(--wine-red); margin-bottom: 0.25rem;">Duration</div>
                                                <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $service['duration']; ?></div>
                                            </div>
                                            <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                <div style="font-weight: 700; color: var(--wine-red); margin-bottom: 0.25rem;">Capacity</div>
                                                <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $service['capacity']; ?></div>
                                            </div>
                                        </div>
                                        
                                        <!-- Features List -->
                                        <div style="margin-bottom: 2rem;">
                                            <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">What's Included:</h3>
                                            <ul style="list-style: none; padding: 0; margin: 0;">
                                                <?php foreach ($service['features'] as $feature) : ?>
                                                    <li style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                                                        <svg style="width: 1rem; height: 1rem; color: var(--wine-rose); margin-right: 0.75rem; flex-shrink: 0;" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                                        </svg>
                                                        <span style="color: #374151;"><?php echo $feature; ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        
                                        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                                            <span>Book This Experience</span>
                                            <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    <div style="position: relative; <?php echo $index % 2 == 1 ? 'direction: ltr;' : ''; ?>">
                                        <div style="background: var(--wine-gradient); border-radius: 16px; padding: 3rem; text-align: center; color: white; position: relative; overflow: hidden;" class="wine-card-hover">
                                            <div style="font-size: 4rem; margin-bottom: 1rem;" class="wine-sway">🍷</div>
                                            <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: white; font-family: var(--font-playfair);">
                                                <?php echo $service['title']; ?>
                                            </h3>
                                            <p style="opacity: 0.9;">Perfect for wine enthusiasts seeking premium experiences</p>
                                            
                                            <!-- Floating elements -->
                                            <div style="position: absolute; top: 1rem; right: 1rem; opacity: 0.2;" class="wine-float-bg-1">
                                                <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                    <circle cx="8" cy="8" r="1"/>
                                                    <circle cx="12" cy="6" r="1"/>
                                                    <circle cx="10" cy="12" r="1"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        } else {
                            // Display actual services from WordPress
                            foreach ($services as $index => $service) : setup_postdata($service); ?>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;" class="wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                    <div>
                                        <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                            <?php echo $service->post_title; ?>
                                        </h2>
                                        <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.7; margin-bottom: 2rem;">
                                            <?php echo $service->post_content; ?>
                                        </p>
                                        
                                        <?php
                                        $price = get_post_meta($service->ID, '_service_price', true);
                                        $duration = get_post_meta($service->ID, '_service_duration', true);
                                        $capacity = get_post_meta($service->ID, '_service_capacity', true);
                                        ?>
                                        
                                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem;">
                                            <?php if ($price) : ?>
                                                <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                    <div style="font-weight: 700; color: var(--wine-red);">Price</div>
                                                    <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $price; ?></div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <?php if ($duration) : ?>
                                                <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                    <div style="font-weight: 700; color: var(--wine-red);">Duration</div>
                                                    <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $duration; ?></div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <?php if ($capacity) : ?>
                                                <div style="text-align: center; padding: 1rem; background: rgba(127, 29, 29, 0.05); border-radius: 8px;">
                                                    <div style="font-weight: 700; color: var(--wine-red);">Capacity</div>
                                                    <div style="color: #6b7280; font-size: 0.875rem;"><?php echo $capacity; ?> guests</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <a href="<?php echo get_permalink($service->ID); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                                            <span>Learn More</span>
                                            <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    <div>
                                        <?php if (has_post_thumbnail($service->ID)) : ?>
                                            <div style="position: relative; border-radius: 16px; overflow: hidden;" class="wine-card-hover">
                                                <?php echo get_the_post_thumbnail($service->ID, 'large', array('style' => 'width: 100%; height: 400px; object-fit: cover;')); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; wp_reset_postdata();
                        }
                        ?>
                    </div>

                    <!-- Additional Services Grid -->
                    <div style="margin: 4rem 0;">
                        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 3rem; color: var(--wine-red); font-family: var(--font-playfair);">Additional Services</h2>
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                            <?php
                            $additional_services = array(
                                array(
                                    'title' => 'Corporate Wine Events',
                                    'description' => 'Team building and corporate entertainment with wine experiences',
                                    'icon' => '🏢'
                                ),
                                array(
                                    'title' => 'Wedding Wine Services',
                                    'description' => 'Curated wine selections and sommelier services for your special day',
                                    'icon' => '💒'
                                ),
                                array(
                                    'title' => 'Wine Investment Consulting',
                                    'description' => 'Expert guidance on building and managing your wine collection',
                                    'icon' => '📈'
                                ),
                                array(
                                    'title' => 'Virtual Wine Tastings',
                                    'description' => 'Interactive online wine experiences from the comfort of your home',
                                    'icon' => '💻'
                                )
                            );
                            
                            foreach ($additional_services as $index => $service) : ?>
                                <div style="padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); text-align: center;" class="wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                    <div style="font-size: 3rem; margin-bottom: 1rem;" class="wine-sway"><?php echo $service['icon']; ?></div>
                                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                        <?php echo $service['title']; ?>
                                    </h3>
                                    <p style="color: #6b7280; margin-bottom: 1.5rem; line-height: 1.6;">
                                        <?php echo $service['description']; ?>
                                    </p>
                                    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">
                                        Learn More →
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div style="text-align: center; margin: 4rem 0; padding: 3rem; background: var(--wine-gradient); border-radius: 16px; color: white;" class="wine-fade-in-up wine-delay-5">
                        <h2 style="font-size: 2rem; margin-bottom: 1rem; color: white; font-family: var(--font-playfair);">
                            Ready to Create Your Perfect Wine Experience?
                        </h2>
                        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Contact us today to discuss your wine service needs and create a customized experience.
                        </p>
                        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: white; color: var(--wine-red); padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                            <span>Get In Touch</span>
                            <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </div>
</main>

<style>
@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }
    
    .service-details {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php get_footer(); ?>