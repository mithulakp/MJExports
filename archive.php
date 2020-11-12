<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mjexports
 */

get_header();
$term = get_queried_object();
?>

<section class="tac" >
    <div class="banner blog-banner">
        <div class="container">
            <div class="inner-banner-title">
                <h1 class="intro-heading small-bottom-pad tac"><?php echo  get_the_archive_title(); ?></h1>
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
				if($term->slug == $category->slug){

					echo '<div class="blog-tablink active"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
				}
				else{
					echo '<div class="blog-tablink"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
				}
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
