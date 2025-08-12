<?php
/**
 * Template for Contact Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div style="padding-top: 6rem;">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hero Section for Contact -->
            <section style="padding: 4rem 0; background: linear-gradient(135deg, rgba(127, 29, 29, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="text-align: center; margin-bottom: 3rem;" class="wine-fade-in-up">
                        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--wine-red); font-family: var(--font-playfair);">
                            Get In Touch
                        </h1>
                        <p style="font-size: 1.25rem; color: #6b7280; max-width: 600px; margin: 0 auto;">
                            Ready to create your perfect wine experience? We'd love to hear from you.
                        </p>
                        <div style="width: 100px; height: 3px; background: var(--wine-gradient); margin: 2rem auto 0; border-radius: 2px;"></div>
                    </div>
                </div>
            </section>

            <!-- Contact Content -->
            <section style="padding: 4rem 0;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; margin-bottom: 4rem;">
                        
                        <!-- Contact Form -->
                        <div class="wine-fade-in-up wine-delay-1">
                            <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                Send Us a Message
                            </h2>
                            
                            <form id="wine-contact-form" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1);">
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-name" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Full Name *</label>
                                    <input type="text" id="contact-name" name="name" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                </div>
                                
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-email" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Email Address *</label>
                                    <input type="email" id="contact-email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                </div>
                                
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-phone" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Phone Number</label>
                                    <input type="tel" id="contact-phone" name="phone" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                </div>
                                
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-service" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Service Interest</label>
                                    <select id="contact-service" name="service" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                        <option value="">Select a service...</option>
                                        <option value="private-tasting">Private Wine Tasting</option>
                                        <option value="wine-education">Wine Education Class</option>
                                        <option value="vineyard-tour">Vineyard Tour</option>
                                        <option value="corporate-event">Corporate Wine Event</option>
                                        <option value="wedding">Wedding Wine Service</option>
                                        <option value="virtual-tasting">Virtual Wine Tasting</option>
                                        <option value="consultation">Wine Consultation</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-guests" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Number of Guests</label>
                                    <input type="number" id="contact-guests" name="guests" min="1" max="50" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                </div>
                                
                                <div style="margin-bottom: 1.5rem;">
                                    <label for="contact-date" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Preferred Date</label>
                                    <input type="date" id="contact-date" name="preferred_date" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'">
                                </div>
                                
                                <div style="margin-bottom: 2rem;">
                                    <label for="contact-message" style="display: block; margin-bottom: 0.5rem; color: var(--wine-red); font-weight: 600;">Message *</label>
                                    <textarea id="contact-message" name="message" rows="4" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; resize: vertical; transition: border-color 0.3s ease;" onfocus="this.style.borderColor='var(--wine-rose)'" onblur="this.style.borderColor='#e5e7eb'" placeholder="Tell us about your wine experience vision..."></textarea>
                                </div>
                                
                                <button type="submit" style="width: 100%; background: var(--wine-gradient); color: white; padding: 1rem 2rem; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 0.5rem;" class="wine-card-hover" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                                    <span>Send Message</span>
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        
                        <!-- Contact Information -->
                        <div class="wine-fade-in-up wine-delay-2">
                            <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: var(--wine-red); font-family: var(--font-playfair);">
                                Contact Information
                            </h2>
                            
                            <!-- Contact Details -->
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1); margin-bottom: 2rem;">
                                <div style="margin-bottom: 2rem;">
                                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                        <div style="width: 50px; height: 50px; background: var(--wine-gradient); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;" class="wine-sway">
                                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair);">Email</h3>
                                            <p style="margin: 0; color: #6b7280;">
                                                <a href="mailto:<?php echo get_theme_mod('contact_email', 'hello@perfectpourexperience.com'); ?>" style="color: var(--wine-rose); text-decoration: none;">
                                                    <?php echo get_theme_mod('contact_email', 'hello@perfectpourexperience.com'); ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="margin-bottom: 2rem;">
                                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                        <div style="width: 50px; height: 50px; background: var(--wine-gradient); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;" class="grape-float">
                                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.79 6.62l2.27-2.27c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.27 2.27z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair);">Phone</h3>
                                            <p style="margin: 0; color: #6b7280;">
                                                <a href="tel:<?php echo get_theme_mod('contact_phone', '(555) 123-WINE'); ?>" style="color: var(--wine-rose); text-decoration: none;">
                                                    <?php echo get_theme_mod('contact_phone', '(555) 123-WINE'); ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="margin-bottom: 2rem;">
                                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                        <div style="width: 50px; height: 50px; background: var(--wine-gradient); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;" class="wine-swirl">
                                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair);">Location</h3>
                                            <p style="margin: 0; color: #6b7280;">
                                                <?php echo get_theme_mod('contact_location', 'San Francisco Bay Area<br>& Wine Country'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                        <div style="width: 50px; height: 50px; background: var(--wine-gradient); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;" class="wine-shimmer">
                                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair);">Business Hours</h3>
                                            <p style="margin: 0; color: #6b7280;">
                                                Monday - Friday: 10am - 8pm<br>
                                                Saturday - Sunday: 11am - 9pm
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Social Media -->
                            <div style="background: var(--wine-gradient); padding: 2rem; border-radius: 12px; color: white; text-align: center;">
                                <h3 style="margin-bottom: 1rem; color: white; font-family: var(--font-playfair);">Follow Our Wine Journey</h3>
                                <p style="margin-bottom: 1.5rem; opacity: 0.9;">Stay connected for wine tips, events, and exclusive offers</p>
                                
                                <div style="display: flex; justify-content: center; gap: 1rem;">
                                    <?php if (get_theme_mod('facebook_url')) : ?>
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;" class="wine-card-hover">
                                            <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <?php if (get_theme_mod('instagram_url')) : ?>
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;" class="wine-card-hover">
                                            <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986s11.987-5.368 11.987-11.986C24.014 5.367 18.635.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.326-1.297-.878-.808-1.297-1.959-1.297-3.256 0-1.297.419-2.448 1.297-3.326.878-.878 2.029-1.297 3.326-1.297 1.297 0 2.448.419 3.326 1.297.878.878 1.297 2.029 1.297 3.326 0 1.297-.419 2.448-1.297 3.256-.878.807-2.029 1.297-3.326 1.297zm7.83-9.404c-.878 0-1.587-.709-1.587-1.587 0-.878.709-1.587 1.587-1.587.878 0 1.587.709 1.587 1.587 0 .878-.709 1.587-1.587 1.587z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div style="margin: 4rem 0;" class="wine-fade-in-up wine-delay-3">
                        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 3rem; color: var(--wine-red); font-family: var(--font-playfair);">Frequently Asked Questions</h2>
                        
                        <div style="max-width: 800px; margin: 0 auto;">
                            <?php
                            $faqs = array(
                                array(
                                    'question' => 'How far in advance should I book a wine tasting?',
                                    'answer' => 'We recommend booking at least 2-3 weeks in advance, especially for weekend events. However, we can often accommodate last-minute requests depending on availability.'
                                ),
                                array(
                                    'question' => 'Do you provide wine for the tastings?',
                                    'answer' => 'Yes, all wine tastings include carefully selected wines as part of the service. We can also incorporate wines from your personal collection if desired.'
                                ),
                                array(
                                    'question' => 'Can you accommodate dietary restrictions?',
                                    'answer' => 'Absolutely! We offer various food pairing options and can accommodate most dietary restrictions including vegetarian, vegan, gluten-free, and other special needs.'
                                ),
                                array(
                                    'question' => 'What areas do you serve?',
                                    'answer' => 'We primarily serve the San Francisco Bay Area and California Wine Country. Contact us to discuss services in other locations.'
                                ),
                                array(
                                    'question' => 'What is your cancellation policy?',
                                    'answer' => 'We require 48-hour notice for cancellations. Cancellations made less than 48 hours in advance may be subject to a cancellation fee.'
                                )
                            );
                            
                            foreach ($faqs as $index => $faq) : ?>
                                <div style="margin-bottom: 1.5rem; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); border: 1px solid rgba(127, 29, 29, 0.1);" class="wine-fade-in-up wine-delay-<?php echo $index + 1; ?>">
                                    <div style="padding: 1.5rem; cursor: pointer; border-bottom: 1px solid #f3f4f6;" onclick="toggleFAQ(<?php echo $index; ?>)">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <h3 style="margin: 0; color: var(--wine-red); font-family: var(--font-playfair); font-size: 1.25rem;">
                                                <?php echo $faq['question']; ?>
                                            </h3>
                                            <svg id="faq-icon-<?php echo $index; ?>" style="width: 1.5rem; height: 1.5rem; color: var(--wine-rose); transition: transform 0.3s ease;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="faq-answer-<?php echo $index; ?>" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                                        <p style="padding: 1.5rem 0; margin: 0; color: #6b7280; line-height: 1.6;">
                                            <?php echo $faq['answer']; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </div>
</main>

<script>
// Contact form handling
document.getElementById('wine-contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simple form validation and submission
    const formData = new FormData(this);
    
    // Here you would typically send the data to your server
    // For now, we'll show a success message
    alert('Thank you for your message! We\'ll get back to you within 24 hours.');
    
    // Reset form
    this.reset();
});

// FAQ toggle functionality
function toggleFAQ(index) {
    const answer = document.getElementById('faq-answer-' + index);
    const icon = document.getElementById('faq-icon-' + index);
    
    if (answer.style.maxHeight === '0px' || answer.style.maxHeight === '') {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
    } else {
        answer.style.maxHeight = '0px';
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>

<style>
@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }
    
    .contact-form {
        order: 2;
    }
    
    .contact-info {
        order: 1;
    }
}
</style>

<?php get_footer(); ?>