<?php

/**
 * Templare Version 1.0.0
 * Template for homepage.
 * Template name: Homepage
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>

<!-- Banner -->
<section class="banner home-banner">
        <div class="inner-content">
           
            <div class="container ">
                <div class="banner-title" data-aos="fade-up">
                    <h1 class="primary-heading"><?php if ( get_field('main_heading') ) : ?><?php echo get_field('main_heading'); ?><?php endif; ?>
                    </h1>
                </div>
                <div class="banner-content" data-aos="fade-up" data-aos-delay="50">
                    <div class="introduction">
                        <?php if ( get_field('banner_description') ) : ?>
                            <p><?php echo get_field('banner_description'); ?></p>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <?php if ( get_field('link_to') ) : ?>
                <div data-aos="fade-up" data-aos-delay="100">
                    <a href="<?php echo get_field('link_to')["url"]; ?>">
                        <button class="btn btn--shadowed">
                        <?php echo get_field('link_to')["title"]; ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow.svg"class="button-arrow" alt="->">
                        </button>
                    </a>
                    </div>
                <?php endif; ?>
                
            </div>


             <!----------slider---------->
             <div class="slider container">
                <div class="banner-slide owl-carousel owl-theme">

                <?php 
                    $images = get_field('banners');
                    $size = 'full'; 
                    if( $images ): 
                ?>

                <?php foreach( $images as $image ): ?>
                    <div class="item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
                
                
                </div>
            </div>
            <!---------slider end---------->


        </div>
    </section>




    <section class="mj-exports-intro" >
        <div class="container">
            <div class="global-padding-top global-padding-bottom-sm  intro">
                <div class="intro-heading blue-text tac">
                <?php if ( get_field('introduction') ) : ?>
                    <p><?php echo get_field('introduction'); ?></p>
                <?php endif; ?>
                </div>
            </div>
            <div class="icons">

                <?php $i=1; if ( have_rows('usps') ) : ?>
                    <?php while( have_rows('usps') ) : the_row(); ?>

                    <div  class="icon-box"  data-aos="fade-up" data-aos-delay="<?php echo $i++;  ?>00">
                        <div class="single-icon">
                            <div class="white-box"><img src="<?php echo get_sub_field('icons')["url"]; ?>" alt="<?php echo get_sub_field('icons')["alt"]; ?>"></div>
                            <div class="icon-content tac"><?php the_sub_field('usp'); ?></div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
              
            </div>
        </div>
    </section>

    <section class="what-we-do">
        <div class="container">
            <div class="col-md-6">
                <div class="gradient-box"   data-aos="fade-up"> 
                    <div class="grad-content-padding global-vertical-padding">
                        <h3 class="seconday-heading white-text">
                        <?php if ( get_field('wwf_heading') ) : ?>
                            <?php echo get_field('wwf_heading'); ?>
                        <?php endif; ?>
                        </h3>
                        <div class="introduction">
                            <div class="grad-box-intro">
                            <?php if ( get_field('wwf_content') ) : ?>
                                <p><?php echo get_field('wwf_content'); ?></p>
                            <?php endif; ?>
                            </div>
                            <?php if ( get_field('wwf_link') ) : ?>
                                <a class="view-all-link" href="<?php echo get_field('wwf_link')["url"]; ?>">
                                <span><?php echo get_field('wwf_link')["title"]; ?><span>
                                <div class="right-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow-right.svg" alt=""></div>
                            </a>
                            <?php endif; ?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-vertical-padding product-images" alt="">
            <?php 
                $wwf_images = get_field('wwf_images');
                $size = 'full'; 
                if( $wwf_images ): 
            ?>
                <div   data-aos="fade-up"   data-aos-delay="50" class="product-style product-style-1"><img src="<?php echo esc_url($wwf_images[0]['url']); ?>" alt="<?php echo esc_attr($wwf_images[0]['alt']); ?>" /></div>
                <div   data-aos="fade-up"   data-aos-delay="100" class="product-style product-padding product-style-2"><img src="<?php echo esc_url($wwf_images[1]['url']); ?>" alt="<?php echo esc_attr($wwf_images[1]['alt']); ?>" /></div>
                <div   data-aos="fade-up"   data-aos-delay="150" class="product-style product-alignment product-style-3"><img src="<?php echo esc_url($wwf_images[2]['url']); ?>" alt="<?php echo esc_attr($wwf_images[2]['alt']); ?>" /></div>

                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="mj-export-certifications ">
        <div class="container">
            <div class="col-md-4 ">
               
                        <?php if ( get_field('cert_heading') ) : ?>
                            <h3 class="seconday-heading grad-text "><?php echo get_field('cert_heading'); ?></h3>
                        <?php endif; ?>
                        
                
                <div class="introduction blue-text tac text-padding ">
                <?php if ( get_field('cert_description') ) : ?>
                    <?php echo get_field('cert_description'); ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="container global-padding-bottom">
            <?php 
                    $cert_images = get_field('certifications_logo');
                    $size = 'full'; 
                    if( $cert_images ): 
                ?>
                <?php foreach( $cert_images as $cert_image ): ?>
                <div class="icon-grid"><img src="<?php echo esc_url($cert_image['url']); ?>" alt="<?php echo esc_url($cert_image['alt']); ?>"></div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>

    <section class="numbers">
        <div class="container">

        <div class="col-md-6 global-padding-top inner-banner ">
                <div class="inner-bnr-img1">
                <?php if ( get_field('numbers_image') ) : ?>
                    <img src="<?php echo get_field('numbers_image')["url"]; ?>" alt="<?php echo get_field('numbers_image')["alt"]; ?>">
                <?php endif; ?>
                </div>
            </div>
        </div>

       <div class="container"> <div class="inner-number">
            <div class="container">
                <div class="dotted-bg"></div>

                <div class=" global-vertical-padding white-box-padding white-box-content">
                    <h5 class="pink-text ">
                        <?php if ( get_field('numbers_small_title') ) : ?>
                            <?php echo get_field('numbers_small_title'); ?>
                        <?php endif; ?>
                        
                    </h5>
                    <div class="grad-box-intro grad-box-intro-modify ">
                        <h3 class="intro-heading blue-text">
                            <?php if ( get_field('numbers_heading') ) : ?>
                                <?php echo get_field('numbers_heading'); ?>
                            <?php endif; ?>
                            
                        </h3>
                    </div>

                    <div class="white-box-grid">
                    <?php if ( have_rows('numbers') ) : ?>
                    
                        <?php while( have_rows('numbers') ) : the_row(); ?>
                        <div>
                            <h3 class="grad-text large-text "><?php the_sub_field('number'); ?></h3>
                            <h4 class="introduction blue-text grid-text-padding "><?php the_sub_field('description'); ?></h4>
                            <div class="hl"></div>
                        </div>
                            
                    
                        <?php endwhile; ?>
                    
                    <?php endif; ?>
                    
                    <?php if ( get_field('numbers_link') ) : ?>
                        <a href="<?php echo get_field('numbers_link')["url"]; ?>"><button class="btn primary-btn btn--light-shadowed">
                            <?php echo get_field('numbers_link')["title"]; ?>
                        </button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php if ( get_field('featured_posts') ) : ?>
    <section class="blog light-blue">
        <div class="container">
            <div class="global-vertical-padding">
                <div class="feature">
                    <div class="col-md-10">
                        <h3 class="seconday-heading grad-text featured">
                        <?php if ( get_field('featured_main_title') ) : ?>
                            <?php echo get_field('featured_main_title'); ?>
                        <?php endif; ?>
                        </h3>
                    </div>
                    <div class="col-md-2 global-padding-top-sm">
                    <?php if ( get_field('link_to_blog_page') ) : ?>
                        <a class="view-all-link" href=" <?php echo get_field('link_to_blog_page')["url"]; ?>">
                            <span class="grad-text view-all">
                            <?php echo get_field('link_to_blog_page')["title"]; ?></span>
                                <div class="pink-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow-pink.svg" alt=""></div>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 global-vertical-padding-sm horizontal-slider">
                        <div class="row">
                    <?php 
                        $featured_posts = get_field('featured_posts'); 
                        if( $featured_posts ):
                        foreach( $featured_posts as $post ):
                        setup_postdata($post);
                    ?>
                        <a href="<?php the_permalink(); ?>">
                        <div class="col-md-4 feat-blog-card">
                            <div>
                                <div><img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full'); ?>" alt=""></div>
                                <div class="product-text">
                                    <h3 class="blue-text"><?php the_title(); ?></h3>
                                    <span class="tag pink-text">
                                        <?php echo get_the_category( $post->ID )[0]->name;   ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                        </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php endif; ?>
<?php
get_footer();