<?php

/**
 * Templare Version 1.0.0
 * Template name: Clients
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>


<section class="banner banner-small section">
    <div class="container">
        <div class="inner-banner-title" data-aos="fade-up">
            <h1 class="primary-heading small-bottom-pad tac"><?php the_title(); ?></h1>
            <?php if ( get_field('description') ) : ?>
                <p class="intro-heading"><?php echo get_field('description'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="clients-introduction white-bg  global-vertical-padding-sm section">
    <div class="container">
        <div class="global-vertical-padding intro tac blue-text" data-aos="fade-up">
            <?php the_content(); ?>
        </div>

        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
            <?php 
                $i=0;
                $cert_images = get_field('our_clients');
                $size = 'full'; 
                if( $cert_images ): 
            ?>
            <?php foreach( $cert_images as $cert_image ): $i++; ?>
                <div class="col-md-3 col-xs-6 single-client-logo <?php if($i< 5) {echo "grid-border-hl";}?>">
                    <div class="right-border-vl global-padding-top-sm"> 
                        <img src="<?php echo esc_url($cert_image['url']); ?>" alt="<?php echo esc_url($cert_image['alt']); ?>">
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>



<section class="testimonial light-blue section" data-aos="fade-up">
        <div class="container global-vertical-padding">
            <div class="col-md-4 testimonial-quote ">
            <?php if ( get_field('clients_heading') ) : ?>
                <h3 class="seconday-heading blue-text "><?php echo get_field('clients_heading'); ?></h3>
            <?php endif; ?>
            <?php if ( get_field('clients_small_heading') ) : ?>
                <h5 class="grad-text small-title global-padding-top-sm"><?php echo get_field('clients_small_heading'); ?></h5>
            <?php endif; ?>
            
            </div>
         
            <div class="col-md-8 client-testimonial">
                <div class="row">
                <div class="client-profile-wrap">
                    <div class="testi-img">
                        <?php if ( get_field('testimonial_image') ) : ?>
                            <div class="client-profile">
                            <img src="<?php echo get_field('testimonial_image')["url"]; ?>" alt="<?php echo get_field('testimonial_image')["alt"]; ?>">
                            </div>
                        <?php endif; ?>
                        <div class="exp-grad-box testi-grad"></div>
                        
                </div>
                </div>
                <div class="client-testimonial-wrap">
                    <div class="testi-box white-bg ">
                        <div class="grad-box-intro testi-content-align ">
                            <div class="quote">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/comma.svg" alt="">
                            </div>
                            <div class="introduction blue-text grad-box-intro testi-content ">
                                <?php if ( get_field('testimonial_content') ) : ?>
                                    <p><?php echo get_field('testimonial_content'); ?></p>
                                <?php endif; ?>
                                
                            </div>
                            <?php if ( get_field('name_of_the_client') ) : ?>
                                <h3 class="grad-text client-intro "><?php echo get_field('name_of_the_client'); ?></h3>
                            <?php endif; ?>
                            
                            <?php if ( get_field('name_of_the_company') ) : ?>
                                <h5 class="introduction blue-text "><?php echo get_field('name_of_the_company'); ?></h5>
                            <?php endif; ?>
                            
                        

                        </div>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </section>

<?php
get_footer();