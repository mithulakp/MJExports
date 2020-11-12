<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjexports
 */

get_header();
?>

<section class="tac" >
    <div class="banner blog-banner">
        <div class="container">
            <div class="inner-banner-title">
                <h1 class="primary-heading small-bottom-pad tac"><?php  echo single_post_title(); ?></h1>
                <?php if ( get_field('description') ) : ?>
                    <p class="intro-heading"><?php echo get_field('description'); ?></p>
                <?php endif; ?>
            </div>
		</div>
		
		<div class="container ">
            <div class="category-tabs global-padding-top tac">
			<?php 
			$categories = get_categories();
			foreach($categories as $category) {
   				echo '<div class="blog-tablink"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
			}?>
			</div>
          
		</div>

    </div>
</section>


<section class="blog light-blue">
	<div class="container">
		<div class="global-vertical-padding-sm">
			<div class="col-md-12 global-padding-top">
				<?php if ( have_posts() ): ?>
			
					<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
					<div class="col-md-4 blog-post-card">
					<article>
					<div><?php the_post_thumbnail( 'full' ); ?></div>
						<div class="product-text">
							<h3 class="blue-text"><?php the_title(); ?></h3>
							<span class="tag pink-text"> <?php echo get_the_category( $post->ID )[0]->name;   ?></span>
						</div>
					</div>
					</article>
					</a>
					<?php endwhile; ?>

				<?php else: ?>
				<?php endif; ?>
		</div>
	</div>
	</div>

	<?php wpbeginner_numeric_posts_nav(); ?>

	</div>
</section>


<?php
get_footer();
