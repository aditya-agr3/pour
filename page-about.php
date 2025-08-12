<?php
/**
 * Template for About Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="padding-top: 6rem;">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hero Section for About Page -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, rgba(127, 29, 29, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up">
                        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            <?php the_title(); ?>
                        </h1>
                        <div style="width: 100px; height: 3px; background: var(--wine-gradient); margin: 0 auto; border-radius: 2px;"></div>
                    </div>
                </div>
            </section>

            <!-- About Content -->
            <section style="padding: 4rem 0;">
                <div style="max-width: 1000px; margin: 0 auto; padding: 0 2rem;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;" class="wine-fade-in-up wine-delay-1">
                        <div>
                            <?php if (has_post_thumbnail()) : ?>
                                <div style="position: relative; border-radius: 12px; overflow: hidden;" class="wine-card-hover">
                                    <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 400px; object-fit: cover;')); ?>
                                    <div style="position: absolute; top: 1rem; right: 1rem; opacity: 0.3;">
                                        <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24" class="wine-sway">
                                            <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                            <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                        </svg>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div>
                            <div style="color: #374151; line-height: 1.8; font-size: 1.125rem;">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Wine Experience Stats -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin: 4rem 0;" class="wine-fade-in-up wine-delay-2">
                        <div style="text-align: center; padding: 2rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px;" class="wine-card-hover">
                            <div style="font-size: 3rem; font-weight: 700; color: var(--wine-red); font-family: var(--font-playfair); margin-bottom: 0.5rem;" class="wine-shimmer">
                                <?php echo get_field('years_experience') ?: '10+'; ?>
                            </div>
                            <div style="color: #6b7280; font-weight: 600;">Years Experience</div>
                        </div>
                        
                        <div style="text-align: center; padding: 2rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px;" class="wine-card-hover">
                            <div style="font-size: 3rem; font-weight: 700; color: var(--wine-burgundy); font-family: var(--font-playfair); margin-bottom: 0.5rem;" class="wine-shimmer">
                                <?php echo get_field('clients_served') ?: '500+'; ?>
                            </div>
                            <div style="color: #6b7280; font-weight: 600;">Happy Clients</div>
                        </div>
                        
                        <div style="text-align: center; padding: 2rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px;" class="wine-card-hover">
                            <div style="font-size: 3rem; font-weight: 700; color: var(--wine-rose); font-family: var(--font-playfair); margin-bottom: 0.5rem;" class="wine-shimmer">
                                <?php echo get_field('wine_regions') ?: '25+'; ?>
                            </div>
                            <div style="color: #6b7280; font-weight: 600;">Wine Regions</div>
                        </div>
                        
                        <div style="text-align: center; padding: 2rem; background: rgba(127, 29, 29, 0.05); border-radius: 12px;" class="wine-card-hover">
                            <div style="font-size: 3rem; font-weight: 700; color: var(--wine-deep); font-family: var(--font-playfair); margin-bottom: 0.5rem;" class="wine-shimmer">
                                <?php echo get_field('tastings_hosted') ?: '1000+'; ?>
                            </div>
                            <div style="color: #6b7280; font-weight: 600;">Tastings Hosted</div>
                        </div>
                    </div>

                    <!-- Wine Philosophy Section -->
                    <?php if (get_field('wine_philosophy')) : ?>
                        <div style="background: var(--wine-gradient); color: white; padding: 3rem; border-radius: 16px; text-align: center; margin: 4rem 0;" class="wine-fade-in-up wine-delay-3">
                            <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: white; font-family: var(--font-playfair);">Our Wine Philosophy</h2>
                            <p style="font-size: 1.25rem; line-height: 1.6; max-width: 600px; margin: 0 auto;">
                                <?php echo get_field('wine_philosophy'); ?>
                            </p>
                            
                            <!-- Floating wine elements -->
                            <div style="position: absolute; top: 2rem; left: 2rem; opacity: 0.2;" class="wine-float-bg-1">
                                <svg style="width: 2rem; height: 2rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                    <circle cx="8" cy="8" r="1"/>
                                    <circle cx="12" cy="6" r="1"/>
                                    <circle cx="10" cy="12" r="1"/>
                                </svg>
                            </div>
                            
                            <div style="position: absolute; bottom: 2rem; right: 2rem; opacity: 0.2;" class="wine-float-bg-2">
                                <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6 2v6c0 3.31 2.69 6 6 6s6-2.69 6-6V2H6zm2 2h8v4c0 2.21-1.79 4-4 4s-4-1.79-4-4V4z"/>
                                    <path d="M11 14v6H8v2h8v-2h-3v-6"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Team Section -->
                    <?php 
                    $team_members = get_field('team_members');
                    if ($team_members) : ?>
                        <section style="margin: 4rem 0;" class="wine-fade-in-up wine-delay-4">
                            <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 3rem; color: var(--wine-red); font-family: var(--font-playfair);">Meet Our Team</h2>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                                <?php foreach ($team_members as $index => $member) : ?>
                                    <div style="text-align: center; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);" class="wine-card-hover wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                        <?php if ($member['photo']) : ?>
                                            <img src="<?php echo $member['photo']['url']; ?>" alt="<?php echo $member['name']; ?>" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 1rem; border: 4px solid var(--wine-light);">
                                        <?php endif; ?>
                                        
                                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                            <?php echo $member['name']; ?>
                                        </h3>
                                        
                                        <p style="color: var(--wine-rose); font-weight: 600; margin-bottom: 1rem;">
                                            <?php echo $member['title']; ?>
                                        </p>
                                        
                                        <p style="color: #6b7280; line-height: 1.6;">
                                            <?php echo $member['bio']; ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Call to Action -->
                    <div style="text-align: center; margin: 4rem 0; padding: 3rem; background: rgba(127, 29, 29, 0.05); border-radius: 16px;" class="wine-fade-in-up wine-delay-5">
                        <h2 style="font-size: 2rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            Ready to Discover Your Perfect Pour?
                        </h2>
                        <p style="font-size: 1.25rem; color: #6b7280; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Join us for an unforgettable wine experience tailored to your preferences and palate.
                        </p>
                        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;" class="wine-card-hover">
                            <span>Contact Us Today</span>
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
    .about-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    
    .team-grid {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php get_footer(); ?>