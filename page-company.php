<?php

/**
 * Templare Version 1.0.0
 * Template name: Company
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>


<section class="tac" style="background-image: url(' <?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
    <div class="banner offering-bg banner-w-image">
        <div class="container">
            <div class="inner-banner-title" data-aos="fade-up">
                <h1 class="primary-heading small-bottom-pad tac"><?php the_title(); ?></h1>
                <?php if ( get_field('banner_description') ) : ?>
                <p class="why-us-intro"><?php echo get_field('banner_description'); ?></p> 
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section class="light-blue section" id="company-history">
        <div class="container">

        <div class="tabs tac" data-aos="fade-up">
            <ul class="company-tab blue-text">
                <li class="active"><a href="#company-history">HISTORY</a></li>
                <li><a href="#our-team">OUR TEAM</a></li>
                <li><a href="#our-strength">OUR STRENGTH</a></li>
            </ul>
        </div>

            <div id="tab1" class="global-padding-bottom global-padding-top-sm" data-aos="fade-up">
               
                    <?php if ( get_field('main_heading') ) : ?>
                        <h3 class="bold-text grad-text tac primary-heading"><?php echo get_field('main_heading'); ?></h3>
                    <?php endif; ?>
                   
                <div class="company-slide padding-top-sm">
                    <div class="owl-carousel company-slider owl-theme">

                    <?php if ( have_rows('timeline') ) : ?>
                    
                        <?php while( have_rows('timeline') ) : the_row(); ?>
                    
                        <div class="blog-item">
                            <div class="col-md-4 col-md-offset-1 company-slider-image">
                            <?php if( get_sub_field('image') ) : ?>
                                <img src="<?php echo get_sub_field('image')["url"]; ?>" alt="<?php echo get_sub_field('image')["alt"]; ?>">
                                
                            <?php endif; ?>
                            
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="history-head">
                                    <h3 class="tertiary-heading blue-text mtac">
                                        <?php if( get_sub_field('title') ) : ?>
                                            <?php echo get_sub_field('title'); ?>
                                        <?php endif; ?>
                                        
                                    </h3>
                                </div>
                                <div class="introduction blue-text global-padding-top-sm history-sub">
                                   <?php if( get_sub_field('content') ) : ?>
                                       <?php echo get_sub_field('content'); ?>
                                   <?php endif; ?>
                                   
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
</section>


<section id="our-team" class="mj-exports-team blue-bg global-padding-bottom section" >
        <div class="container">
            <div class="global-vertical-padding ">
                <?php if ( get_field('team_main_heading') ) : ?>
                    <h3 class="primary-heading grad-text tac"><?php echo get_field('team_main_heading'); ?></h3>
                <?php endif; ?>
            
                <div class="col-md-12 product-align  global-padding-top">

             <?php $i=0; if ( have_rows('team_members') ) : ?>
                <?php while( have_rows('team_members') ) : the_row(); $i++; ?>
                <div class="col-md-3 team-single col-xs-12 member-card" data-aos="fade-up" data-aos-delay="<?php echo  $i; ?>00">
                        <?php if( get_sub_field('image') ) : ?>
                            <img src="<?php echo get_sub_field('image')["url"]; ?>" alt=" <?php echo get_sub_field('image')["alt"]; ?>">
                        <?php endif; ?>
                        <div class="global-padding-bottom-sm">
                            <h4 class="introduction team-name tac bold-text">
                                <?php if( get_sub_field('name') ) : ?>
                                    <?php echo get_sub_field('name'); ?>
                                <?php endif; ?>
                            </h4>
                            <div>
                                <h5 class="tac light-blue-text designation">
                                    <?php if( get_sub_field('designation') ) : ?>
                                        <?php echo get_sub_field('designation'); ?>
                                    <?php endif; ?>
                                    
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
        
    <section class="mj-exports-vision section">
        <div class="container-fluid">
            <div class=" global-padding-top">
                <div class="col-md-5 tac global-padding-top-sm">
                    <h3 class="primary-heading"  data-aos="fade-up">
                        <?php if ( get_field('vision_main_heading') ) : ?>
                            <?php echo get_field('vision_main_heading'); ?>
                        <?php endif; ?>      
                    </h3>
                    <div class="introduction global-vertical-padding-sm"  data-aos="fade-up">
                        <?php if ( get_field('vision_description') ) : ?>
                            <p class="side-padded"><?php echo get_field('vision_description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="why-us-img col-md-6">
           <div class="row">
            <?php if ( get_field('vision_image') ) : ?>
                    <img src="<?php echo get_field('vision_image')["url"]; ?>" alt="<?php  echo get_field('vision_image')["alt"];?>">
                <?php endif; ?>
           </div>
            </div>
        </div>
    </section>


    <section id="our-strength" class="mj-exports-strength light-blue section" >
        <div class="container global-padding-top">
            <div class="col-md-4 global-padding-bottom" data-aos="fade-up">
                <div id="tab3">
                    <h3 class="primary-heading  grad-text our-strength-text">
                        <?php if ( get_field('strength_main_heading') ) : ?>
                           <?php echo get_field('strength_main_heading'); ?>
                        <?php endif; ?>
                    </h3>
                </div>
                <div class="client-intro blue-text our-strength-sub-text">
                <?php if ( get_field('strength_description') ) : ?>
                           <?php echo get_field('strength_description'); ?>
                        <?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 global-padding-bottom col-md-offset-1 strength-accordion blue-text" data-aos="fade-up" data-aos-delay="50">

            <?php if ( have_rows('strengths') ) : ?>
                <?php while( have_rows('strengths') ) : the_row(); ?>
                <h3 class="accordion client-intro accordion-heading">
                    <?php if( get_sub_field('title') ) : ?>
                        <?php echo get_sub_field('title'); ?>
                    <?php endif; ?>
                </h3>
                <div class="accordion-content  introduction">
                <?php if( get_sub_field('content') ) : ?>
                       <p><?php echo get_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            

            </div>
        </div>
    </section>


<?php
get_footer();