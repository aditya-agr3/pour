<?php
/**
 * Template for Events Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="padding-top: 6rem;">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hero Section for Events -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, rgba(127, 29, 29, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up">
                        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            Wine Events & Experiences
                        </h1>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                            Join us for exclusive wine events, tastings, and educational experiences throughout the year
                        </p>
                        <div style="width: 100px; height: 3px; background: var(--wine-gradient); margin: 2rem auto 0; border-radius: 2px;"></div>
                    </div>
                </div>
            </section>

            <!-- Events Content -->
            <section style="padding: 4rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    
                    <!-- Event Filters -->
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up wine-delay-1">
                        <div style="display: inline-flex; background: white; border-radius: 50px; padding: 0.5rem; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1);">
                            <button class="event-filter active" data-filter="all" style="padding: 0.75rem 1.5rem; border: none; background: var(--wine-gradient); color: white; border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; margin-right: 0.5rem;">All Events</button>
                            <button class="event-filter" data-filter="tasting" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; margin-right: 0.5rem;">Tastings</button>
                            <button class="event-filter" data-filter="education" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; margin-right: 0.5rem;">Education</button>
                            <button class="event-filter" data-filter="tour" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">Tours</button>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div style="margin-bottom: 4rem;">
                        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 3rem; color: var(--wine-red); font-family: var(--font-playfair);" class="wine-fade-in-up wine-delay-2">Upcoming Events</h2>
                        
                        <div id="events-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                            <?php
                            // Get events from custom post type or use default content
                            $events = get_posts(array(
                                'post_type' => 'wine_event',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'meta_key' => '_event_date',
                                'orderby' => 'meta_value',
                                'order' => 'ASC'
                            ));
                            
                            if (empty($events)) {
                                // Default events if none are created
                                $default_events = array(
                                    array(
                                        'title' => 'Napa Valley Wine Tasting Experience',
                                        'date' => date('Y-m-d', strtotime('+1 week')),
                                        'time' => '2:00 PM - 6:00 PM',
                                        'location' => 'Napa Valley, CA',
                                        'price' => '$125 per person',
                                        'description' => 'Join us for an exclusive tasting tour through three premium Napa Valley wineries. Experience world-class Cabernet Sauvignon and Chardonnay while learning about terroir and winemaking techniques.',
                                        'category' => 'tasting',
                                        'spots' => '8 spots available'
                                    ),
                                    array(
                                        'title' => 'Wine & Food Pairing Masterclass',
                                        'date' => date('Y-m-d', strtotime('+2 weeks')),
                                        'time' => '6:30 PM - 9:00 PM',
                                        'location' => 'San Francisco, CA',
                                        'price' => '$95 per person',
                                        'description' => 'Learn the art of wine and food pairing with our expert sommelier. Discover how different wines enhance flavors and create memorable dining experiences.',
                                        'category' => 'education',
                                        'spots' => '12 spots available'
                                    ),
                                    array(
                                        'title' => 'Sonoma County Vineyard Tour',
                                        'date' => date('Y-m-d', strtotime('+3 weeks')),
                                        'time' => '10:00 AM - 5:00 PM',
                                        'location' => 'Sonoma County, CA',
                                        'price' => '$185 per person',
                                        'description' => 'Explore the beautiful vineyards of Sonoma County with visits to family-owned wineries. Includes lunch, transportation, and exclusive behind-the-scenes access.',
                                        'category' => 'tour',
                                        'spots' => '6 spots available'
                                    ),
                                    array(
                                        'title' => 'Wine Basics Workshop for Beginners',
                                        'date' => date('Y-m-d', strtotime('+4 weeks')),
                                        'time' => '7:00 PM - 9:00 PM',
                                        'location' => 'Perfect Pour Studio',
                                        'price' => '$65 per person',
                                        'description' => 'Perfect for wine newcomers! Learn the fundamentals of wine tasting, different grape varieties, and how to read wine labels with confidence.',
                                        'category' => 'education',
                                        'spots' => '15 spots available'
                                    ),
                                    array(
                                        'title' => 'Premium Bordeaux Tasting Evening',
                                        'date' => date('Y-m-d', strtotime('+5 weeks')),
                                        'time' => '7:30 PM - 10:00 PM',
                                        'location' => 'Private Venue, SF',
                                        'price' => '$150 per person',
                                        'description' => 'An exclusive evening featuring rare Bordeaux wines from celebrated vintages. Limited to 10 guests for an intimate and educational experience.',
                                        'category' => 'tasting',
                                        'spots' => '4 spots available'
                                    ),
                                    array(
                                        'title' => 'Central Coast Wine Adventure',
                                        'date' => date('Y-m-d', strtotime('+6 weeks')),
                                        'time' => '9:00 AM - 6:00 PM',
                                        'location' => 'Paso Robles, CA',
                                        'price' => '$210 per person',
                                        'description' => 'Discover the emerging wine region of Paso Robles with visits to innovative wineries known for Rhône varietals and unique blends.',
                                        'category' => 'tour',
                                        'spots' => '8 spots available'
                                    )
                                );
                                
                                foreach ($default_events as $index => $event) : ?>
                                    <div class="event-card wine-card-hover wine-fade-in-up wine-delay-<?php echo ($index % 3) + 1; ?>" data-category="<?php echo $event['category']; ?>" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); position: relative;">
                                        
                                        <!-- Event Image Placeholder -->
                                        <div style="height: 200px; background: var(--wine-gradient); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                            <div style="font-size: 4rem; color: white; opacity: 0.9;" class="wine-sway">🍷</div>
                                            
                                            <!-- Category Badge -->
                                            <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(255, 255, 255, 0.9); color: var(--wine-red); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.875rem; font-weight: 600; text-transform: capitalize;">
                                                <?php echo $event['category']; ?>
                                            </div>
                                            
                                            <!-- Availability Badge -->
                                            <div style="position: absolute; top: 1rem; right: 1rem; background: var(--wine-deep); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">
                                                <?php echo $event['spots']; ?>
                                            </div>
                                            
                                            <!-- Floating wine elements -->
                                            <div style="position: absolute; bottom: 1rem; left: 1rem; opacity: 0.3;" class="wine-float-bg-1">
                                                <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                    <circle cx="8" cy="8" r="1"/>
                                                    <circle cx="12" cy="6" r="1"/>
                                                    <circle cx="10" cy="12" r="1"/>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div style="padding: 1.5rem;">
                                            <!-- Event Date -->
                                            <div style="display: flex; align-items: center; margin-bottom: 1rem; color: var(--wine-rose); font-weight: 600;">
                                                <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                                </svg>
                                                <?php echo date('M j, Y', strtotime($event['date'])); ?> • <?php echo $event['time']; ?>
                                            </div>
                                            
                                            <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair); line-height: 1.3;">
                                                <?php echo $event['title']; ?>
                                            </h3>
                                            
                                            <p style="color: #6b7280; line-height: 1.6; margin-bottom: 1.5rem;">
                                                <?php echo $event['description']; ?>
                                            </p>
                                            
                                            <!-- Event Details -->
                                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                                                <div style="display: flex; align-items: center; color: #6b7280;">
                                                    <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem; color: var(--wine-burgundy);" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                                    </svg>
                                                    <?php echo $event['location']; ?>
                                                </div>
                                                
                                                <div style="display: flex; align-items: center; color: var(--wine-red); font-weight: 600;">
                                                    <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-3.84 3.11-4.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 4.15-3.12 4.16z"/>
                                                    </svg>
                                                    <?php echo $event['price']; ?>
                                                </div>
                                            </div>
                                            
                                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 0.75rem 1.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; font-size: 0.875rem;" class="wine-card-hover">
                                                    <span>Reserve Spot</span>
                                                    <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                                    </svg>
                                                </a>
                                                
                                                <button style="background: none; border: none; color: var(--wine-rose); font-size: 0.875rem; cursor: pointer; padding: 0.5rem;" onclick="shareEvent('<?php echo $event['title']; ?>')">
                                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;
                            } else {
                                // Display actual events from WordPress
                                foreach ($events as $index => $event) : setup_postdata($event); ?>
                                    <div class="event-card wine-card-hover wine-fade-in-up wine-delay-<?php echo ($index % 3) + 1; ?>" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1);">
                                        <?php if (has_post_thumbnail($event->ID)) : ?>
                                            <div style="height: 200px; overflow: hidden;">
                                                <?php echo get_the_post_thumbnail($event->ID, 'medium', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div style="padding: 1.5rem;">
                                            <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                                <?php echo $event->post_title; ?>
                                            </h3>
                                            <p style="color: #6b7280; line-height: 1.6; margin-bottom: 1.5rem;">
                                                <?php echo wp_trim_words($event->post_content, 20); ?>
                                            </p>
                                            
                                            <?php
                                            $event_date = get_post_meta($event->ID, '_event_date', true);
                                            $event_price = get_post_meta($event->ID, '_event_price', true);
                                            ?>
                                            
                                            <?php if ($event_date) : ?>
                                                <div style="color: var(--wine-rose); font-weight: 600; margin-bottom: 1rem;">
                                                    <?php echo date('M j, Y', strtotime($event_date)); ?>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <a href="<?php echo get_permalink($event->ID); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 0.75rem 1.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                                                <span>Learn More</span>
                                                <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Newsletter Signup -->
                    <div style="text-align: center; margin: 4rem 0; padding: 3rem; background: var(--wine-gradient); border-radius: 16px; color: white; position: relative; overflow: hidden;" class="wine-fade-in-up wine-delay-4">
                        <h2 style="font-size: 2rem; margin-bottom: 1rem; color: white; font-family: var(--font-playfair);">
                            Never Miss a Wine Event
                        </h2>
                        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Subscribe to our newsletter and be the first to know about exclusive wine events, tastings, and special offers.
                        </p>
                        
                        <div style="max-width: 400px; margin: 0 auto; display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                            <input type="email" placeholder="Your email address" style="flex: 1; padding: 1rem; border: none; border-radius: 50px; font-size: 1rem; min-width: 250px;">
                            <button style="background: white; color: var(--wine-red); padding: 1rem 2rem; border: none; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;" class="wine-card-hover">
                                Subscribe
                            </button>
                        </div>
                        
                        <!-- Floating elements -->
                        <div style="position: absolute; top: 2rem; left: 2rem; opacity: 0.2;" class="wine-float-bg-1">
                            <svg style="width: 3rem; height: 3rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="8" cy="8" r="1"/>
                                <circle cx="12" cy="6" r="1"/>
                                <circle cx="16" cy="8" r="1"/>
                                <circle cx="10" cy="12" r="1"/>
                            </svg>
                        </div>
                        
                        <div style="position: absolute; bottom: 2rem; right: 2rem; opacity: 0.2;" class="wine-float-bg-2">
                            <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </div>
</main>

<script>
// Event filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.event-filter');
    const eventCards = document.querySelectorAll('.event-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.style.background = 'transparent';
                btn.style.color = 'var(--wine-red)';
            });
            
            this.style.background = 'var(--wine-gradient)';
            this.style.color = 'white';
            
            // Filter events
            eventCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                
                if (filter === 'all' || cardCategory === filter) {
                    card.style.display = 'block';
                    card.classList.add('wine-fade-in-up');
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// Share event functionality
function shareEvent(eventTitle) {
    if (navigator.share) {
        navigator.share({
            title: eventTitle,
            text: 'Check out this wine event: ' + eventTitle,
            url: window.location.href
        });
    } else {
        // Fallback for browsers that don't support Web Share API
        const shareText = 'Check out this wine event: ' + eventTitle + ' - ' + window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(shareText);
            alert('Event link copied to clipboard!');
        } else {
            alert('Share this event: ' + shareText);
        }
    }
}
</script>

<style>
@media (max-width: 768px) {
    .events-grid {
        grid-template-columns: 1fr !important;
    }
    
    .event-filters {
        flex-direction: column !important;
        gap: 0.5rem !important;
    }
    
    .newsletter-form {
        flex-direction: column !important;
        gap: 1rem !important;
    }
    
    .newsletter-form input {
        min-width: auto !important;
    }
}
</style>

<?php get_footer(); ?>