<?php

/**
 * Templare Version 1.0.0
 * Template name: Why us
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>


<section class="tac" style="background-image: url(' <?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
    <div class="banner offering-bg banner-w-image">
        <div class="container">
            <div class="inner-banner-title"  data-aos="fade-up">
                <h1 class="primary-heading small-bottom-pad tac"><?php the_title(); ?></h1>
                <?php if ( get_field('description') ) : ?>
                    <p class="intro-heading"><?php echo get_field('description'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section class="why-us-certification light-blue section">
    <div class="container">
        <div class="global-vertical-padding"  data-aos="fade-up">

            <?php if ( get_field('cert_heading') ) : ?>
                <h3 class="client-intro grad-text tac"><?php echo get_field('cert_heading'); ?></h3>
            <?php endif; ?>
                            
            <div class="global-vertical-padding-sm why-us-certification-icon">
            <?php 
                $cert_images = get_field('certificate_icons');
                $size = 'full'; 
                if( $cert_images ): 
            ?>
            <?php foreach( $cert_images as $cert_image ): ?>
                <div class="icon-grid why-us-icon-grid"><img src="<?php echo esc_url($cert_image['url']); ?>" alt="<?php echo esc_url($cert_image['alt']); ?>"></div>
            <?php endforeach; ?>
            <?php endif; ?>

            </div>
        </div>
        
        <div class="work-ethics"  data-aos="fade-up">
            <div class="exp-grad-box work-grad-box"></div>
            <div class="col-md-6">
                <?php if ( get_field('cert_image') ) : ?>
                    <img src="<?php echo get_field('cert_image')["url"]; ?>" alt="<?php echo get_field('cert_image')["alt"]; ?>">
                <?php endif; ?>
                
            </div>
            <div class="col-md-6 global-padding-top-sm mobile-t-pad">
            <?php if ( get_field('ethics_small_title') ) : ?>
                <h3 class=" blue-text bold-text small-title"><?php echo get_field('ethics_small_title'); ?></h3>
            <?php endif; ?>
            
            <div class="global-vertical-padding-sm">
            <?php if ( get_field('cert_main_heading') ) : ?>
                <h3 class="grad-text seconday-heading"><?php echo get_field('cert_main_heading'); ?></h3>
            <?php endif; ?>   
            </div>

                <div class="work-ethics-sub-text">
                    <div class="blue-text introduction global-padding-bottom-sm ">
                        <?php if ( get_field('cert_description') ) : ?>
                            <p><?php echo get_field('cert_description'); ?></p>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="light-blue section" data-aos="fade-up" >
    <div class="tailor section">
    <div class="container">
        <div class="col-md-6 tailor-img-style ">
                <?php if ( get_field('global_image') ) : ?>
                    <img src="<?php echo get_field('global_image')["url"]; ?>" alt="<?php echo get_field('global_image')["alt"]; ?>">
                <?php endif; ?>
                        
        </div>
        <div class="col-md-4 tailor-head tac">
        <?php if ( get_field('global_heading') ) : ?>
            <h3 class="seconday-heading"><?php echo get_field('global_heading'); ?></h3>
        <?php endif; ?>
        
            
            <div class="introduction global-padding-top-sm tailor-sub-text tac">
                <?php if ( get_field('global_content') ) : ?>
                    <p><?php echo get_field('global_content'); ?></p>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Experience -->
    <section class="experience section" data-aos="fade-up" >
        <div class="container">
            <div class="global-padding-top">
            <?php if ( get_field('experience_heading') ) : ?>
                <h3 class="primary-heading grad-text tac"><?php echo get_field('experience_heading'); ?></h3>
            <?php endif; ?>
            
                <div class="global-padding-top">
                    <div class="exp-grad-box"></div>
                    <div class="col-md-4">
                        <div>
                            <?php if ( get_field('experience_image') ) : ?>
                                <img src="<?php echo get_field('experience_image')["url"]; ?>" alt="<?php echo get_field('experience_image')["alt"]; ?>">
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                       
                            <ul class="service-icon-list global-padding-bottom-sm">

                            <?php if ( have_rows('experience') ) : ?>
                            
                                <?php while( have_rows('experience') ) : the_row(); ?>
                            
                                <li class="col-md-6">
                                    <div class="exp-list-align">
                                    <?php if( get_sub_field('heading') ) : ?>
                                        <h3 class="client-intro list-head"><?php echo get_sub_field('heading'); ?></h3>
                                    <?php endif; ?>
                                    <div class="introduction exp-list-content">
                                        <?php if( get_sub_field('content') ) : ?>
                                            <p><?php echo get_sub_field('content'); ?></p>
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
    

<!-- Featured Post -->
<section class="why-us-blog white-bg section">
        <div class="container">
            <div class="col-md-4 global-top-padding tac" data-aos="fade-up" >
                <div>
                <?php if ( get_field('blog_small_title') ) : ?>
                    <h4 class="small-title grad-text"><?php echo get_field('blog_small_title'); ?></h4>
                <?php endif; ?>
                
                    
                </div>
                <?php if ( get_field('feat_blog_title') ) : ?>
                    <h3 class="seconday-heading blue-text product-padding"><?php echo get_field('feat_blog_title'); ?></h3>
                <?php endif; ?>
                

                <div class="blue-text introduction global-vertical-padding-sm">
                <?php if ( get_field('feat_blog_description') ) : ?>
                    <p><?php echo get_field('feat_blog_description'); ?></p>
                <?php endif; ?>
                
                   
                </div>
                <?php if ( get_field('call_to_action') ) : ?>
                    <a href="<?php echo get_field('call_to_action')["url"]; ?>"><button class="btn primary-btn read-btn-spacing"><?php echo get_field('call_to_action')["title"]; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow.svg "class="primary-button-arrow " alt=""></button></a>
                <?php endif; ?>

            </div>

            <div class="col-md-8 feat-blog-image" data-aos="fade-up"  data-aos-delay="50" >
            <?php if ( get_field('feature_blog_image') ) : ?>
                        <?php if ( get_field('call_to_action') ) : ?>
                            <a href="<?php echo get_field('call_to_action')["url"]; ?>">
                                <img src="<?php echo get_field('feature_blog_image')["url"]; ?>" alt="<?php echo get_field('feature_blog_image')["alt"]; ?>">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
            </div>
        </div>

     
    </section>


<?php
get_footer();