<?php
/**
 * The template for displaying single posts
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="max-width: 800px; margin: 0 auto; padding: 2rem;">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('wine-fade-in-up'); ?>>
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-bottom: 2rem; position: relative; overflow: hidden; border-radius: 12px;" class="wine-fade-in-up">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 400px; object-fit: cover;')); ?>
                        
                        <!-- Wine glass overlay -->
                        <div style="position: absolute; top: 1rem; right: 1rem; opacity: 0.3;">
                            <svg style="width: 3rem; height: 3rem; color: white;" fill="currentColor" viewBox="0 0 24 24" class="wine-sway">
                                <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Header -->
                <header style="margin-bottom: 2rem; text-align: center;" class="wine-fade-in-up wine-delay-1">
                    <!-- Categories -->
                    <?php if (has_category()) : ?>
                        <div style="margin-bottom: 1rem;">
                            <?php 
                            $categories = get_the_category();
                            foreach ($categories as $category) {
                                $color = 'var(--wine-red)';
                                if (strpos(strtolower($category->name), 'review') !== false) {
                                    $color = 'var(--wine-burgundy)';
                                } elseif (strpos(strtolower($category->name), 'trip') !== false) {
                                    $color = 'var(--wine-rose)';
                                }
                                echo '<span style="display: inline-block; background: ' . $color . '; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.875rem; font-weight: 500; margin-right: 0.5rem;" class="wine-sway">' . $category->name . '</span>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair); line-height: 1.2;" class="wine-shimmer">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Post Meta -->
                    <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; color: #6b7280; font-size: 0.875rem; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center;">
                            <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem; color: var(--wine-rose);" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                            </svg>
                            <?php echo get_the_date('F j, Y'); ?>
                        </div>
                        
                        <div style="display: flex; align-items: center;">
                            <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem; color: var(--wine-burgundy);" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            <?php the_author(); ?>
                        </div>
                        
                        <?php if (comments_open() || get_comments_number()) : ?>
                            <div style="display: flex; align-items: center;">
                                <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem; color: var(--wine-deep);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                                </svg>
                                <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (function_exists('the_views')) : ?>
                            <div style="display: flex; align-items: center;">
                                <svg style="width: 1rem; height: 1rem; margin-right: 0.5rem; color: var(--wine-light);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                <?php the_views(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </header>

                <!-- Post Content -->
                <div style="color: #374151; line-height: 1.8; font-size: 1.125rem;" class="wine-fade-in-up wine-delay-2 wp-content">
                    <?php the_content(); ?>
                </div>

                <!-- Post Tags -->
                <?php if (has_tag()) : ?>
                    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;" class="wine-fade-in-up wine-delay-3">
                        <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">Wine Tags</h3>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) {
                                echo '<a href="' . get_tag_link($tag->term_id) . '" style="display: inline-block; background: rgba(127, 29, 29, 0.1); color: var(--wine-red); padding: 0.5rem 1rem; border-radius: 20px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s ease;" class="wine-card-hover">#' . $tag->name . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Author Bio -->
                <?php if (get_the_author_meta('description')) : ?>
                    <div style="margin-top: 3rem; padding: 2rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px; border-left: 4px solid var(--wine-red);" class="wine-fade-in-up wine-delay-4">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <?php echo get_avatar(get_the_author_meta('ID'), 60, '', '', array('style' => 'border-radius: 50%; border: 3px solid var(--wine-rose);')); ?>
                            <div>
                                <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair);">About <?php the_author(); ?></h3>
                                <p style="margin: 0; color: #6b7280; font-size: 0.875rem;">Wine Expert & Sommelier</p>
                            </div>
                        </div>
                        <p style="color: #374151; line-height: 1.6; margin: 0;"><?php the_author_meta('description'); ?></p>
                    </div>
                <?php endif; ?>

                <!-- Navigation -->
                <nav style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;" class="wine-fade-in-up wine-delay-5">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <?php 
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        
                        <div>
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post); ?>" style="display: block; padding: 1.5rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px; text-decoration: none; transition: all 0.3s ease;" class="wine-card-hover">
                                    <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--wine-rose); font-size: 0.875rem; margin-bottom: 0.5rem;">
                                        <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>
                                        Previous Post
                                    </div>
                                    <h4 style="color: var(--wine-red); font-family: var(--font-playfair); margin: 0; font-size: 1.125rem;"><?php echo get_the_title($prev_post); ?></h4>
                                </a>
                            <?php endif; ?>
                        </div>
                        
                        <div>
                            <?php if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post); ?>" style="display: block; padding: 1.5rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px; text-decoration: none; text-align: right; transition: all 0.3s ease;" class="wine-card-hover">
                                    <div style="display: flex; align-items: center; justify-content: flex-end; gap: 0.5rem; color: var(--wine-rose); font-size: 0.875rem; margin-bottom: 0.5rem;">
                                        Next Post
                                        <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </div>
                                    <h4 style="color: var(--wine-red); font-family: var(--font-playfair); margin: 0; font-size: 1.125rem;"><?php echo get_the_title($next_post); ?></h4>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>

                <!-- Related Posts -->
                <?php
                $categories = get_the_category();
                if ($categories) {
                    $category_ids = array();
                    foreach ($categories as $category) {
                        $category_ids[] = $category->term_id;
                    }
                    
                    $related_posts = get_posts(array(
                        'category__in' => $category_ids,
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3,
                        'post_status' => 'publish'
                    ));
                    
                    if ($related_posts) : ?>
                        <section style="margin-top: 4rem; padding-top: 3rem; border-top: 2px solid var(--wine-light);" class="wine-fade-in-up wine-delay-6">
                            <h3 style="font-size: 2rem; margin-bottom: 2rem; color: var(--wine-red); font-family: var(--font-playfair); text-align: center;">You Might Also Enjoy</h3>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                                <?php foreach ($related_posts as $index => $related_post) : setup_postdata($related_post); ?>
                                    <article class="blog-card wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                        <div style="position: relative; overflow: hidden;">
                                            <?php if (has_post_thumbnail($related_post->ID)) : ?>
                                                <img src="<?php echo get_the_post_thumbnail_url($related_post->ID, 'medium'); ?>" alt="<?php echo get_the_title($related_post); ?>" style="width: 100%; height: 150px; object-fit: cover;">
                                            <?php else : ?>
                                                <div style="width: 100%; height: 150px; background: var(--wine-gradient); display: flex; align-items: center; justify-content: center;">
                                                    <svg style="width: 3rem; height: 3rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                                        <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                                    </svg>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <?php 
                                            $post_categories = get_the_category($related_post->ID);
                                            if ($post_categories) : ?>
                                                <span style="position: absolute; top: 0.5rem; left: 0.5rem; background: var(--wine-red); color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.75rem;" class="wine-sway">
                                                    <?php echo $post_categories[0]->name; ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div style="padding: 1rem;">
                                            <h4 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--wine-red); font-family: var(--font-playfair); line-height: 1.3;">
                                                <a href="<?php echo get_permalink($related_post); ?>" style="text-decoration: none; color: inherit;">
                                                    <?php echo get_the_title($related_post); ?>
                                                </a>
                                            </h4>
                                            <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.5; margin-bottom: 1rem;">
                                                <?php echo wp_trim_words(get_the_excerpt($related_post), 15); ?>
                                            </p>
                                            <div style="display: flex; align-items: center; justify-content: space-between; font-size: 0.75rem; color: #9ca3af;">
                                                <span><?php echo get_the_date('M j', $related_post); ?></span>
                                                <a href="<?php echo get_permalink($related_post); ?>" style="color: var(--wine-rose); font-weight: 600; text-decoration: none;">Read More →</a>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </div>
                        </section>
                    <?php endif;
                }
                ?>
            </article>

            <!-- Comments -->
            <?php if (comments_open() || get_comments_number()) : ?>
                <div style="margin-top: 4rem; padding-top: 3rem; border-top: 2px solid var(--wine-light);" class="wine-fade-in-up wine-delay-7">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>