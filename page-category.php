<?php

/**
 * Templare Version 1.0.0
 * Template for Category.
 * Template name: Category
 * This page uses ACF fields. Please go to the WordPress dashboard to manage the fields.
 */

get_header(); ?>


<section>
        <div class="banner blog-banner-bg">
            <div class="container ">
               
                <div class="category-banner">
                    <div class="global-vertical-padding-sm">
                        <h6>Offering-T-Shirts</h6>
                    </div>
                    <h1 class="seconday-heading bold-text">
						<?php the_content(); ?>
					</h1>
                </div> 
            </div>  
        </div>              
</section>

<section class="white-bg first-type">
<div class="global-padding-bottom-sm">
    <div class="container">
    <?php if ( have_rows('tshirt') ) : ?>
        <?php while( have_rows('tshirt') ) : the_row(); ?>
              <?php if ( get_sub_field('category_title') ) : ?>
                    <div class=" global-padding-top-sm"><h5 class="category-title blue-text bold-text"> <?php echo the_sub_field('category_title'); ?></h5></div>
              <?php endif; ?>
       
         <div class="category-list-details">
            <ul class="category-list blue-text">
            <?php if ( have_rows('category_list') ) : ?>
               <?php while( have_rows('category_list') ) : the_row(); ?>
                <li>
                <div class="category-img inline"><img src="<?php echo the_sub_field('image')['url']; ?>"/></div>
                  <div class="inline icon-align">
                  <h3 class="bold-text list-title"><?php echo the_sub_field('list_heading'); ?></h3>
                  <div class=" category-list-content">
                  <p><?php echo the_sub_field('list_content'); ?></p>
                  </div>
                  </div>
                </li>
                <?php endwhile; ?>
            <?php endif; ?>
             <!-- <li>
                <div class="category-img inline"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/tshirt-2.jpg"></div>
                  <div class="inline icon-align">
                  <h3 class="bold-text list-title">V-Neck T-shirts</h3>
                  <div class=" category-list-content">
                  <p>V – neck T-shirts are a kind of an informal wear that gives a chic look style. This T-shirt works well for those who have broader shoulders and a shorter neck. If you have been spending time in the gym to build your body, then this T-shirt would be the best to show off your neckline and chest-cut.</p>
                  </div>
                  </div>
                </li>
                <li>
                <div class="category-img inline"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/tshirt-3.jpg"></div>
                  <div class="inline icon-align">
                  <h3 class="bold-text list-title">Hoodie T-shirts</h3>
                  <div class=" category-list-content">
                  <p>One of the most popular T-shirts among both men and women would be, a Hoodie Tshirt. It gives you instant coziness the moment you wear it. If you are a traveler, vlogger and need some perfect clothes to dive in, then hoodies would be the best option.</p>
                  </div>
                  </div>
                </li>
                <li>
                <div class="category-img inline"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/tshirt-4.jpg"></div>
                  <div class="inline icon-align">
                  <h3 class="bold-text list-title">Y – Neck Tshirts</h3>
                  <div class=" category-list-content">
                  <p>Y – Neck Shirts are the type of elongated V neck-shaped T-shirts. In Short, they are the collarless version of Polo T-shirts and they have buttons on the elongated cut of the neck design. You can easily style them by unbuttoning some of them and it gives a toned look by flaunting the body shape.</p>
                  </div>
                  </div>
                </li>-->
                
            </ul>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
    </div>
</div>
</section>

<?php
get_footer();
