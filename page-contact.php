<?php

/**
 * Templare Version 1.0.0
 * Template name: Contact
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>

<section class="tac">
    <div class="banner banner-small">
        <div class="container">
            <div class="inner-banner-title" data-aos="fade-up">
            <h1 class="seconday-heading tac">
                <?php the_content(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>




    <section class="contact light-blue">
        <div class="container">
            <div class="col-md-3 global-vertical-padding blue-text"  data-aos="fade-up">
                <h3 class="client-intro bold-text">Address</h3>
                <div class="detailed-address global-top-padding">
                    <div class="introduction">
                        <?php if ( get_field('address', 'option') ) : ?>
                            <?php echo get_field('address', 'option'); ?>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class="contacts global-top-padding"  data-aos="fade-up"  data-aos-delay="50"> 
                    <div class="contact-option">
                        <div class="contact_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/message.svg"></div>
                        <div class="contact_detail">
                            <?php if ( get_field('email_address', 'option') ) : ?>
                            <?php echo get_field('email_address', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="contact-option"  data-aos="fade-up"  data-aos-delay="100">
                        <div class="contact_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/call.svg"></div>
                        <div class="contact_detail">
                            <?php if ( get_field('phone_number', 'option') ) : ?>
                            <?php echo get_field('phone_number', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    

                </div>
                <div class="global-padding-top-sm"   data-aos="fade-up"  data-aos-delay="150">
                    <?php if ( get_field('google_map_location', 'option') ) : ?>
                        <a href="<?php echo get_field('google_map_location', 'option'); ?>" target="_blank" class="">
                    <button class="location-btn"><i class="fa fa-map-marker fa-lg location-icon" aria-hidden="true" ></i>Locate on Google Map</button>
                    </a>
                        
                    <?php endif; ?>
                    
                    
                </div>
            </div>
            <div class="col-md-7 enquiry-form col-md-offset-2 global-vertical-padding blue-text"  data-aos="fade-up" >
                <h3 class="client-intro bold-text">Reach out to us to discuss your goals.</h3>
                <div class="global-top-padding contact-form-wrap">
                    <?php
                    $get_form = get_field("enquiry_form_shortcode");
                    echo do_shortcode("$get_form"); ?>
                    
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();