<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mjexports
 */

get_header();
?>

<section class="detailed-blog-banner-main white-bg">
        <div class="banner blog-banner-bg">
            <div class="container ">
                <div class="blog-detail-title">
                    <h1 class="primary-heading tac blog-detail-banner-head">
						<?php the_title(); ?>
					</h1>
					
					<div class="col-md-12 tac global-vertical-padding-sm">
						<span class="blog-date"><?php echo get_the_category( $post->ID )[0]->name;?></span>
						<span class="blog-date"><?php echo get_the_date(); ?></span>
					</div>

                    <div class="global-vertical-padding blog-banner-image">
					<?php the_post_thumbnail( 'full' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="details white-bg">
        <div class="container">
            <div class="global-vertical-padding introduction blog-content para">
					<?php the_content(); ?>
			</div>
		</div>
	</section>


	<!-- Similar Blogs -->
	<section class="blog light-blue">
        <div class="container">
            <div class="global-vertical-padding">
                <div class="feature">
                    <div class="col-md-10">
                        <h3 class="seconday-heading grad-text featured">
                        <?php if ( get_field('featured_main_title',6) ) : ?>
                            <?php echo get_field('featured_main_title',6); ?>
                        <?php endif; ?>
                        </h3>
                    </div>
                    <div class="col-md-2 global-padding-top-sm">
                    <?php if ( get_field('link_to_blog_page',6) ) : ?>
                        <a href=" <?php echo get_field('link_to_blog_page',6)["url"]; ?>">
                            <span class="grad-text view-all">
                            <?php echo get_field('link_to_blog_page',6)["title"]; ?></span>
                                <div class="pink-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow-pink.svg" alt=""></div>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 global-vertical-padding-sm">
                        <div class="row">
                    <?php 
                        $featured_posts = get_field('featured_posts',6); 
                        if( $featured_posts ):
                        foreach( $featured_posts as $post ):
                        setup_postdata($post);
                    ?>
                        <a href="<?php the_permalink(); ?>">
                        <div class="col-md-4">
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


<?php
get_footer();
