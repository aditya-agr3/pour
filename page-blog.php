<?php
/**
 * Template for Blog Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="padding-top: 6rem;">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hero Section for Blog -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, rgba(127, 29, 29, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up">
                        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            Wine Stories & Insights
                        </h1>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                            Discover the world of wine through expert insights, tasting notes, and vineyard adventures
                        </p>
                        <div style="width: 100px; height: 3px; background: var(--wine-gradient); margin: 2rem auto 0; border-radius: 2px;"></div>
                    </div>
                </div>
            </section>

            <!-- Blog Categories Filter -->
            <section style="padding: 2rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up wine-delay-1">
                        <div style="display: inline-flex; background: white; border-radius: 50px; padding: 0.5rem; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); flex-wrap: wrap; gap: 0.5rem;">
                            <button class="blog-filter active" data-filter="all" style="padding: 0.75rem 1.5rem; border: none; background: var(--wine-gradient); color: white; border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">All Posts</button>
                            <button class="blog-filter" data-filter="wine-education" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">Education</button>
                            <button class="blog-filter" data-filter="wine-reviews" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">Reviews</button>
                            <button class="blog-filter" data-filter="wine-trips" style="padding: 0.75rem 1.5rem; border: none; background: transparent; color: var(--wine-red); border-radius: 50px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">Travel</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Blog Post -->
            <section style="padding: 2rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <?php
                    // Get featured post or latest post
                    $featured_post = get_posts(array(
                        'posts_per_page' => 1,
                        'meta_key' => '_featured_post',
                        'meta_value' => '1'
                    ));
                    
                    if (empty($featured_post)) {
                        $featured_post = get_posts(array('posts_per_page' => 1));
                    }
                    
                    if (!empty($featured_post)) :
                        $post = $featured_post[0];
                        setup_postdata($post);
                    ?>
                        <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); margin-bottom: 4rem;" class="wine-card-hover wine-fade-in-up wine-delay-2">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 0;">
                                <div style="padding: 3rem;">
                                    <div style="display: inline-flex; align-items: center; background: var(--wine-red); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.875rem; margin-bottom: 1rem;" class="wine-sway">
                                        <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                        Featured Post
                                    </div>
                                    
                                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair); line-height: 1.2;">
                                        <?php the_title(); ?>
                                    </h2>
                                    
                                    <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.7; margin-bottom: 2rem;">
                                        <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                                    </p>
                                    
                                    <div style="display: flex; align-items: center; margin-bottom: 2rem; color: #9ca3af; font-size: 0.875rem;">
                                        <span><?php echo get_the_date(); ?></span>
                                        <span style="margin: 0 0.5rem;">•</span>
                                        <span><?php echo get_the_author(); ?></span>
                                        <span style="margin: 0 0.5rem;">•</span>
                                        <span><?php echo get_the_category_list(', '); ?></span>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                                        <span>Read Full Article</span>
                                        <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                                
                                <div style="height: 400px; position: relative;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                    <?php else : ?>
                                        <div style="width: 100%; height: 100%; background: var(--wine-gradient); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                            <div style="font-size: 4rem; color: white; opacity: 0.8;" class="wine-sway">🍷</div>
                                            <div style="position: absolute; top: 2rem; right: 2rem; opacity: 0.3;" class="wine-float-bg-1">
                                                <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                    <circle cx="8" cy="8" r="1"/>
                                                    <circle cx="12" cy="6" r="1"/>
                                                    <circle cx="10" cy="12" r="1"/>
                                                </svg>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                        wp_reset_postdata();
                    endif; 
                    ?>
                </div>
            </section>

            <!-- Blog Posts Grid -->
            <section style="padding: 2rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div id="blog-posts-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                        <?php
                        // Get blog posts or use default content
                        $blog_posts = get_posts(array(
                            'posts_per_page' => 9,
                            'post_status' => 'publish',
                            'exclude' => isset($featured_post[0]) ? array($featured_post[0]->ID) : array()
                        ));
                        
                        if (empty($blog_posts)) {
                            // Default blog posts if none exist
                            $default_posts = array(
                                array(
                                    'title' => 'Wine Tasting Basics: A Beginner\'s Guide',
                                    'excerpt' => 'Learn the fundamentals of wine tasting, from proper glassware to understanding tannins and acidity. Perfect for wine newcomers.',
                                    'category' => 'wine-education',
                                    'category_name' => 'Wine Education',
                                    'author' => 'Sarah Johnson',
                                    'date' => date('Y-m-d', strtotime('-1 week')),
                                    'read_time' => '5 min read'
                                ),
                                array(
                                    'title' => '2023 Napa Valley Cabernet Sauvignon Review',
                                    'excerpt' => 'Exploring the exceptional 2023 vintage from Napa Valley, featuring our top picks and tasting notes from premium wineries.',
                                    'category' => 'wine-reviews',
                                    'category_name' => 'Wine Reviews',
                                    'author' => 'Michael Chen',
                                    'date' => date('Y-m-d', strtotime('-2 weeks')),
                                    'read_time' => '8 min read'
                                ),
                                array(
                                    'title' => 'Tuscany Wine Country: A Complete Travel Guide',
                                    'excerpt' => 'Discover the best wineries, restaurants, and hidden gems in Tuscany with our comprehensive travel guide.',
                                    'category' => 'wine-trips',
                                    'category_name' => 'Wine Trips',
                                    'author' => 'Emma Rodriguez',
                                    'date' => date('Y-m-d', strtotime('-3 weeks')),
                                    'read_time' => '12 min read'
                                ),
                                array(
                                    'title' => 'Understanding Wine and Food Pairings',
                                    'excerpt' => 'Master the art of pairing wine with food. Learn classic combinations and discover new flavors.',
                                    'category' => 'wine-education',
                                    'category_name' => 'Wine Education',
                                    'author' => 'David Kim',
                                    'date' => date('Y-m-d', strtotime('-1 month')),
                                    'read_time' => '6 min read'
                                ),
                                array(
                                    'title' => 'Oregon Pinot Noir: Best Wineries to Visit',
                                    'excerpt' => 'Explore Oregon\'s premier Pinot Noir producers and discover why this region is gaining international recognition.',
                                    'category' => 'wine-reviews',
                                    'category_name' => 'Wine Reviews',
                                    'author' => 'Lisa Thompson',
                                    'date' => date('Y-m-d', strtotime('-5 weeks')),
                                    'read_time' => '10 min read'
                                ),
                                array(
                                    'title' => 'Bordeaux Wine Region: Insider\'s Travel Tips',
                                    'excerpt' => 'Navigate Bordeaux like a local with our insider tips for wine tastings, accommodations, and must-visit châteaux.',
                                    'category' => 'wine-trips',
                                    'category_name' => 'Wine Trips',
                                    'author' => 'Antoine Dubois',
                                    'date' => date('Y-m-d', strtotime('-6 weeks')),
                                    'read_time' => '15 min read'
                                ),
                                array(
                                    'title' => 'Champagne vs Prosecco: What\'s the Difference?',
                                    'excerpt' => 'Understand the key differences between Champagne and Prosecco, from production methods to flavor profiles.',
                                    'category' => 'wine-education',
                                    'category_name' => 'Wine Education',
                                    'author' => 'Claire Martin',
                                    'date' => date('Y-m-d', strtotime('-7 weeks')),
                                    'read_time' => '7 min read'
                                ),
                                array(
                                    'title' => 'Spanish Rioja: Hidden Gems and Classics',
                                    'excerpt' => 'Discover both renowned and boutique Rioja producers, with detailed tasting notes and buying recommendations.',
                                    'category' => 'wine-reviews',
                                    'category_name' => 'Wine Reviews',
                                    'author' => 'Carlos Mendez',
                                    'date' => date('Y-m-d', strtotime('-2 months')),
                                    'read_time' => '9 min read'
                                ),
                                array(
                                    'title' => 'New Zealand Wine Country Adventure',
                                    'excerpt' => 'Experience New Zealand\'s diverse wine regions, from Marlborough Sauvignon Blanc to Central Otago Pinot Noir.',
                                    'category' => 'wine-trips',
                                    'category_name' => 'Wine Trips',
                                    'author' => 'Sophie Wilson',
                                    'date' => date('Y-m-d', strtotime('-10 weeks')),
                                    'read_time' => '11 min read'
                                )
                            );
                            
                            foreach ($default_posts as $index => $post) : ?>
                                <article class="blog-post-card wine-card-hover wine-fade-in-up wine-delay-<?php echo ($index % 3) + 1; ?>" data-category="<?php echo $post['category']; ?>" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); position: relative;">
                                    
                                    <!-- Post Image -->
                                    <div style="height: 200px; background: var(--wine-gradient); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                        <div style="font-size: 3rem; color: white; opacity: 0.8;" class="wine-sway">
                                            <?php 
                                            $icons = array('🍷', '🍇', '🥂', '🍾');
                                            echo $icons[$index % 4]; 
                                            ?>
                                        </div>
                                        
                                        <!-- Category Badge -->
                                        <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(255, 255, 255, 0.9); color: var(--wine-red); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600; text-transform: capitalize;">
                                            <?php echo $post['category_name']; ?>
                                        </div>
                                        
                                        <!-- Read Time -->
                                        <div style="position: absolute; top: 1rem; right: 1rem; background: var(--wine-deep); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">
                                            <?php echo $post['read_time']; ?>
                                        </div>
                                        
                                        <!-- Floating elements -->
                                        <div style="position: absolute; bottom: 1rem; left: 1rem; opacity: 0.3;" class="wine-float-bg-<?php echo ($index % 3) + 1; ?>">
                                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                <circle cx="8" cy="8" r="1"/>
                                                <circle cx="12" cy="6" r="1"/>
                                                <circle cx="10" cy="12" r="1"/>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div style="padding: 1.5rem;">
                                        <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair); line-height: 1.3;">
                                            <a href="#" style="text-decoration: none; color: inherit;"><?php echo $post['title']; ?></a>
                                        </h3>
                                        
                                        <p style="color: #6b7280; line-height: 1.6; margin-bottom: 1.5rem; font-size: 0.875rem;">
                                            <?php echo $post['excerpt']; ?>
                                        </p>
                                        
                                        <!-- Post Meta -->
                                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; font-size: 0.75rem; color: #9ca3af;">
                                            <div style="display: flex; align-items: center;">
                                                <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
                                                <span style="margin: 0 0.5rem;">•</span>
                                                <span><?php echo $post['author']; ?></span>
                                            </div>
                                        </div>
                                        
                                        <a href="#" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--wine-rose); font-weight: 600; text-decoration: none; font-size: 0.875rem; transition: all 0.3s ease;" class="wine-shimmer">
                                            <span>Read More</span>
                                            <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endforeach;
                        } else {
                            // Display actual blog posts
                            foreach ($blog_posts as $index => $post) : setup_postdata($post); ?>
                                <article class="blog-post-card wine-card-hover wine-fade-in-up wine-delay-<?php echo ($index % 3) + 1; ?>" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1);">
                                    
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div style="height: 200px; overflow: hidden; position: relative;">
                                            <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                            
                                            <!-- Category Badge -->
                                            <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(255, 255, 255, 0.9); color: var(--wine-red); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">
                                                <?php echo get_the_category_list(', '); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div style="padding: 1.5rem;">
                                        <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a>
                                        </h3>
                                        
                                        <p style="color: #6b7280; line-height: 1.6; margin-bottom: 1.5rem; font-size: 0.875rem;">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </p>
                                        
                                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; color: #9ca3af;">
                                            <span><?php echo get_the_date(); ?></span>
                                            <span><?php echo get_the_author(); ?></span>
                                        </div>
                                        
                                        <a href="<?php the_permalink(); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--wine-rose); font-weight: 600; text-decoration: none; font-size: 0.875rem; margin-top: 1rem;" class="wine-shimmer">
                                            <span>Read More</span>
                                            <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endforeach; wp_reset_postdata();
                        }
                        ?>
                    </div>

                    <!-- Load More Button -->
                    <div style="text-align: center; margin: 3rem 0;" class="wine-fade-in-up wine-delay-4">
                        <button id="load-more-posts" style="background: var(--wine-gradient); color: white; border: none; padding: 1rem 2rem; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem;" class="wine-card-hover">
                            <span>Load More Articles</span>
                            <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Newsletter Signup -->
            <section style="padding: 3rem 0;">
                <div style="max-width: 800px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; padding: 3rem; background: var(--wine-gradient); border-radius: 16px; color: white; position: relative; overflow: hidden;" class="wine-fade-in-up wine-delay-5">
                        <h2 style="font-size: 2rem; margin-bottom: 1rem; color: white; font-family: var(--font-playfair);">
                            Stay Updated with Wine Insights
                        </h2>
                        <p style="font-size: 1.125rem; margin-bottom: 2rem; opacity: 0.9; max-width: 500px; margin-left: auto; margin-right: auto;">
                            Get the latest wine articles, tasting notes, and exclusive content delivered to your inbox.
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
                                <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                            </svg>
                        </div>
                        
                        <div style="position: absolute; bottom: 2rem; right: 2rem; opacity: 0.2;" class="wine-float-bg-2">
                            <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="8" cy="8" r="1"/>
                                <circle cx="12" cy="6" r="1"/>
                                <circle cx="16" cy="8" r="1"/>
                                <circle cx="10" cy="12" r="1"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </div>
</main>

<script>
// Blog filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.blog-filter');
    const blogCards = document.querySelectorAll('.blog-post-card');
    
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
            
            // Filter blog posts
            blogCards.forEach(card => {
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
    
    // Load more posts functionality
    const loadMoreButton = document.getElementById('load-more-posts');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function() {
            // Here you would typically load more posts via AJAX
            // For now, we'll show a message
            this.innerHTML = '<span>Loading...</span>';
            
            setTimeout(() => {
                this.innerHTML = '<span>No more posts to load</span>';
                this.disabled = true;
                this.style.opacity = '0.6';
            }, 1000);
        });
    }
});
</script>

<style>
@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr !important;
    }
    
    .blog-filters {
        flex-direction: column !important;
        gap: 0.5rem !important;
    }
    
    .featured-post {
        grid-template-columns: 1fr !important;
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