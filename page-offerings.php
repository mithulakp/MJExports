<?php

/**
 * Templare Version 1.0.0
 * Template name: Offerings
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>


<section class="tac" style="background-image: url(' <?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
    <div class="banner offering-bg banner-w-image">
        <div class="container">
            <div class="inner-banner-title" data-aos="fade-up">
                <h1 class="primary-heading small-bottom-pad tac"><?php the_title(); ?></h1>
                <?php if ( get_field('banner_description') ) : ?>
                    <p class="intro-heading"><?php echo get_field('banner_description'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="service section" >
    <div class="container">
        <div class="global-vertical-padding" data-aos="fade-up">
            
            <div class="col-md-3">
                <h5 class="grad-text small-title normal-text"><?php echo get_field('services_small_heading'); ?></h5>
                <h3 class="seconday-heading global-vertical-padding-sm text-blue">
                <?php echo get_field('services_main_heading'); ?>
                </h3>
            </div>
            
            <div class="col-md-8 col-md-offset-1 text-blue" data-aos="fade-up" data-aos-delay="100">
                <ul class="service-icon-list">
                    <?php if ( have_rows('services') ) : ?>
                        <?php while( have_rows('services') ) : the_row(); ?>
                        <li class="col-md-6">
                            <div class="service-icon">
                                <?php if( get_sub_field('icon') ) : ?>
                                    <img src="<?php echo get_sub_field('icon')["url"]; ?>" alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                                <?php endif; ?>
                                
                            </div>
                            <div class="introduction icon-align">
                                <h3 class="list-head">
                                    <?php if( get_sub_field('heading') ) : ?>
                                        <?php echo get_sub_field('heading'); ?>
                                    <?php endif; ?>
                                    
                                </h3>
                                <div class="light-blue-text service-list-content">
                                    <?php if( get_sub_field('description') ) : ?>
                                        <?php echo get_sub_field('description'); ?>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
    </div>
</section>

    <section class="products-area light-blue section global-top-padding global-top-padding global-padding-bottom-sm " data-aos="fade-up">
        <div class="container">
            <h3 class="seconday-heading blue-text">
                <?php if ( get_field('products_main_heading') ) : ?>
                    <p><?php echo get_field('products_main_heading'); ?></p>
                <?php endif; ?>
                
            </h3>
            <div class="col-md-12 product-align">
            <?php if ( have_rows('products_list') ) : ?>
            
                <?php while( have_rows('products_list') ) : the_row(); ?>
            
                <div class="col-md-3 product-single">
                <?php if( get_sub_field('image') ) : ?>
                   <img src=" <?php echo get_sub_field('image')["url"]; ?>" alt=" <?php echo get_sub_field('image')["alt"]; ?>">
                <?php endif; ?>
                
                    <div class="padding-top-micro">
                        <h5 class="introduction blue-text ">
                            <?php if( get_sub_field('text') ) : ?>
                                <?php echo get_sub_field('text'); ?>
                            <?php endif; ?>
                            
                        </h5>
                    </div>
                </div>
            
                <?php endwhile; ?>
            
            <?php endif; ?>
            

              

            </div>
        </div>
        </div>
    </section>


<?php
get_footer();